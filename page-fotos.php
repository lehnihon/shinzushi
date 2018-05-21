<?php
get_header(); ?>

<div id="content">
	<section id="pag-base">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-12 text-center">
					<span class="separador"></span><h1>fotos</h1>
				</div>
			</div><br>
			<div class="row wow fadeIn">
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi.jpg"; ?>" />
				</div>
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi B.jpg"; ?>" />
				</div>
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi C.jpg"; ?>" />
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi D.jpg"; ?>" />
				</div>
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi E.jpg"; ?>" />
				</div>
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi F.jpg"; ?>" />
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi G.jpg"; ?>" />
				</div>
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi H.jpg"; ?>" />
				</div>
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Restaurante Shinzushi I.jpg"; ?>" />
				</div>
			</div>
		</div>
	</section>
	<section id="mapa" class="pag-pad">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-6">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/mapa.jpg"; ?>" alt="mapa" />
				</div>
				<div class="col-md-6">
					<div class="row justify-content-center">
						<div class="col-md-8 desc">
							<h2 class="base">Como chegar</h2><br>
							<p>Rua Afonso de Freitas, 169 - Paraíso, São Paulo - SP - Brasil</p>
							<h5 class="text-center">
								<ul class="list-inline">
									<li class="list-inline-item">imprensa@shinzushi.com.br</li>
									<li class="list-inline-item">+55 11 3889-8700</li>
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
								<span class="separador"></span><a class="ler-mais" href="#" title="ler mais">contato</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
