<?php

function rsp_theme_styles() {

  wp_enqueue_style( 'bootstrap_css', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");

  wp_enqueue_style( 'google_fonts', "https://fonts.googleapis.com/css?family=Amatic+SC:700|Source+Sans+Pro:400,300,400italic,300italic,700,600,600italic,700italic,900)");

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts', 'rsp_theme_styles' );

function rsp_theme_js() {

  wp_enqueue_script( 'bootstrap_js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '', false);

  wp_enqueue_script( 'typekit_fonts', "https://use.typekit.net/rbv5wsv.js", '', '', false);

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'typekit_fonts', 'bootstrap_js'), '', false);

}
add_action( 'wp_enqueue_scripts', 'rsp_theme_js' );

 ?>
