<?php
function startit_setup() {
	load_theme_textdomain('startit');
	add_theme_support ('title-tag');
		add_theme_support ('custom-logo');
		add_theme_support ('post-thumbnails');
		add_image_size ('blog-images', 360, 272.42, true);
		add_image_size ('portfolio-images', 262.5, 262.5, true);
		add_image_size ('about-small-img', 262.5, 267.27, true);
		add_image_size ('about-big-img', 480, 285.95, true);
		register_nav_menu ('head', 'head_menu');
}
add_action('after_setup_theme','startit_setup');
function startit_scripts() {
	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri().'/css/jquery.fancybox.css' );
	wp_enqueue_style( 'menu', get_template_directory_uri().'/css/menu.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri().'/css/owl.carousel.css' );
	wp_enqueue_style( 'owl.theme.default', get_template_directory_uri().'/css/owl.theme.default.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

	wp_register_script( 'jquery-3.2.1.min', get_template_directory_uri() . '/js/jquery-3.2.1.min.js','false','null','true');
	wp_register_script( 'jquery.mixitup.min', get_template_directory_uri() . '/js/jquery.mixitup.min.js','false','null','true');
	wp_register_script( 'jquery.fancybox.min', get_template_directory_uri() . '/js/jquery.fancybox.min.js','false','null','true');
	wp_register_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js','false','null','true');
	wp_register_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js','false','null','true');
	wp_register_script( 'typed.min', get_template_directory_uri() . '/js/typed.min.js','false','null','true');
	wp_register_script( 'menu', get_template_directory_uri() . '/js/menu.js','false','null','true');
	wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js','false','null','true');

	wp_enqueue_script( 'jquery-3.2.1.min' );
	wp_enqueue_script( 'jquery.mixitup.min' );
	wp_enqueue_script( 'jquery.fancybox.min' );
	wp_enqueue_script( 'bootstrap.min' );
	wp_enqueue_script( 'owl.carousel' );
	wp_enqueue_script( 'typed.min' );
	wp_enqueue_script( 'menu' );
	wp_enqueue_script( 'custom' );


	
	
}
add_action( 'wp_enqueue_scripts', 'startit_scripts' );
?>