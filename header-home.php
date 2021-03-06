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
	<div class="header-video">
		<div class="mask"></div>
		<nav>
			<div class="container-fluid">
				<div class="row">
					<div class="col redes">
						<ul>
							<li><a target="_blank" href="#"><i class="redes-a fab fa-tripadvisor"></i><i class="redes-b fab fa-tripadvisor"></i></a></li>
							<li><a target="_blank" href="#"><i class="redes-a fas fa-play"></i><i class="redes-b fas fa-play"></i></a></li>
							<li><a target="_blank" href="#"><i class="redes-a fab fa-facebook-f"></i><i class="redes-b fab fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="#"><i class="redes-a fab fa-instagram"></i><i class="redes-b fab fa-instagram"></i></a></li>
							<li><a target="_blank" href="#"><span>#ShinZushi</span></a></li>
						</ul>
					</div>
					<div class="col text-center"><a href="<?php echo esc_url( home_url( '' ) ); ?>" title="logo"><img class="logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>" alt="logo" /></a></span></div>
					<div class="col text-right op">
						<div class="menu-open">
							<div id="nav-icon1">
							  <span></span>
							  <span></span>
							  <span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/masthead.jpg"; ?>"
	     class="header-video__media"
	     data-video-URL="https://youtu.be/YghJ38K_tvo"
	     data-teaser="<?php echo dirname( get_bloginfo('stylesheet_url'))."/video/teaser-video"; ?>"
	     data-video-width="560"
	     data-video-height="315">

		<div class="tp-mask-wrap" style="position: absolute; overflow: visible; height: auto; width: auto; left:0; right:0; bottom:25px">
			<div class="tp-caption rev-scroll-btn  rs-parallaxlevel-0 hidden-xs noSwipe rs-hover-ready rs-toggle-content-active tp-scrollbelowslider" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" data-width="35" data-height="55" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:pointer;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions="[{&quot;event&quot;:&quot;click&quot;,&quot;action&quot;:&quot;scrollbelow&quot;,&quot;offset&quot;:&quot;0px&quot;}]" data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="width: 35px; height: 55px; z-index: 9; min-width: 30px; max-width: 30px; white-space: nowrap; font-weight: 100; border-color: rgba(255, 255, 255, 0.5); border-style: solid; border-width: 1px; border-radius: 23px; box-sizing: border-box; visibility: inherit; transition: none; font-style: normal; text-decoration: none solid rgb(153, 153, 153); color: rgb(153, 153, 153); background-color: rgba(0, 0, 0, 0); line-height: 29px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 14px; min-height: 50px; max-height: 50px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px; cursor: pointer;">
                <span></span>
            </div>
        </div>
        <div id="banner-text">
        	A autêntica cozinha japonesa
        </div>
        <div id="nav-bot">
        	<div class="container-fluid">
				<div class="row justify-content-end">
					<div class="col-auto">
						<a href="<?php echo esc_url( home_url( 'o-shinzushi' ) ); ?>" title="o shinzushi">O Shin-Zushi</a>
					</div>
					<div class="col-auto">
						<a href="<?php echo esc_url( home_url( 'equipe' ) ); ?>" title="equipe">Equipe</a>
					</div>
					<div class="col-auto">
						<a href="<?php echo esc_url( home_url( 'menu' ) ); ?>" title="menu">Menu</a>
					</div>
					<div class="col-auto">
						<a href="<?php echo esc_url( home_url( 'fotos' ) ); ?>" title="fotos">Fotos</a>
					</div>
					<div class="col-auto">
						<a href="<?php echo esc_url( home_url( 'imprensa' ) ); ?>" title="imprensa">Imprensa</a>
					</div>
					<div class="col-auto">
						<a href="<?php echo esc_url( home_url( 'contato' ) ); ?>" title="contato">Contato</a>
					</div>
				</div>
			</div>
        </div>
	</div>
	<div id="myNav" class="overlay">
		<!-- Overlay content -->
		<div class="overlay-content">
			<a href="<?php echo esc_url( home_url( 'o-shinzushi' ) ); ?>" title="o shinzushi">O Shin-Zushi</a>
			<a href="<?php echo esc_url( home_url( 'menu' ) ); ?>" title="menu">Menu</a>
			<a href="<?php echo esc_url( home_url( 'equipe' ) ); ?>" title="equipe">Equipe</a>
			<a href="<?php echo esc_url( home_url( 'fotos' ) ); ?>" title="fotos">Fotos</a>
			<a href="<?php echo esc_url( home_url( 'premios' ) ); ?>" title="premios">Prêmios</a>
			<a href="<?php echo esc_url( home_url( 'imprensa' ) ); ?>" title="imprensa">Imprensa</a>
			<a href="<?php echo esc_url( home_url( 'contato' ) ); ?>" title="contato">Contato</a>
		</div>
	</div>


