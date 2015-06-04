<?php 


function wpt_register_js()
{
	// For either a plugin or a theme, you can then enqueue the script:
	wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.11.3.min.js', array( 'jquery') );
	wp_register_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js' );
	
	wp_register_script( 'CSSPlugin', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js', array( 'jquery') );
	wp_register_script( 'EasePack', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/easing/EasePack.min.js', array( 'jquery') );
	wp_register_script( 'TweenLite', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js', array( 'jquery') );
	
	wp_register_script( 'menuVersion2', get_template_directory_uri().'/js/menuVersion2.js' );
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'CSSPlugin' );
	wp_enqueue_script( 'EasePack' );
	wp_enqueue_script( 'TweenLite' );
	wp_enqueue_script( 'menuVersion2' );
}
add_action( 'init', 'wpt_register_js' );


function wpt_register_css() {
	wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_register_style( 'header', get_template_directory_uri().'/css/header.css' );
	wp_register_style( 'menuVersion2css', get_template_directory_uri().'/css/menuVersion2.css ' );
	
	wp_register_style( 'screen', get_template_directory_uri().'/css/screen.min.css' );
	
	wp_register_style( 'ourLabs', get_template_directory_uri().'/css/ourLabs.css ' );
	wp_register_style( 'whoWeAre', get_template_directory_uri().'/css/whoWeAre.css ' );
    
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'header' );
	wp_enqueue_style( 'menuVersion2css' );
	wp_enqueue_style( 'screen' );
	wp_enqueue_style( 'ourLabs' );
	wp_enqueue_style( 'whoWeAre' );
	
	wp_enqueue_style( 'ourLabs' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
?>