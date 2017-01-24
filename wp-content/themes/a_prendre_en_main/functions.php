<?php

/**
 * On sépare les fichiers pour bien organiser
 */
include_once 'inc/config-theme.php';


/**
 * Permet de rajouter les images à la une dans le thème
 */
add_theme_support('post-thumbnails');

/**
 * Création d'un nouveau format d'image
 */
add_image_size('project', 500, 150, true);


add_action('after_setup_theme', 'sk_after_setup_theme');

function sk_after_setup_theme()
{
    register_nav_menu('nav-first', __('Primary Menu', 'web1'));
    register_nav_menu('nav-footer', __('footer Menu', 'web1'));
}




define('WP_SCSS_ALWAYS_RECOMPILE', true);


add_action('wp_enqueue_scripts', 'al_scripts');

function al_scripts()
{
    $version = 2;

    /* CSS*/

    wp_register_style('css', get_stylesheet_directory_uri() . 'assets/css/main.css', array(), $version, 'all');
    wp_enqueue_style('css');

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


    /* JS */

//    wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.js', array(), $version, 'all');
//    wp_enqueue_script('jquery');





}

