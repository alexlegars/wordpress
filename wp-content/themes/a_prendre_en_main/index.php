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
          <div class="cache"></div>
     </div>


    <?php
    $args = array(
        'post_type'      => 'association',
        'post_per_page'      => 1,
        'post_status'    => 'publish',
    );
    $objectifs = new WP_Query($args);

    ?>

     <!--ASSOCIATION-->
     <div class="association" id="area2">
          <p class="title">Quelques mots <br>sur l'association</p>
          <div class="content-association">
               <p class="description">
                    A-Prendre en main est une association de loi 1901 dont l’objet est de promouvoir et soutenir l’aide au développement économique et social des populations défavorisées en prônant leur —autonomie—. Les projets menés auront pour ambition de favoriser l’éducation des jeunes et/ou de participer à l’essor socio-économique des populations. <br>
                    <br>Elle a été créée en Janvier 2016 à l’initiative de Loïc Basseeck, Cédric Tchamen et Fabien Buchet.
               </p>
          </div>
          <div class="words cf showDesktop">
               <p class="entire">valeurs</p>
               <div class="right">
                    <p class="one">Partage</p>
                    <p class="two">Respect</p>
                    <p class="three">Diversité</p>
                    <p class="four">Volonté d'aider</p>
               </div>
          </div>
     </div>

     <!--APPROCHE-->
     <div class="approche" id="area3">
          <div class="content-approche cf">
               <div class="left">
                    <p class="title">L'approche <br> A-prendre en main</p>
                    <div class="trait-jaune"></div>
                    <div class="textblock">
                         <p class="subtitle">Autonomie des populations</p>
                         <p class="description">
                              En plus du financement de la mise en place des projets, les populations bénéficiaires seront formées et accompagnées pour établir une organisation autour du projet au-delà de notre intervention : pour qu’elles se l’approprient pleinement et qu’elles disposent de moyens pour en assurer la pérennité.
                         </p>
                    </div>
               </div>
               <div class="right">
                    <div class="textblock textblock1">
                         <p class="subtitle">Développement</p>
                         <p class="description">
                              Nous voulons encourager une dynamique localedans laquelle les populations disposent d’un environnement favorable pour développer une activité économique, sociale et éducative. Chaque personne pourra ainsi avoir la possibilité de se prendre en main.
                         </p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/enfant-approche.jpg" alt="" class="enfant">
                    <div class="textblock textblock2">
                         <p class="subtitle">Implication locale</p>
                         <p class="description">
                              Nous avons à cœur d’impliquer dès le début de nos projets les populations bénéficiaires en leur qualité d’usagers : Leur mobilisation et leur participation permet de les responsabiliser face à la prise en charge de leur besoin et participe à la réussite du projet.
                         </p>
                    </div>
               </div>
          </div>
     </div>

     <!--CROWDFOUNDING-->
     <div class="crowd cf" id="area4">
          <div class="left">
               <div class="textblock">
                    <p class="title">Grâce à vous, <br> nous pouvons y croire !</p>
                    <button class="btnBleu showDesktop">Participer à l'aventure</button>
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
          <button class="btnBleu showPhone">Participer à l'aventure</button>
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
                    <div class="content-img">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/img-actu3.jpg" alt="">
                         <div class="cache">
                              <div class="textblock">
                                   <p class="titre">Les enfants</p>
                                   <br>
                                   <p class="titre">et l'école</p>
                                   <p class="date">Le 25 janv. 2017</p>
                                   <p class="lire">Lire l'article</p>
                              </div>
                         </div>
                    </div>
                    <div class="content-img">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/img-actu2.jpg" alt="">
                         <div class="cache">
                              <div class="textblock">
                                   <p class="titre">Une ressource</p>
                                   <br>
                                   <p class="titre">vitale pour tous</p>
                                   <p class="date">Le 15 janv. 2017</p>
                                   <p class="lire">Lire l'article</p>
                              </div>
                         </div>
                    </div>
                    <div class="content-img">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/img-actu1.jpg" alt="">
                         <div class="cache">
                              <div class="textblock">
                                   <p class="titre">Les récoltes</p>
                                   <br>
                                   <p class="titre">à Douala !</p>
                                   <p class="date">Le 27 sept. 2016</p>
                                   <p class="lire">Lire l'article</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!--MODALES ACTU-->
          <div class="modale-actu">
               <div class="close">X</div>
               <div class="content-modale">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/img-modale.jpg" alt="">
                    <div class="textblock">
                         <p class="date">25 janv. 2017</p>
                         <p class="title">Une ressource vitale pour tous</p>
                         <p class="article">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                         </p>
                    </div>
               </div>
          </div>
     </div>

     <!--CONTACT-->
     <div class="contact" id="area8">
          <div class="content-contact">
               <p class="title">Faites-nous part de vos ressentis</p>
              <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>
          </div>
     </div>

     <!--FOOTER-->
     <div class="footer">
          <div class="content-footer cf">
               <div class="left">
                    <p class="title">Nos partenaires</p>
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
                         <p class="title">Suivez-nous</p>
                         <div class="reseaux">
                              <a href="https://www.facebook.com/Aprendreenmain/" target="_blank">Facebook</a>
                              <a href="#" target="_blank">Instagram</a>
                         </div>
                    </div>
                    <div class="infos">
                         <p class="title">Informations</p>
                         <ul>
                              <li>contact@a-prendre-en-main.org</li>
                              <li>+33 06 89 34 89 80</li>
                              <li>6 rue des Portes Blanches,</li>
                              <li>75018  Paris</li>
                         </ul>
                    </div>
               </div>
               <p class="copyright">Copyright © A-prendre en main</p>
          </div>
     </div>

</div>

<div class="bg-noir"></div>

<?php
    /**
     * Ajoute le footer (footer.php)
     */
    get_footer();
?>
