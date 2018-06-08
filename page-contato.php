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
				<div id="mapa" class="col-md text-left">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.813953729382!2d-46.64578358464342!3d-23.57512448467607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59972c70a2fd%3A0xbcc215c9a9ba93f3!2sR.+Afonso+de+Freitas%2C+169+-+Para%C3%ADso%2C+S%C3%A3o+Paulo+-+SP%2C+04006-050!5e0!3m2!1spt-BR!2sbr!4v1526470752513" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<br><br>
          <p class="text-center">Rua Afonso de Freitas, 169 - Paraíso, São Paulo - SP - Brasil</p>
          <h5 class="text-center">
            <ul class="list-inline">
              <li class="list-inline-item">Imprensa: 11 95577-4121</li><li class="list-inline-item">Reservas: 11 3889-8700</li>
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
                  <td>Terça-feira a Sábado 11h30 às 14h</td>
                  <td>Terça-feira a Sábado 11h30 às 14h</td>
                </tr>
                <tr>
                  <td>Segunda-feira: Fechado</td>
                  <td>Domingo 18h às 22h</td>
                </tr>
              </tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
