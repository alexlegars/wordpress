<?php
    /**
     * Ajoute le header (header.php)
     */
    get_header();
?>
<div class="burgerMenu showPhone">
     <ul>
          <li><a href="#area2">L'association</a></li>
          <li><a href="#area3">Notre approche</a></li>
          <li><a href="#area5">Nos objectifs</a></li>
          <li><a href="#area6">Notre équipe</a></li>
          <li><a href="#area7">Actualités</a></li>
          <li><a href="#area8">Contact</a></li>
          <li class="don"><a href="#area4">Faire un don</a></li>
     </ul>
</div>
<div class="content">
     <!--HEADER-->
     <div class="header cf showDesktop">
          <div class="content-logo cf">
               <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/logo.svg" alt="" class="logo logoWhite">
               <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/logoGrey.svg" alt="" class="logo logoGrey">
               <p>A-prendre en main</p>
          </div>
          <nav>
               <ul class="cf">
                    <li><a href="#area2">L'association</a></li>
                    <li><a href="#area3">Notre approche</a></li>
                    <li><a href="#area5">Nos objectifs</a></li>
                    <li><a href="#area6">Notre équipe</a></li>
                    <li><a href="#area7">Actualités</a></li>
                    <li><a href="#area8">Contact</a></li>
                    <li class="don"><a href="#area4">Faire un don</a></li>
               </ul>
          </nav>
     </div>
     <div class="headerMob showPhone">
          <!--BURGER-->
          <div class="iconBurger">
               <div class="one"></div>
               <div class="two"></div>
               <div class="three"></div>
          </div>
     </div>

     <!--PARALLAXE-->
     <div class="parallaxe" id="area1">
          <div class="visible cf">
               <div class="textblock">
                    <p class="discover">
                         Découvrez l'histoire <br> de Bado qui vit près de Douala
                    </p>
                    <p class="description">
                         Nous sommes en 2017 mais Bado rencontre toujours quelques
                         problèmes pour avoir de l’eau potable...
                    </p>
                    <button class="btnBleu">Découvrez son histoire</button>
               </div>
               <div class="content-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/sansEau1.svg" alt="" class="sansEau1">
               </div>
               <!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/herbe.png" alt="" class="herbe"> -->
          </div>
          <div class="cache">
               <div class="act_first">
                    <div class="act_first_container">
                         <img class="img--sun" src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/scene1/sun.svg" alt="">
                         <img id="step1" class="img--boy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/scene1/boy-1.svg" alt="">
                         <img class="img--bg" id="bg" src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/scene1/paysage.svg">
                         <img class="img--puit" src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/scene1/puit.svg" alt="">
                         <img class="img--worker" src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/scene1/worker-1.svg" alt="">
                         <div class="story-text--container">
                              <span class="number_holder">01</span><p class="story_text">Mamadou avait mal aux dents sa maman lui dit mon doudou ...</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>

    <?php
    $args = array(
        'post_type'      => 'association',
        'post_per_page'      => 1,
        'post_status'    => 'publish',
    );
    $association = new WP_Query($args);

    ?>
    <?php while ($association->have_posts()) : $association->the_post(); ?>

         <!--ASSOCIATION-->
         <div class="association" id="area2">
              <p class="title"><?php the_field('block_one_title') ?></p>
              <div class="content-association">
                   <p class="description"><?php the_field('block_one_description') ?></p>
              </div>
              <div class="words cf showDesktop">
                   <p class="entire">valeurs</p>
                   <div class="right">
                        <p class="one"><?php the_field('valeur_one') ?></p>
                        <p class="two"><?php the_field('valeur_two') ?></p>
                        <p class="three"><?php the_field('valeur_three') ?></p>
                        <p class="four"><?php the_field('valeur_four') ?></p>
                   </div>
              </div>
         </div>

         <!--APPROCHE-->
         <div class="approche" id="area3">
              <div class="content-approche cf">
                   <div class="left">
                        <p class="title"><?php the_field('block_two_title') ?></p>
                        <div class="trait-jaune"></div>
                        <div class="textblock">
                             <p class="subtitle"><?php the_field('blocke_two_subtitlte_two') ?></p>
                             <p class="description"><?php the_field('blocke_two_description_two') ?></p>
                        </div>
                   </div>
                   <div class="right">
                        <div class="textblock textblock1">
                             <p class="subtitle"><?php the_field('blocke_two_subtitlte_one') ?></p>
                             <p class="description"><?php the_field('blocke_two_description_one') ?></p>
                        </div>
                        <img src="<?php the_post_thumbnail_url() ?> " alt="" class="enfant">
                        <div class="textblock textblock2">
                             <p class="subtitle"><?php the_field('blocke_two_subtitlte_three') ?></p>
                             <p class="description"><?php the_field('blocke_two_description_three') ?></p>
                        </div>
                   </div>
              </div>
         </div>
    <?php endwhile;?>

     <!--CROWDFOUNDING-->
     <div class="crowd cf" id="area4">
          <div class="left">
               <div class="textblock">
                    <p class="title">Grâce à vous, <br> nous pouvons y croire !</p>
                    <button class="btnBleu showDesktop"><a href="#">Participer à l'aventure</a></button>
               </div>
          </div>
          <div class="right">
               <div class="textblock">
                    <p class="blockTitle">Récolte de fonds pour l'association</p>
                    <p class="contenu">
                         Nous cherchons 23 638 € pour financer le projet de mise en place
                         de 2 pompes à eau pour alimenter 1600 personnes dans une localité de Douala au Cameroun. Il devrait voir le jour en octobre 2017.
                         Cette somme comprend les différents travaux de forage, l’équipement, la formation du comité local, la formation de la population,
                         les dépliants de sensibilisation notamment.
                    </p>
               </div>
          </div>
          <button class="btnBleu showPhone"><a href="#">Participer à l'aventure</a></button>
          <p class="somme showDesktop">23 638€</p>
     </div>

     <!--OBJECTIF-->
    <?php
    $args = array(
        'post_type'      => 'objectif',
        'post_per_page'      => 1,
        'post_status'    => 'publish',
    );
    $objectifs = new WP_Query($args);

    ?>

    <?php while ($objectifs->have_posts()) : $objectifs->the_post(); ?>
         <div class="objectif" id="area5">
              <img src="<?php the_post_thumbnail_url() ?>" alt="" class="imgDon">
              <div class="content-objectif cf">
                   <div class="left">
                        <div class="textblock">
                             <p class="objectifMois"><?php the_field('objectif_date') ?></p>
                             <p class="title"><?php the_field('objectif_title') ?></p>
                             <p class="subtitle"><?php the_field('objectif_subtitle') ?></p>
                             <p class="description"><?php the_field('objectif_description') ?></p>
                        </div>
                   </div>
                   <div class="right">
                        <div class="textblock">
                             <div class="text text1">
                                  <span>01</span>
                                  <p><?php the_field('objectif_one') ?></p>
                             </div>
                             <div class="text text2">
                                  <span>02</span>
                                  <p><?php the_field('objectif_two') ?></p>
                             </div>
                             <div class="text text3">
                                  <span>03</span>
                                  <p><?php the_field('objectif_three') ?></p>
                             </div>
                        </div>
                   </div>
              </div>
         </div>
    <?php endwhile;?>


     <!--EQUIPE-->
     <div class="equipe" id="area6">
          <div class="wordEquipe showDesktop">équipe</div>
          <div class="content-equipe">
               <p class="title"><span>Grâce à eux,</span> <br> l'association existe</p>
               <ul class="sliderEquipe">
                   <?php
                   $args = array(
                       'post_type'      => 'team',
                       'post_status'    => 'publish',
                   );
                   $equipe = new WP_Query($args);

                   ?>

                   <?php while ($equipe->have_posts()) : $equipe->the_post(); ?>
                        <li class="cf">
                             <div class="left">
                                  <img src="<?php the_post_thumbnail_url() ?>" alt="">
                             </div>
                             <div class="right">
                                  <div class="textblock">
                                       <div class="leftBorder">
                                            <p class="name"><?php the_title() ?></p>
                                            <p class="role"><?php the_field('role') ?></p>
                                            <p class="parcours"><?php the_field('parcours') ?></p>
                                       </div>
                                       <p class="participation"><?php the_field('description') ?></p>
                                  </div>
                             </div>
                        </li>
                   <?php endwhile; ?>
               </ul>
          </div>
     </div>

     <!--ACTUALITES-->
     <div class="actualites" id="area7">
          <div class="content-actu">
               <p class="title">Dernières actualités  <br>A-lire</p>
               <div class="all-img cf">

                    <?php
                    $args = array(
                       'post_type'      => 'actualite',
                        'post_per_page'      => 3,
                        'post_status'    => 'publish',
                    );
                    $actualite = new WP_Query($args);

                    ?>

                    <?php while ($actualite->have_posts()) : $actualite->the_post(); ?>

                    <div class="content-img">
                         <img src="<?php the_post_thumbnail_url() ?>" alt="">
                         <div class="cache">
                              <div class="textblock">
                                   <p class="titre"><?php the_field('actu_title') ?></p>
                                   <p class="date">Le <?php the_field('date') ?></p>
                                   <p class="lire">Lire l'article</p>
                              </div>
                         </div>
                    </div>
                    <!--MODALES ACTU-->
                    <div class="modale-actu">
                         <div class="close">X</div>
                         <div class="content-modale">
                              <img src="<?php the_post_thumbnail_url() ?>" alt="">
                              <div class="textblock">
                                   <p class="date"><?php the_field('date') ?></p>
                                   <p class="title"><?php the_field('actu_title') ?></p>
                                   <p class="article mollo"><?php the_field('actu_description')?></p>
                              </div>
                         </div>
                    </div>
                    <? endwhile; ?>
               </div>
          </div>
          <!--MODALES ACTU-->

     </div>

     <!--CONTACT-->
     <div class="contact" id="area8">
          <div class="content-contact">
               <p class="title">Faites-nous part de vos ressentis</p>
              <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>
          </div>
     </div>

    <?php
    $args = array(
        'post_type'      => 'footer',
        'post_per_page'      => 1,
        'post_status'    => 'publish',
    );
    $footer = new WP_Query($args);

    ?>
    <?php while ($footer->have_posts()) : $footer->the_post(); ?>

     <!--FOOTER-->
     <div class="footer">
          <div class="content-footer cf">
               <div class="left">
                    <p class="title"><?php the_field('title_one') ?></p>
                    <div class="content-img">
                         <div class="deuxImg cf">
                              <a href="http://www.attineos.com/" target="_blank" class="attineos"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/attineos.png" alt=""></a>
                              <a href="http://digital-village.fr/" target="_blank" class="digitalVillage"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/digitalVillage.png" alt=""></a>
                         </div>
                         <a href="http://www.montpellier-bs.com/"  target="_blank" class="supMontpellier"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/supMontpellier.png" alt=""></a>
                    </div>
               </div>
               <div class="right cf">
                    <div class="follow">
                         <p class="title"><?php the_field('title_two') ?></p>
                         <div class="reseaux">
                              <a href="<?php the_field('link_social_one') ?>" target="_blank"><?php the_field('social_one') ?></a>
                              <a href="<?php the_field('link_social_two') ?>" target="_blank"><?php the_field('social_two') ?></a>
                         </div>
                    </div>
                    <div class="infos">
                         <p class="title"><?php the_field('title_three') ?></p>
                         <ul>
                              <li><?php the_field('mail') ?></li>
                              <li><?php the_field('telephone') ?></li>
                              <li><?php the_field('rue') ?></li>
                              <li><?php the_field('ville_cp') ?></li>
                         </ul>
                    </div>
               </div>
               <p class="copyright">Copyright © A-prendre en main</p>
          </div>
     </div>
    <?php endwhile; ?>

</div>

<div class="bg-noir"></div>

<!--<script src="ressources/js/jquery-1.10.2.min.js"></script>-->
<!--<script src="ressources/js/jquery.gsap.min.js"></script>-->
<!--<script src="ressources/js/TimelineMax.min.js"></script>-->
<!--<script src="ressources/js/TweenMax.min.js"></script>-->
<!--<script src="ressources/js/jquery.bxslider.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/TextPlugin.min.js"></script>-->
<!--<script src="ressources/js/default.js"></script>-->


<?php
    /**
     * Ajoute le footer (footer.php)
     */
    get_footer();
?>
