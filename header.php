<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Shinzushi favicon.png"; ?>" />

<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<body>
<!--TELA DE CARREGAMENTO -->
<div id="preloader">
	<div id="status" class=" fadeIn">&nbsp;</div>
</div>

<div id="page">
	<div class="header">
		<nav>
			<div class="container-fluid">
				<div class="row">
					<div class="col redes">
						<ul class="redes_sociais_header">
							<li class="trip"><a target="_blank" href="#"></a></li>
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="facebook"><a target="_blank" href="#"></a></li>
							<li class="instagram"><a target="_blank" href="#"></a></li>
							<li class="hash"><a target="_blank" href="#"></a></li>
						</ul>
					</span></div>
					<div class="col text-center"><a href="<?php echo esc_url( home_url( '' ) ); ?>" title="logo"><img class="logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.jpg"; ?>" alt="logo" /></a></span></div>
					<div class="col text-right op">
						<div class="menu-open">
							<div id="nav-icon1">
							  <span></span>
							  <span></span>
							  <span></span>
							</div> menu
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div id="myNav" class="overlay">
		<!-- Overlay content -->
		<div class="overlay-content">
			<a href="<?php echo esc_url( home_url( 'o-shinzushi' ) ); ?>" title="o shinzushi">O Shinzushi</a>
			<a href="<?php echo esc_url( home_url( 'chef' ) ); ?>" title="chef">Chef</a>
			<a href="<?php echo esc_url( home_url( 'menu' ) ); ?>" title="menu">Menu</a>
			<a href="<?php echo esc_url( home_url( 'fotos' ) ); ?>" title="fotos">Fotos</a>
			<a href="<?php echo esc_url( home_url( 'imprensa' ) ); ?>" title="imprensa">Imprensa</a>
			<a href="<?php echo esc_url( home_url( 'contato' ) ); ?>" title="contato">Contato</a>
		</div>
	</div>


