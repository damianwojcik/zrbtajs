<?php
	$title = get_field('services_title', 'option');
	$intro = get_field('services_intro', 'option');
	$description = get_field('services_description', 'option');
	$collage = get_field('services_collage', 'option');
?>

<section id="services" class="section section__services">

	<div class="container">

		<header class="section-heading">

			<h1><?php echo $title; ?></h1>

		</header>

		<div class="span-left">

			<p class="intro">
				<?php echo $intro; ?>
			</p>

			<?php if( have_rows('services_list', 'option') ): ?>

				<ul class="list--checked">

					<?php while ( have_rows('services_list', 'option') ) : the_row(); ?>

						<?php $text = get_sub_field('text'); ?>

						<li><h3><?php echo $text; ?></h3></li>

					<?php endwhile; ?>
					
				</ul>

			<?php endif; ?>

			<p class="info">

				<?php echo $description; ?>

			</p>

			<?php if( !empty($collage) ) { ?>

				<div class="collage">
							
					<div class="collage__photo collage__photo--large">
						<a href="<?php echo $collage[0]['url']; ?>" rel="lightbox">
							<img src="<?php echo $collage[0]['sizes']['large']; ?>" alt="<?php echo $collage[0]['alt']; ?>">
						</a>
					</div>

					<div class="wrap">

						<div class="collage__photo">
							<a href="<?php echo $collage[1]['url']; ?>" rel="lightbox">
								<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $collage[1]['sizes']['large']; ?>" alt="<?php echo $collage[1]['alt']; ?>">
							</a>
						</div>

						<div class="collage__photo">
							<a href="<?php echo $collage[2]['url']; ?>" rel="lightbox">
								<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $collage[2]['sizes']['large']; ?>" alt="<?php echo $collage[2]['alt']; ?>">
							</a>
						</div>

						<div class="collage__photo">
							<a href="<?php echo $collage[3]['url']; ?>" rel="lightbox">
								<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $collage[3]['sizes']['large']; ?>" alt="<?php echo $collage[3]['alt']; ?>">
							</a>
						</div>

				</div>
				<!-- END wrap -->

				</div>
				<!-- END collage -->

			<?php } ?>

		</div>
		<!-- END span-left -->

		<div class="span-right">
					
		</div>
		<!-- END span-right -->

	</div>
	<!-- END container -->

</section>
<!-- END section__services -->