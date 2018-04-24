<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="sobre-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left wow fadeInUp">
					<p class="alexb fadeInUp wow">Conheça a</p>
					<h1 class="fadeInUp wow">Rose Massagem</h1><br>
					<p>A Rose Massagem foi planejada visando atender as necessidades de cada um de nossos clientes. Aqui você encontra o melhor atendimento não só na massagem mas em todos os momentos desde sua chegada.</p>
<p>Na Rose Massagem, todas as nossas belas massagistas são especializadas em diversas técnicas de massagem, assim, com certeza irão te proporcionar a melhor experiência.<br>
Nossos ambientes são amplos e discretos, contam com todo o aparato necessário para o seu conforto, como: toalhas, salas climatizadas, luz e sons envolventes, cremes especiais, chinelos e pentes individuais, tudo sempre visando o máximo de conforto e higiene.</p>

<p>
Venha conhecer a Rose Massagem e tenha um momento prazeroso conosco, temos certeza que iremos te surpreender.</p><br>
					<a class="fadeInUp wow btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( 'fale-conosco' ) ); ?>">fale conosco</a>
				</div>
				<div class="col-md-6 text-center wow fadeInUp">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagemb.jpg"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h2 class="alexb fadeInUp wow">Nosso espaço</h2><br>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div><!-- #content -->
<?php get_footer(); ?>
