<?php
get_header(); ?>

<div id="content">
	<section id="pag-base" class="menu">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-12 text-center">
					<span class="separador"></span><h1>menu</h1>
				</div>
			</div><br>
			<div class="row wow fadeIn d-flex align-items-center">
				<div class="col-md-6 text-left pr-md-5">
					<h2>COMBINADO DE SUSHI</h2>
          <p><span class="separador"></span></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ivamus auctor
ligula ut adipiscing elit ivamus auctor ligula ut.</p>
				</div>
				<div class="col-md-6">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/menu1.jpg"; ?>" />
				</div>
			</div>
			<div class="row wow fadeIn d-flex align-items-center">
				<div class="col-md-6">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/menu2.jpg"; ?>" />
				</div>
				<div class="col-md-6 text-left pl-md-5">
					<h2>COMBINADO DE SUSHI</h2>
          <p><span class="separador"></span></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ivamus auctor
ligula ut adipiscing elit ivamus auctor ligula ut.</p>
				</div>
			</div>
			<div class="row wow fadeIn d-flex align-items-center">
				<div class="col-md-6 text-left pr-md-5">
					<h2>COMBINADO DE SUSHI</h2>
          <p><span class="separador"></span></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ivamus auctor
ligula ut adipiscing elit ivamus auctor ligula ut.</p>
				</div>
				<div class="col-md-6">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/menu3.jpg"; ?>" />
				</div>
			</div>
      <div class="row wow fadeIn d-flex align-items-center">
        <div class="col-md-6">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/menu4.jpg"; ?>" />
        </div>
        <div class="col-md-6 text-left pl-md-5">
          <h2>COMBINADO DE SUSHI</h2>
          <p><span class="separador"></span></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ivamus auctor
ligula ut adipiscing elit ivamus auctor ligula ut.</p>
        </div>
      </div>
		</div>
	</section>
	<section id="menu" class="back-w">
		<div class="container">
			<div class="row owl-carousel wow fadeIn">
				<div class="col-md">
					<img class="img-fluid e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi 01.jpg"; ?>" alt="menu1" />
				</div>
				<div class="col-md">
					<img class="img-fluid e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi 02.jpg"; ?>" alt="menu2" />
				</div>
				<div class="col-md">
					<img class="img-fluid e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi 03.jpg"; ?>" alt="menu3" />
				</div>
			</div>
			<img class="owl-prev-btnb no-title" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-left.png"; ?>" alt="botao esquerda" />
			<img class="owl-next-btnb no-title" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-right.png"; ?>" alt="botao direita" />
		</div>
	</section>
</div>

<?php get_footer(); ?>
