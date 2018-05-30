<?php
get_header(); ?>

<div id="content">
	<section id="pag-base" class="pad imprensa">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-12 text-center">
					<span class="separador"></span><h1>Imprensa</h1>
				</div>
			</div><br>
			<div class="row wow fadeIn">
        
				<div class="col-md pr-md-5 text-left">
          <h2>Imprensa</h2><br>

          <?php
          $args = array(
            'post_type' => 'imprensa',
            'posts_per_page' => 999,
            'orderby' => 'post_date',
            'order' => 'DESC');
          $query = new WP_Query( $args );
          ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <article>
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
              <p><span class="separador"></span><a class="ler-mais base" href="<?php the_permalink(); ?>" title="ler mais">ler mais</a></p>
            </article>
          <?php endwhile; ?>
				</div>
				<div class="col-md text-left">
          <h2>Assessoria</h2>
          <p>Precisa de informações ou fotos do Shin-Zushi, quer marcar entrevista com a nossa equipe ou propor algum projeto legal? Entre em contato com a Seimi Digital.</p>
          <h2 class="base">Seimi Digital</h2>
          <p>
            <span>55 11 2694-4771  |  WhatsApp 55 11 95577-4121</span><br>
            <span class="base">contato@seimidigital.com.br</span>
          </p><br>
          <div class="row">
            <div class="col">
              <span class="separador"></span><a class="ler-mais" href="#" title="baixar fotos">baixar fotos</a>
            </div>
             <div class="col">
              <span class="separador"></span><a class="ler-mais" href="#" title="baixar press kit">baixar press kit</a>
            </div>
          </div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
