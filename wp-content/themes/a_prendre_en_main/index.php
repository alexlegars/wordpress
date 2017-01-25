<?php
    /**
     * Ajoute le header (header.php)
     */
    get_header();
?>


<div class="content">
     <!--HEADER-->
     <div class="header cf">

          <!--BURGER-->
          <!-- <div class="burgerMenu">
            <ul>
              <li><a href="#area1">Accueil</a></li>
              <li><a href="#area2">Participer au financement</a></li>
              <li><a href="#area3">Plus d'infos</a></li>
              <li><a href="#area4">L'équipe</a></li>
              <li><a href="#area5">Dernières actualités</a></li>
              <li><a href="#area6">Nos partenaires</a></li>
              <li><a href="#area7">Nous contacter</a></li>
            </ul>
          </div>
          <div class="iconBurger">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
          </div>-->
          <div class="content-logo cf">
<!--               <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/assets/css/images/logo.svg" alt="" class="logo">-->
               <p>À Prendre en main</p>
          </div>
          <nav>
               <ul class="cf">
                    <li><a href="#area2">Qui sommes-nous ?</a></li>
                    <li><a href="#area4">Notre équipe</a></li>
                    <li><a href="#area5">Actualités</a></li>
                    <li><a href="#area6">Contact</a></li>
                    <li class="don"><a href="#area3">Faire un don</a></li>
               </ul>
          </nav>
     </div>

<!--PARALLAXE-->
<div class="parallaxe" id="area1">
     <div class="visible">
          <div class="textblock">
               <p class="discover">
                    Découvrez l'histoire <br> de Bado qui vit près de Douala
               </p>
               <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eaque, itaque saepe illo provident aperiam porro facere earum ab quae ex rerum voluptates excepturi dolores sit ullam voluptas. Debitis, nobis.
               </p>
               <button class="btnBleu">Psst, par ici</button>
          </div>
          <div class="content-img">
               <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/perso-visible.png" alt="">
          </div>
     </div>
     <div class="cache"></div>
</div>

<!--ASSOCIATION-->
<div class="association" id="area2">
     <div class="content-association">
          <p class="title">Quelques mots <br>sur l'Association</p>
          <p class="description">
               A-Prendre en main est une association de loi 1901 dont l’objet est de promouvoir et soutenir l’aide au développement économique et social des populations défavorisées en prônant leur —autonomie—. Les projets menés auront pour ambition de favoriser l’éducation des jeunes et/ou de participer à l’essor socio-économique des populations. <br>
               Elle a été créée en Janvier 2016 à l’initiative de Loïc Basseeck, Cédric Tchamen et Fabien Buchet.
          </p>
     </div>
     <div class="words cf">
          <p class="entire">valeurs</p>
          <div class="right">
               <p class="one">Diversité</p>
               <p class="two">Partage</p>
               <p class="three">Volonté d'aider</p>
               <p class="four">Respect</p>
          </div>
     </div>
</div>

<!--CROWDFOUNDING-->
<div class="crowd cf" id="area3">
     <div class="left">
          <div class="textblock">
               <p class="title">Grâce à vous, <br> nous pouvons y croire !</p>
               <button class="btnBleu">Participer à l'aventure</button>
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
     <p class="somme">23 638€</p>
</div>

<!--EQUIPE-->
<div class="equipe" id="area4">
     <div class="wordEquipe">équipe</div>
     <div class="content-equipe">
          <p class="title"><span>Grâce à eux,</span> <br> l'association existe</p>
          <ul class="sliderEquipe">
              <?php
              $args = array(
                  'post_type'      => 'team',
                  'post_status'    => 'publish',
              );
              $actus = new WP_Query($args);

              ?>

              <?php while ($actus->have_posts()) : $actus->the_post(); ?>
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
                              <p class="participation"><?php the_content() ?></p>
                         </div>
                    </div>
               </li>
              <?php endwhile; ?>
          </ul>
     </div>
</div>

<!--ACTUALITES-->
<div class="actualites" id="area5">
     <div class="content-actu">
          <p class="title">Dernières actualités</p>
     </div>
</div>

<!--CONTACT-->
<div class="contact" id="area6">
     <div class="content-contact">
          <p class="title">Faites-nous part de vos idées</p>
          <form action="">
               <input type="text" name="name" placeholder="votre nom">
               <input type="text" name="mail" placeholder="votre adresse mail">
               <textarea name="message" rows="8" cols="80" placeholder="dites-nous en plus"></textarea>
          </form>
     </div>
</div>

</div>

<!--<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/js/jquery-1.10.2.min.js"></script>-->
<!--<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/js/jquery.gsap.min.js"></script>-->
<!--<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/js/TimelineMax.min.js"></script>-->
<!--<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/js/TweenMax.min.js"></script>-->
<!--<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/js/jquery.bxslider.min.js"></script>-->
<!--<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/js/default.js"></script>-->

<?php
    /**
     * Ajoute le footer (footer.php)
     */
    get_footer();
?>
