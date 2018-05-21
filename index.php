<?php
get_header('home'); ?>

<div id="content">
	<section id="sobre">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-8 text-center">
					<img class="logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" alt="logo" /><br><br>
					<h4 class="base">A história do Shin-Zushi</h4>
					<h1>A autêntica cozinha japonesa</h1>
				</div>
			</div><br>
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-8 text-center">
					<p>Falar sobre o Shin-Zushi é compartilhar um pouco da história do Japão, de seus
costumes e da valorização das tradições e da cozinha japonesa.</p>
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<span class="separador"></span><a class="ler-mais" href="<?php echo esc_url( home_url( 'o-shinzushi' ) ); ?>" title="ler mais">ler mais</a>
				</div>
			</div>
		</div>
	</section>
	<section id="fotos">
		<div class="container-fluid">
			<div class="row wow fadeIn">
				<div class="col-md">
					<div class="wrap">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre1.jpg"; ?>" alt="foto" />
					</div>
				</div>
				<div class="col-md">
					<div class="wrap">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre2.jpg"; ?>" alt="foto" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="chef">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-8 text-center">
					<h2>Equipe</h2>
					<h4 class="base">Conheça o time de profissionais do Shin-Zushi</h4>
				</div>
			</div><br>
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
			<img class="owl-prev-btn" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-left.png"; ?>" alt="botao esquerda" />
			<img class="owl-next-btn" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-right.png"; ?>" alt="botao direita" />
		</div>
	</section>
	<section id="video">
		<div class="container-fluid">
			<div class="row wow fadeIn">
				<div class="col-md-6 d-flex align-items-center">
					<div class="pl-md-5 pr-md-5">
						<h4>Shin-Zushi</h4>
						<h2 class="base">Conheça a verdadeira culinária japonesa</h2><br>
						<p>Com o objetivo de preservar a tradicional cozinha japonesa, o 
						restaurante Shin-Zushi é um grande protetor do estilo Edomae.
						Este estilo de culinária tradicional japonesa foca na valorização dos 
						alimentos regionais disponíveis para o desenvolvimento dos pratos, 
						que são delicadamente preparados e apresentados em seu estado mais 
						natural para que suas essências e sabores sejam sutilmente evidenciados. 
						</p>
						<p>
							<span class="separador"></span><a class="ler-mais" href="<?php echo esc_url( home_url( 'fotos' ) ); ?>" title="ler mais">ver galeria</a>
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre3.jpg"; ?>" alt="foto" />
				</div>
			</div>
		</div>
	</section>
	<section id="menu">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-8 text-center">
					<h2>Menu</h2>
					<h4 class="base">Aprecie a verdadeira culinária japonesa</h4>
				</div>
			</div><br>
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
			<img class="owl-prev-btnb" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-left.png"; ?>" alt="botao esquerda" />
			<img class="owl-next-btnb" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-right.png"; ?>" alt="botao direita" />
		</div>
	</section>
	<section id="mapa">
		<div class="container-fluid">
			<div class="row wow fadeIn">
				<div class="col-md-6 embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.813953729382!2d-46.64578358464342!3d-23.57512448467607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59972c70a2fd%3A0xbcc215c9a9ba93f3!2sR.+Afonso+de+Freitas%2C+169+-+Para%C3%ADso%2C+S%C3%A3o+Paulo+-+SP%2C+04006-050!5e0!3m2!1spt-BR!2sbr!4v1526470752513" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 d-flex align-items-center justify-content-center">
					<div>

						<h2 class="base">Como chegar</h2><br>
						<p>Rua Afonso de Freitas, 169 - Paraíso<br> São Paulo - SP - Brasil</p>
						<h5 class="text-center">
							<ul class="list-inline">
								<li class="list-inline-item">Reservas: 11 3889-8700</li>
							</ul>
						</h5>
						<table class="table table-borderless base">
							<thead>
							<tr>
								<th>Almoço</th>
								<th>Jantar</th>
							</tr>
							</thead>
							<tbody>
								<tr>
									<td>Terça~Sexta 10h às 14h</td>
									<td>Terça~Sexta 18h às 0h</td>
								</tr>
								<tr>
									<td>Sábado 10h às 14h</td>
									<td>Sábado 18h às 0h</td>
								</tr>
								<tr>
									<td>Domingo 10h às 14h</td>
									<td>Domingo 18h às 0h</td>
								</tr>
							</tbody>
						</table>
						<p>
							<span class="separador"></span><a class="ler-mais" href="<?php echo esc_url( home_url( 'contato' ) ); ?>" title="ler mais">contato</a>
						</p>
					</div>

				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
