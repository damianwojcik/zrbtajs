<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<?php get_header(); ?>

<!-- =================================================
	main
================================================== -->
<main id="main" class="main">

	<div class="slide slide--404" style="background-image: url('<?= THEME_URL; ?>/assets/img/3.jpg');">

		<div class="color-overlay">

			<div class="wrap">
					
				<h1><strong>Strony nie znaleziono</strong></h1>

				<p>
					Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie&nbsp;została odnaleziona. Sprawdź adres URL czy&nbsp;nie&nbsp;zawiera błędów lub&nbsp;wróć na&nbsp;<a href="<?= SITE_URL; ?>">Stronę Główną</a>.
				</p>

			</div>

		</div>
		<!-- END color-overlay -->

	</div>
	<!-- END slide -->

</main>
<!-- END main -->


<?php get_footer(); ?>