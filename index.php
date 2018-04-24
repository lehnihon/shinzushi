<?php
get_header('home'); ?>

<div id="content">
	<section id="sobre">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center wow fadeInUp">
					<img class="logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" alt="logo" /><br><br>
					<h4>A história do Shinzushi</h4>
					<h1>A autêntica cozinha japonesa</h1>
				</div>
			</div><br>
			<div class="row justify-content-center">
				<div class="col-md-8 text-center wow fadeInUp">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<span class="separador"></span><a class="ler-mais" href="#" title="ler mais">ler mais</a>
				</div>
			</div>
		</div>
	</section>
	<section id="fotos">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-md mr-md-3 wow fadeInUp">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto.jpg"; ?>" alt="logo" />
				</div>
				<div class="col-md wow fadeInUp">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto.jpg"; ?>" alt="logo" />
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
