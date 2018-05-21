	<footer id="footer">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12">
					<img class="logo-header" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>"/>
				</div>
			</div><br><br>
			<div class="row justify-content-center wow fadeIn">
				<div class="col-md-auto">
					<a href="<?php echo home_url( 'o-shinzushi' ); ?>" title="O shinzushi">O Shin-Zushi</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( 'equipe' ); ?>" title="Chef">Equipe</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( 'menu' ); ?>" title="Menu">Menu</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( 'fotos' ); ?>" title="fotos">Fotos</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( 'premios' ); ?>" title="premios">Prêmios</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( 'imprensa' ); ?>" title="Impresa">Imprensa</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( 'contato' ); ?>" title="Contato">Contato</a>
				</div>
			</div><br><br>
			<div class="row wow fadeIn">
				<div class="col-md-12">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href="#"></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>
						<li class="rede"><a target="_blank" href="#"></a></li>
					</ul>
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md-12">
				<span>&copy; <?php echo date('Y') ?> Shin-Zushi Restaurante - Todos os direitos reservados</span>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
