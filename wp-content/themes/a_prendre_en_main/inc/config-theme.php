<?php

/**
 * Permet d'ajouter des scripts (css et/ou js)
 */
add_action('wp_enqueue_scripts', 'wm_wp_enqueue_scripts');

function wm_wp_enqueue_scripts()
{
    $version = 1;

    wp_register_style('pikachu', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $version, 'all');
    wp_enqueue_style('pikachu');

}



