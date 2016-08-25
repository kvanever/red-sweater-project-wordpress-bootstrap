<?php

add_theme_support( 'menus' );

function register_theme_menus() {

  register_nav_menus(
    array(
      'main-navigation' => __('Main Navigation'),
      'collapse-navigation' => _('Collapse Navigation')
    )
  );
}
add_action( 'init', 'register_theme_menus');

function rsp_theme_styles() {

  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

  wp_enqueue_style( 'google_fonts', "https://fonts.googleapis.com/css?family=Amatic+SC:700|Source+Sans+Pro:400,300,400italic,300italic,700,600,600italic,700italic,900)");

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts', 'rsp_theme_styles' );

function rsp_theme_js() {

  global $wp_scripts;

  wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);

  wp_register_script( 'respondJS', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);

  $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9');
  $wp_scripts->add_data( 'respondJS', 'conditional', 'lt IE 9');

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);

  wp_enqueue_script( 'typekit_fonts', "https://use.typekit.net/rbv5wsv.js", '', '', false);

  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'typekit_fonts', 'bootstrap_js'), '', false);

}
add_action( 'wp_enqueue_scripts', 'rsp_theme_js' );

 ?>
