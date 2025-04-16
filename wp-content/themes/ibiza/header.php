<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ibiza Pure Essence</title>

	<link id="favicon" rel="shortcut icon" href="https://torrealbaruben.github.io/ibiza-essence/assets/img/favicon.png" type="image/png"/>
	<link rel="apple-touch-icon" href="https://torrealbaruben.github.io/ibiza-essence/assets/img/favicon.png" type="image/png"/>

	<meta property="og:title" content="Ibiza Pure Essence"/>
	<meta property="og:description" content="Real State & Hospitality">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://torrealbaruben.github.io/ibiza-essence/">
	<meta property="og:site_name" content="Ibiza Pure Essence">
	<meta property="og:image" content="https://torrealbaruben.github.io/ibiza-essence/assets/img/splash.jpg">

	<meta name="twitter:card" content="summary_large_image" >
	<meta name="twitter:url" content="https://torrealbaruben.github.io/ibiza-essence/" >
	<meta name="twitter:title" content="Ibiza Pure Essence" >
	<meta name="twitter:description" content="Real State & Hospitality" >
	<meta name="twitter:image:src" content="https://torrealbaruben.github.io/ibiza-essence/assets/img/splash.jpg" >
	<meta name="twitter:site" content="https://torrealbaruben.github.io/ibiza-essence/" >

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg">
			<div class="container shadow-lg">
				<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ibiza-essence-logo.png" alt="Ibiza Pure Essence">
				</a>
				<ul class="navbar-nav ms-auto">
					<?php
						$rds_nav = array(
							'theme_location' => 'primary_menu',
							'menu' => '',
							'container' => '',
							'container_class' => '',
							'container_id' => '',
							'menu_class' => false,
							'menu_id' => '',
							'items_wrap' => '%3$s'
						);
						wp_nav_menu($rds_nav);
						?>
				</ul>
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasExampleLabel">Ibiza Pure Essence</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hospitality</a>
							<ul class="dropdown-menu">
								<?php mostrar_submenu(4); ?>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Private transport</a>
							<ul class="dropdown-menu">
								<?php mostrar_submenu(13); ?>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tailor</a>
							<ul class="dropdown-menu">
								<?php mostrar_submenu(17); ?>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Events</a>
							<ul class="dropdown-menu">
								<?php mostrar_submenu(20); ?>
							</ul>
						</li>
						<?php
						$rds_nav = array(
							'theme_location' => 'primary_menu',
							'menu' => '',
							'container' => '',
							'container_class' => '',
							'container_id' => '',
							'menu_class' => false,
							'menu_id' => '',
							'items_wrap' => '%3$s'
						);
						wp_nav_menu($rds_nav);
						?>
						</ul>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="navbarMain">
					<ul class="navbar-nav ms-auto">						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hospitality</a>
							<ul class="dropdown-menu">
								<?php mostrar_submenu(4); ?>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Private transport</a>
							<ul class="dropdown-menu">
								<?php mostrar_submenu(13); ?>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tailor</a>
							<ul class="dropdown-menu">
								<?php mostrar_submenu(17); ?>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Events</a>
							<ul class="dropdown-menu">
								<?php mostrar_submenu(20); ?>
							</ul>
						</li>
						<?php
						$rds_nav = array(
							'theme_location' => 'primary_menu',
							'menu' => '',
							'container' => '',
							'container_class' => '',
							'container_id' => '',
							'menu_class' => false,
							'menu_id' => '',
							'items_wrap' => '%3$s'
						);
						wp_nav_menu($rds_nav);
						?>
					</ul>
				</div>
			</div>
		</nav>
	</header>