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
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor/waves.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<!-- ====== CPVT =================================== -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/compvter.css">

		<!-- ====== JS ===================================== -->
		<!-- Being Wordpress  we need to put script at first for now -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-3.5.0.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-3.2.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/waves.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
		
		<!-- ====== CPVT =================================== -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/compvter.js"></script>
		
		<?php wp_head(); ?>
	</head>
	<body>
		<!-- ===== MENU =========================== -->
		<header class="container-fluid oblique main-bg">
			<div class="sub-oblique">
				<div id="second-oblique-pattern" class="oblique">
					<div class="nav container">
						<a href="./" class="pull-left"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-mini.png" alt="Logo Compvter" title="Logo Compvter" /></a>
						<?php wp_nav_menu( array( 'menu' => 'header-menu' ) ); ?>
					</div>
				</div>
			</div>
		</header>
		<!-- ===== END MENU ======================= -->
		<div id="page" class="container-fluid">
			<div class="container">