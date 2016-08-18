<?php

	if( is_home() ){

		$args_gallery = array('posts_per_page' => -1,
		'post_type' => 'gallery',
		'orderby' => 'date',
		'order'=> 'ASC',);

		$array_gallery = get_posts( $args_gallery );

	}else{

		$array_gallery = get_field('gallery');

	}

?>

<?php if( !empty( $array_gallery ) ) { ?>

<section id="galleries" class="section section__galleries">

	<div class="container">

		<header class="section-heading">

			<h1>
				<?php if(is_home()){ echo'Galerie'; }else { the_title(); } ?>
			</h1>

		</header>

			<ul class="wrap--galleries">

				<?php foreach ($array_gallery as $post_gallery) {
					if(is_home()){
						$thumbnail = wp_get_attachment_url( get_post_thumbnail_id( $post_gallery->ID ) );
						$title = $post_gallery->post_title;
						$link = get_post_permalink( $post_gallery->ID ); 
					}else{
						$thumbnail = $post_gallery['sizes']['medium'];
						$link = $post_gallery['url'];
					}
					
				?>
				
					<li>
						<a href="<?php echo $link; ?>" style="background-image: url('<?php echo $thumbnail; ?>')"
						<?php if(!is_home()){ ?>rel="lightbox"<?php } ?>
						>
							<div class="color-overlay">
								<span class="icon-plus"></span>
								<?php if(is_home()){?><h2><?php echo $title; ?></h2><?php } ?>
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