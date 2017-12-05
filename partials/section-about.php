<?php
	$title = get_field('about_title', 'option');
	$content = get_field('about_content', 'option');
	$photo = get_field('about_photo', 'option');
	$button_txt = get_field('about_button_txt', 'option');
	$button_url = get_field('about_button_url', 'option');
	if( empty($button_url) ){ $button_url = '#'; }
	$infoboxes = get_field('infoboxes', 'option');
?>

<section id="about" class="section section__about">

	<div class="container">

		<header class="section-heading">

			<h1><?php echo $title; ?></h1>

		</header>

		<div class="span-left">

			<p class="intro">
				<?php echo $content; ?>
			</p>

			<div class="infoboxes">

				<div class="row">

					<div class="span6">

						<div class="infobox">

							<div class="wrap__ico">
								<span class="<?php echo $infoboxes[0]["icon"]?>"></span>
							</div>

							<div class="wrap__txt">
								<h3><?php echo $infoboxes[0]["headline"]?></h3>
								<p><?php echo $infoboxes[0]["caption"]?></p>
							</div>

						</div>
						<!-- END infobox -->

					</div>
					<!-- END span6 -->

					<div class="span6">

						<div class="infobox">

							<div class="wrap__ico">
								<span class="<?php echo $infoboxes[1]["icon"]?>"></span>
							</div>

							<div class="wrap__txt">
								<h3><?php echo $infoboxes[1]["headline"]?></h3>
								<p><?php echo $infoboxes[1]["caption"]?></p>
							</div>

						</div>
						<!-- END infobox -->
						
					</div>
					<!-- END span6 -->

				</div>
				<!-- END row -->

				<div class="row">

					<div class="span6">

						<div class="infobox">

							<div class="wrap__ico">
								<span class="<?php echo $infoboxes[2]["icon"]?>"></span>
							</div>

							<div class="wrap__txt">
								<h3><?php echo $infoboxes[2]["headline"]?></h3>
								<p><?php echo $infoboxes[2]["caption"]?></p>
							</div>

						</div>
						<!-- END infobox -->

					</div>
					<!-- END span6 -->

					<div class="span6">

						<div class="infobox">

							<div class="wrap__ico">
								<span class="<?php echo $infoboxes[3]["icon"]?>"></span>
							</div>

							<div class="wrap__txt">
								<h3><?php echo $infoboxes[3]["headline"]?></h3>
								<p><?php echo $infoboxes[3]["caption"]?></p>
							</div>

						</div>
						<!-- END infobox -->
						
					</div>
					<!-- END span6 -->

				</div>
				<!-- END row -->

			</div>
			<!-- END infoboxes -->

		</div>
		<!-- END wrap -->

		<div class="span-right">
			<a href="<?php echo $photo["url"]; ?>" class="link--img" rel="lightbox">
				<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $photo['sizes']['medium_large']; ?>" alt="<?php echo $photo["alt"]; ?>">
			</a>

			<a href="<?php echo $button_url; ?>" class="btn btn--gray"><?php echo $button_txt; ?><span class="icon-chevron-right"></a>
		</div>

	</div>
	<!-- END container -->

</section>
<!-- END section__about -->