<?php
get_header(); ?>

<div id="content">
	<section id="chef-pag">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-12 text-center">
					<span class="separador"></span><h1>chef</h1>
				</div>
			</div><br>
			<div class="row wow fadeIn">
				<?php
				$args = array(
				'posts_per_page' => 9999,
			    'orderby' => 'post_date',
			    'order' => 'DESC');
			    $query = new WP_Query( $args ); 
				?>
				<?php if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-md-3">
							<a href="<?php the_permalink(); ?>" class="wrap" title="chef">
								<?php the_post_thumbnail('home', array(
									'class' => "img-fluid",
								)); ?>
								<div class="overl">
									<div class="title"><?php the_title(); ?></div>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
