<?php get_header(); ?>

<!-- =================================================
	main
================================================== -->
<main id="main" class="main">

	<?php get_template_part("partials/section", "home"); ?>

	<?php get_template_part("partials/section", "intro"); ?>

	<?php get_template_part("partials/section", "about"); ?>

	<?php get_template_part("partials/section", "services"); ?>

	<?php get_template_part("partials/section", "galleries"); ?>

	<?php get_template_part("partials/section", "contact"); ?>

	<?php get_template_part("partials/part", "footer"); ?>

</main>
<!-- END main -->


<?php get_footer(); ?>