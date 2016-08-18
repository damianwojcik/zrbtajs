<?php

	$args = array('posts_per_page' => -1,
	'post_type' => 'slide',
	'orderby' => 'date',
	'order'=> 'ASC',);

	$posts_array = get_posts( $args );

?>

<section id="home" class="section section__home">

	<div class="owl-carousel">

		<?php foreach ($posts_array as $post) { 
			$photo = get_field('photo');
			$headline = get_field('headline');
			$headline_bold = get_field('headline_bold');
			$box_title = get_field('box_title');
			$button_txt = get_field('button_txt');
			$button_url = get_field('button_url');
			if( empty($button_url) ){ $button_url = '#'; }
		?>

			<div class="slide" style="background-image: url('<?php echo $photo['url']; ?>');">

				<div class="color-overlay">

					<div class="wrap">
						
						<?php if( ( !empty($headline) ) or ( ( !empty($headline_bold) ) ) ): ?>

							<h1><?php echo $headline; ?>
								<strong><?php echo $headline_bold; ?></strong>
							</h1>

						<?php endif; ?>

					</div>


					<?php if( ( !empty($box_title) ) ): ?>

						<div class="wrap-mask">

							<h2><?php echo $box_title; ?></h2>

								<?php if( !empty($button_txt) ){ ?>

									<a href="<?php echo $button_url; ?>" class="btn btn--dark"><?php echo $button_txt; ?><span class="icon-chevron-right"></span></a>

								<?php } ?>

						</div>
						<!-- END wrap-mask -->

					<?php endif; ?>

				</div>
				<!-- END color-overlay -->

			</div>
			<!-- END slide -->

		<?php } // END foreach ?>

		<?php wp_reset_postdata(); ?>

	</div>
	<!-- END owl-carousel -->

	<a href="#about" class="arrow-down bounce smoothScroll"></a>

</section>
<!-- END section__home -->