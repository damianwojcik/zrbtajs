<?php
	$location = get_field('location', 'option');
	$phone = get_field('phone', 'option');
	$nip = get_field('nip', 'option');
	$regon = get_field('regon', 'option');
?>

<section id="contact" class="section section__contact">

	<div class="container">

		<header class="section-heading">

			<h1>Kontakt</h1>

		</header>

		<div class="span-left">

			<div class="wrap">

				<div class="logo b-lazy" data-src="<?= THEME_URL; ?>/assets/img/logo-bw.png"></div>

				<h2>Zakład Remontowo-Budowlany <br>Tajs&nbsp;Stanisław</h2>

				<ul>
					<li>
						<a href="callto: <?php echo $phone; ?>"><span class="icon-phone"></span><?php echo $phone; ?></a>
					</li>
					<li>
						<a href="#map"><span class="icon-location"></span><span class="txt"><?php echo $location; ?></span></a>
					</li>
					<?php if( !empty( $nip ) ) { ?>
						<li>
							NIP: <?php echo $nip; ?>
						</li>
					<?php } ?>
					<?php if( !empty( $regon ) ) { ?>
						<li>
							REGON: <?php echo $regon; ?>
						</li>
					<?php } ?>
				</ul>

			</div>
			<!-- END wrap -->

		</div>
		<!-- END span-left -->

		<div class="span-right">

			<div class="wrap">

				<div class="fb-page" data-href="https://www.facebook.com/ZRBTajsStanislaw" data-tabs="timeline" data-height="320" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ZRBTajsStanislaw" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ZRBTajsStanislaw">Zakład Remontowo Budowlany Tajs Stanisław</a></blockquote></div>

			</div>

		</div>
		<!-- END span-right -->

	</div>
	<!-- END container -->

	<div id="map"></div>


</section>
<!-- END section__services -->