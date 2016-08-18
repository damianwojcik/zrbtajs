<aside class="sidebar">

	<h2 class="offscreen">Panel boczny</h2>
	
	<nav class="primarynav">

		<h2 class="offscreen">Nawigacja strony</h2>

		<ul>
			<li <?php if(is_home()){?>class="current-menu-item"<?php } ?>>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#">
					<span class="icon-home"></span>Strona główna
				</a>
			</li>
			<li>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#about">
					<span class="icon-info"></span>O nas
				</a>
			</li>
			<li>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#services"><span class="icon-cogs2"></span>Oferta</a>
			</li>
			<li <?php if(is_single()){?>class="current-menu-item"<?php } ?>>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#galleries"><span class="icon-albums"></span>Galerie</a>
			<!-- 	<ul class="primarynav__submenu">
					<li>
						<a href="#"><span class="icon-image"></span>Pierwsza galeria</a>
					</li>
					<li>
						<a href="#"><span class="icon-image"></span>Druga galeria</a>
					</li>
					<li>
						<a href="#"><span class="icon-image"></span>Trzecia galeria</a>
					</li>
				</ul> -->
				<!-- END primarynav__submenu -->
			</li>
			<li>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#contact">
					<span class="icon-phone-book"></span>Kontakt
				</a>
			</li>
		</ul>
		
	</nav>
	<!-- END primarynav -->

</aside>
<!-- END sidebar -->