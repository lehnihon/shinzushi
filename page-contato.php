<?php
get_header(); ?>

<div id="content">
	<section id="pag-base" class="pad">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-12 text-center">
					<span class="separador"></span><h1>contato</h1>
				</div>
			</div><br>
			<div class="row wow fadeIn">
				<div class="col-md pr-md-5">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // End of the loop. ?>
				</div>
				<div class="col-md">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/mapa.jpg"; ?>" alt="mapa" />
					<br><br>
					<p>Rua Afonso de Freitas, 169 - Paraíso, São Paulo - SP - Brasil</p>
					<div class="row text-left">
						<div class="col">
							<h5><span class="separador"></span>Reservas: 11 3889-8700</h5>
						</div>
						<div class="col">
							<h5><span class="separador"></span>assessoria@shinzushi.com.br</h5>
						</div>
					</div>
					<table class="table table-borderless base text-left">
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
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
