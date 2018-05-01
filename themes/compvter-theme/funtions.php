<?php 
if ( ! function_exists( 'compvter_setup' ) ) :
	function compvter_setup() {
		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		// Set detfault Post Thumbnail size.
		set_post_thumbnail_size( 1120, 400, true );
		// Register Navigation Menu.
		register_nav_menu('header-menu', esc_html__( 'Main Menu'));
		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption') 
		);
	}
endif;
add_action( 'after_setup_theme', 'compvter_setup' );
?>