<?php
/**
 * Created by PhpStorm.
 * User: Lelouch
 * Date: 22/03/2016
 * Time: 09:27
 */

/**
 * Ajoute le header (header.php)
 */
get_header();
/**
 * Permet d'utiliser les fonctionnalités de WordPress
 * IMPORTANT
 */
the_post();
?>


<h1><?php the_title() ?></h1>

<?php the_post_thumbnail('large'); ?>


<?php the_content() ?>



<?php
/**
 * Ajoute le footer (footer.php)
 */
get_footer();
?>

