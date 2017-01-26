function burgerMenu(){
  var element1 = jQuery('.iconBurger .one');
  var element2 = jQuery('.iconBurger .two');
  var element3 = jQuery('.iconBurger .three');
  var tl = new TimelineLite();
  jQuery('.iconBurger').click(function(e) {

    jQuery(element3).fadeOut(100);

    tl.to(element1, 0.6, {
      rotation : 45,
      transformOrigin: "top"
    });

    tl.to(element2, 0.6, {
      rotation : 135,
      transformOrigin: "bottom",
      marginTop: '-2px'
    }, '-=0.7');

    jQuery('.burgerMenu').fadeIn();
  });

  var scrollTop = jQuery(document).scrollTop();
  var anchor    = jQuery('.burgerMenu li a').attr('href');
}

function nav(){
  //SCROLL
  jQuery('.header nav li a').click(function() {
    var element = jQuery(this).attr("href");

    jQuery('html, body').animate({
            scrollTop: (jQuery(element).offset().top - 80)
    }, 'slow');

    // jQuery('.burgerMenu').fadeOut();
    // tl.reverse();
  });

  //Fixe
  // jQuery(window).scroll(function() {
  //   var scrollTop          = jQuery(window).scrollTop();
  //   var headerHeight       = jQuery('.header').height();
  //   var associationTop  = jQuery('.association').offset().top;
  //
  //   if (scrollTop >= headerHeight){
  //     jQuery('.header').css({
  //       'position'  : 'fixed',
  //       'top'       : 0,
  //       'width'     : "97%"
  //     });
  //   } else{
  //     jQuery('.header').css({
  //       'position'  : 'static',
  //       'width'     : "100%"
  //     });
  //   }
  //
  //   if(scrollTop >= associationTop){
  //     jQuery('.header').css({
  //       'background-color'  : '#fff'
  //     });
  //
  //     jQuery('.header a, .header .content-logo p').css({
  //       'color'             : '#C6C6C6'
  //     });
  //
  //     jQuery('.header li.don a').css({
  //       'color'   : '#fff'
  //     });
  //
  //     jQuery('.header .logo').attr('src', '/assets/images/logoGrey.svg');
  //   } else {
  //     jQuery('.header').css({
  //       'background-color'  : '#3ca968'
  //     });
  //
  //     jQuery('.header a, .header .content-logo p').css({
  //       'color'             : '#fff'
  //     });
  //
  //     jQuery('.header .logo').attr('src', '<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg');
  //
  //   }
  //
  //
  // });


}

function blocParallaxe(){
  var scrollTop = jQuery(window).scrollTop();

  jQuery('.parallaxe .visible button').click(function() {
    jQuery('.parallaxe .cache').slideDown(500);

    var cacheTop = jQuery('.parallaxe .cache').offset().top;
    jQuery('html, body').animate({scrollTop : cacheTop})
  });
}

function sliderEquipe(){
  jQuery('.sliderEquipe').bxSlider();
  jQuery('.equipe .bx-controls-direction .bx-prev').html('Précédent')
  jQuery('.equipe .bx-controls-direction .bx-next').html('Suivant')
}


function Ulule() {

    var getJSON = function(url, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open("get", url, true);
        xhr.responseType = "json";
        xhr.onload = function() {
            var status = xhr.status;
            if (status == 200) {
                callback(null, xhr.response);
            } else {
                callback(status);
            }
        };
        xhr.send();
    };


    jQuery('#caca').click(function() {
        console.log('ok');
        getJSON("https://api.ulule.com/v1/projects/10-days-10-songs",
            function(err, data) {
                if (err != null) {
                    alert("Something went wrong: " + err);
                } else {
                    alert("Your query count: " + data.id);
                }
            });
    });
}
jQuery(document).ready(function() {
  // burgerMenu();getUlule();
  Ulule();
  nav();
  blocParallaxe();
  sliderEquipe()
});
