<?php
function my_function_admin_bar(){
return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
	add_action( 'wp_enqueue_scripts', 'theme_styles' );
	add_action('wp_enqueue_scripts', 'theme_scripts');

	function theme_styles(){
		wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700/Lora:400' );
		wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/fonts/ionicons/css/ionicon.css' );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fonts/font-awesome/css/font-awesome.css' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
		wp_enqueue_style( 'menu', get_template_directory_uri() . '/css/menu.css' );
		wp_enqueue_style( 'owl-carusel', get_template_directory_uri() . '/css/owl.carousel.css' );
		wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.css' );
		wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
		wp_enqueue_style('style', get_stylesheet_uri());

	}

	function theme_scripts(){
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
		wp_enqueue_script( 'jqmixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js');
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js');
		wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.js');
		wp_enqueue_script( 'typed', get_template_directory_uri() . '/js/typed.min.js');
		wp_enqueue_script('startit-script-menu', get_template_directory_uri() . '/js/menu.js' );
		wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js');
	}
