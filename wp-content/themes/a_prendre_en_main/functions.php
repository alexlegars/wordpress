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

function wpc_show_admin_bar() {
    return false;
}
add_filter('show_admin_bar' , 'wpc_show_admin_bar');


define('WP_SCSS_ALWAYS_RECOMPILE', true);



