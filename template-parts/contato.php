<section id="contato">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center wow fadeInUp">
				<h2 class="alexb fadeInUp wow">Fale com a gente</h2>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 offset-md-2 text-left">
				<h3>Endereço</h3>
				<p>Rua Luís do Paço, 60<br>
				Carrão - São Paulo - SP<br>
				CEP 03071070 - Brasil<br>
				<a href="#">como chegar?</a>
				</p>
				<h3>Contatos</h3>
				<p class="rosa">
				<span class="fone">11 2094-5860</span><br>
				contato@rosemassagem.com.br
				</p>
			</div>
			<div class="col-md-4 text-left">
				<h3>Horários de atendimento</h3>
				<?php
				$query = new WP_Query( array( 'pagename' => 'horario' ) );
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post();
						the_content();
					endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</section>