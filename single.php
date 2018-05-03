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
					<?php the_post_thumbnail('', array(
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
				<div class="col-md">
					<a href="#" class="wrap" title="chef">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/chef.jpg"; ?>" alt="chef" />
						<div class="overl">
							<div class="title">nome e sobrenome</div>
						</div>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="wrap" title="chef">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/chef.jpg"; ?>" alt="chef" />
						<div class="overl">
							<div class="title">nome e sobrenome</div>
						</div>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="wrap" title="chef">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/chef.jpg"; ?>" alt="chef" />
						<div class="overl">
							<div class="title">nome e sobrenome</div>
						</div>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="wrap" title="chef">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/chef.jpg"; ?>" alt="chef" />
						<div class="overl">
							<div class="title">nome e sobrenome</div>
						</div>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="wrap" title="chef">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/chef.jpg"; ?>" alt="chef" />
						<div class="overl">
							<div class="title">nome e sobrenome</div>
						</div>
					</a>
				</div>
				<div class="col-md">
					<a href="#" class="wrap" title="chef">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/chef.jpg"; ?>" alt="chef" />
						<div class="overl">
							<div class="title">nome e sobrenome</div>
						</div>
					</a>
				</div>
			</div>
			<img class="owl-prev-btn no-title" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-left.png"; ?>" alt="botao esquerda" />
			<img class="owl-next-btn no-title" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-right.png"; ?>" alt="botao direita" />
		</div>
</div>

<?php get_footer(); ?>
