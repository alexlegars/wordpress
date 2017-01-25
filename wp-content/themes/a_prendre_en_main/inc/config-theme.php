<?php

/**
 * Permet d'ajouter des scripts (css et/ou js)
 */
add_action('wp_enqueue_scripts', 'wm_wp_enqueue_scripts');

function wm_wp_enqueue_scripts()
{
    $version = false;

    wp_register_style('css', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $version, 'all');
    wp_enqueue_style('css');

    wp_register_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700', array(), false, 'all');
    wp_enqueue_style('roboto');

//    wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), $version, 'all');
//    wp_enqueue_style('bootstrap');
//
//    wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array(), $version, 'all');
//    wp_enqueue_style('font-awesome');
//
//    wp_register_style('lightbox', get_stylesheet_directory_uri() . '/css/lightbox.css', array(), $version, 'all');
//    wp_enqueue_style('lightbox');
//
//    wp_register_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), $version, 'all');
//    wp_enqueue_style('main');
//
//    wp_register_style('prettyPhoto', get_stylesheet_directory_uri() . '/css/prettyPhoto.css', array(), $version, 'all');
//    wp_enqueue_style('prettyPhoto');
//
//    wp_register_style('responsive', get_stylesheet_directory_uri() . '/css/responsive.css', array(), $version, 'all');
//    wp_enqueue_style('responsive');

    wp_register_script('jquery_gsap', get_stylesheet_directory_uri() . '/assets/js/jquery.gsap.min.js', array(), $version, 'all');
    wp_enqueue_script('jquery_gsap');

    wp_register_script('bxslider', get_stylesheet_directory_uri() . '/assets/js/jquery.bxslider.min.js', array(), $version, 'all');
    wp_enqueue_script('bxslider');

    wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-1.10.2.min.js', array(), $version, 'all');
    wp_enqueue_script('jquery');

    wp_register_script('timeline', get_stylesheet_directory_uri() . '/assets/js/TimelineMax.min.js', array(), $version, 'all');
    wp_enqueue_script('timeline');

    wp_register_script('tween', get_stylesheet_directory_uri() . '/assets/js/TweenMax.min.js', array(), $version, 'all');
    wp_enqueue_script('tween');

    wp_register_script('default', get_stylesheet_directory_uri() . '/assets/js/default.js', array(), $version, 'all');
    wp_enqueue_script('default');

    /* JS */



}



