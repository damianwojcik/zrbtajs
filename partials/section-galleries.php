<?php

	$args_gallery = array('posts_per_page' => -1,
	'post_type' => 'gallery',
	'orderby' => 'date',
	'order'=> 'ASC',);

	$array_gallery = get_posts( $args_gallery );

?>

<?php if( !empty( $array_gallery ) ) { ?>

<section id="galleries" class="section section__galleries">

	<div class="container">

		<header class="section-heading">

			<h1>Galerie</h1>

		</header>

			<ul class="wrap--galleries">

				<?php foreach ($array_gallery as $post_gallery) { 
					$thumbnail = wp_get_attachment_url( get_post_thumbnail_id( $post_gallery->ID ) );
					$title = $post_gallery->post_title;
					$link = get_post_permalink( $post_gallery->ID ); 
				?>
				
					<li>
						<a href="<?php echo $link; ?>" style="background-image: url('<?php echo $thumbnail; ?>')">
							<div class="color-overlay">
								<span class="icon-plus"></span>
								<h2><?php echo $title; ?></h2>
							</div>
						</a>
					</li>

				<?php } // END foreach ?>

				<?php wp_reset_postdata(); ?>

			</ul>

	</div>
	<!-- END container -->

</section>
<!-- END section__services -->

<?php } ?>