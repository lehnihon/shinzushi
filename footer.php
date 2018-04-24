	<footer id="footer">
		<div class="container">
			<div class="row wow fadeInUp">
				<div class="col-md-12">
					<img class="logo-header" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>"/>
				</div>
			</div><br><br>
			<div class="row wow justify-content-center fadeInUp">
				<div class="col-md-auto">
					<a href="<?php echo home_url( '' ); ?>" title="">Página Inicial</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( '/sobre' ); ?>" title="">A Rose Massagem</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( '/massagens' ); ?>" title="">Massagens</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( '/estetica' ); ?>" title="">Estética</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( '/terapeutas' ); ?>">Terapeutas</a>
				</div>
				<div class="col-md-auto">
					<a href="<?php echo home_url( '/contato' ); ?>" title="">Fale Conosco</a>
				</div>
			</div><br><br>
			<div class="row wow fadeInUp">
				<div class="col-md-12">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCUZGz6OPURdShp9jfjVVc7g/featured"></a></li>
							<li class="instagram"><a target="_blank" href="https://www.instagram.com/rosemassagens/"></a></li>
							<li class="twitter"><a target="_blank" href="https://www.facebook.com/Rose-Massagem-522680378133085/"></a></li>
					</ul>
				</div>
			</div><br><br>
		</div>
	</footer><!-- #footer -->
	<div class="copyrino">
		<div class="container">
			<div class="row wow fadeInUp">
				<div class="col-md-12 text-center">
					<span>&copy; <?php echo date('Y') ?> Rose Massagem Todos os Direitos Reservados</span>
					<a target="_blank" class="float-right" href="http://seimidigital.com.br/">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" />
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
