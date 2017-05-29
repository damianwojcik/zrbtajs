<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />


	<!-- HTML 5 SUPPORT
	================================================== -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82886642-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- facebook SDK -->
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


<?php
	$logo = get_field('logo', 'option');
	$location = get_field('location', 'option');
	$phone = get_field('phone', 'option');
?>


<!-- =================================================
	header
================================================== -->
<header class="header">
	
	<h1 class="logo">
		<a href="<?= SITE_URL; ?>" style="background-image: url('<?php echo $logo['url']; ?>')">Zakład Remontowo-Budowlany Tajs Stanisław</a>
	</h1>

	<div class="contactbox">

		<ul>
			<li>
				<a href="callto: <?php echo $phone; ?>"><span class="icon-phone"></span><strong><?php echo $phone; ?></strong></a>
			</li>
			<li>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#map"><span class="icon-location"></span><span class="txt"><?php echo $location; ?></span></a>
			</li>
			<li class="item__facebook">
				<a href="https://www.facebook.com/ZRBTajsStanislaw/" target="_blank"><span class="icon-facebook2"></span></a>
			</li>
		</ul>

	</div>
	<!-- END contactbox -->

	<div class="toggle-mobile">
		<span class="toggle-mobile__bar"></span>
		<span class="toggle-mobile__bar"></span>
		<span class="toggle-mobile__bar"></span>
	</div>

</header>
<!-- END header -->


<!-- =================================================
	sidebar
================================================== -->
<?php get_template_part("partials/part", "sidebar"); ?>


<!-- =================================================
	mobile-nav
================================================== -->
<?php get_template_part("partials/part", "mobilenav"); ?>
