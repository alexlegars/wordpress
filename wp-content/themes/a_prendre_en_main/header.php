<!DOCTYPE html>
<html <?php
/**
 * Gestion des langues par WordPress
 * Très utile pour un site multi-langue
 */
language_attributes();
?> class="no-js">
<head>
    <meta charset="<?php
    /**
     * Encodage
     */
    bloginfo('charset');
    ?>">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>À prendre en main</title>

     <?php
    /**
     * Fonction permettant d'ajouter les scripts WordPress (css et js)
     * Les scripts ajoutés dans le thème ou pas un plugin
     * Élément important !!!!
     */
    wp_head();
    ?>
</head>

<body <?php
/**
 * Ajout automatique des classes dans le body
 * Par défaut WordPress en ajoute bcp
 */
body_class();
?>>


