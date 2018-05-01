<!doctype html>
<html class="no-js" lang="">
    <head>
		<title><?php echo get_bloginfo(); ?></title>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="manifest" href="site.webmanifest">
		<link rel="apple-touch-icon" href="icon.png">
		<!-- Place favicon.ico in the root directory -->

		<!-- ====== FONTS ================================== -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		
		<!-- ====== STYLES ================================= -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor/normalize.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

		<!-- ====== CPVT =================================== -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/compvter.css">

		<!-- ====== JS ===================================== -->
		<!-- Being Wordpress  we need to put script at first for now -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-3.5.0.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
		
		<!-- ====== CPVT =================================== -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/compvter.js"></script>
		
		<?php wp_head(); ?>
	</head>
	<body>
		<!-- ===== MENU =========================== -->
		<header>
			<div class="nav">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
		</header>
		<!-- ===== END MENU ======================= -->