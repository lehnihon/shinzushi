<?php
get_header(); ?>

<div id="content">
	<section id="pag-base">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-12 text-center">
					<span class="separador"></span><h1>chef</h1>
				</div>
			</div><br>
			<div class="row wow fadeIn">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-6 text-left pr-md-5">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
				<div class="col-md-6">
					<?php the_post_thumbnail('details', array(
						'class' => "img-fluid",
					)); ?>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<section id="chef" class="back-w">
		<div class="container">
			<div class="row owl-carousel wow fadeIn">
				<?php
				$args = array(
					'posts_per_page' => 5,
				    'orderby' => 'rand');
				$query = new WP_Query( $args );
					if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-md">
						<a href="<?php the_permalink(); ?>" class="wrap" title="chef">
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-cinza img-fluid",
							)); ?>
							<div class="overl">
								<div class="title"><?php the_title(); ?></div>
							</div>
						</a>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<img class="owl-prev-btn no-title" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-left.png"; ?>" alt="botao esquerda" />
			<img class="owl-next-btn no-title" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-right.png"; ?>" alt="botao direita" />
		</div>
</div>

<?php get_footer(); ?>
