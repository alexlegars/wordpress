function burgerMenu(){
    var element1    = jQuery('.iconBurger .one');
    var element2    = jQuery('.iconBurger .two');
    var element3    = jQuery('.iconBurger .three');
    var burgerMenu  = jQuery('.burgerMenu');
    var menu = new TimelineMax({paused:true, reversed:true})

    menu
        .to(element1, .3, {rotation: 45, transformOrigin: "left 50%", ease:Power2.easeInOut}, "cross")
        .to(element2, .3, {autoAlpha: 0}, "cross")
        .to(element3, .3, {rotation: -45, transformOrigin: "left 50%", ease:Power2.easeInOut}, "cross")
        .to(burgerMenu, 0.3, {
            width: "100%",
            ease:Power2.easeInOut
        }, '-=0.2')
        .to(jQuery('.burgerMenu ul'), 0.3, {
            display: 'block',
            opacity : 1
        }, '-=0.2')

    jQuery('.iconBurger').click(function() {
        menu.reversed() ? menu.play() : menu.reverse();
    });

    jQuery('.burgerMenu a').click(function() {
        menu.reverse();
        var element = jQuery(this).attr("href");
        jQuery('html, body').animate({
            scrollTop: (jQuery(element).offset().top - 70)
        }, 1400);
    });
}

function nav(){
    //SCROLL
    jQuery('.header nav li a').click(function() {
        var element = jQuery(this).attr("href");

        jQuery('html, body').animate({
            scrollTop: (jQuery(element).offset().top - 80)
        }, 'slow');
    });



    //Fixe
    jQuery(window).scroll(function() {
        var scrollTop             = jQuery(window).scrollTop();
        var headerHeight          = jQuery('.header').height();
        var headerMobHeight       = jQuery('.headerMob').height();
        var associationTop        = jQuery('.association').offset().top;

        if (scrollTop >= headerHeight){
            jQuery('.header').css({
                'position'  : 'fixed',
                'top'       : 0,
                'width'     : "97%"
            });
        } else{
            jQuery('.header').css({
                'position'  : 'static',
                'width'     : "100%"
            });
        }

        if (scrollTop >= headerMobHeight){
            jQuery('.headerMob').css({
                'position'  : 'fixed',
                'top'       : 0,
                'width'     : "97%"
            });
        } else{
            jQuery('.headerMob').css({
                'position'  : 'static',
                'width'     : "100%"
            });
        }

        if(scrollTop >= associationTop){
            jQuery('.header').css({
                'background-color'  : '#fff'
            });

            jQuery('.header a, .header .content-logo p').css({
                'color'             : '#C6C6C6'
            });

            jQuery('.header li.don a').css({
                'color'   : '#fff'
            });

            jQuery('.header .logoWhite').css('display', 'none');
            jQuery('.header .logoGrey').css('display', 'block');
        } else {
            jQuery('.header').css({
                'background-color'  : '#3ca968'
            });

            jQuery('.header a, .header .content-logo p').css({
                'color'             : '#fff'
            });

            jQuery('.header .logoWhite').css('display', 'block');
            jQuery('.header .logoGrey').css('display', 'none');

        }


    });


}

function blocParallaxe(){
    var scrollTop = jQuery(window).scrollTop();

    jQuery('.parallaxe .visible button').click(function() {
        jQuery('.parallaxe .cache').slideDown(500);

        var cacheTop = jQuery('.parallaxe .cache').offset().top;
        jQuery('html, body').animate({scrollTop : (cacheTop-120)})
    });
}

function sliderEquipe(){
    jQuery('.sliderEquipe').bxSlider({
        mode:'fade'
    });
    jQuery('.equipe .bx-controls-direction .bx-prev').html('Précédent')
    jQuery('.equipe .bx-controls-direction .bx-next').html('Suivant')

    // jQuery('.equipe .bx-next').click(function() {
    //   var left = jQuery('.equipe ul .left');
    //   var right = jQuery('.equipe ul .right');
    //   var tlSlider = new TimelineMax();
    //
    //   tlSlider.to(left, 0.7, {marginLeft: '-500px'})
    //   tlSlider.to(right, 0.2, {marginLeft: '-500px'})
    // });
}

function imagesPartenaires(){
    jQuery('.footer a.attineos img').mouseenter(function() {
        jQuery(this).attr('src', 'ressources/images/attineosActive.png');
    });
    jQuery('.footer a.attineos img').mouseleave(function() {
        jQuery(this).attr('src', 'ressources/images/attineos.png');
    });

    jQuery('.footer a.digitalVillage img').mouseenter(function() {
        jQuery(this).attr('src', 'ressources/images/digitalVillageActive.png');
    });
    jQuery('.footer a.digitalVillage img').mouseleave(function() {
        jQuery(this).attr('src', 'ressources/images/digitalVillage.png');
    });

    jQuery('.footer a.supMontpellier img').mouseenter(function() {
        jQuery(this).attr('src', 'ressources/images/supMontpellierActive.png');
    });
    jQuery('.footer a.supMontpellier img').mouseleave(function() {
        jQuery(this).attr('src', 'ressources/images/supMontpellier.png');
    });
}

function modaleActu(){
    var tlModale    = new TimelineMax();
    var modaleActu  = jQuery('.modale-actu');

    jQuery('.actualites .cache p.lire').click(function() {
        jQuery('.bg-noir').fadeIn();
        tlModale.to(modaleActu, 0.5, {left : '50%'});
        tlModale.play();
    });

    jQuery('.modale-actu .close').click(function() {
        jQuery('.bg-noir').fadeOut();
        tlModale.reverse();
    });

    jQuery('.bg-noir').click(function() {
        jQuery(this).fadeOut();
        tlModale.reverse();
    });
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
    function calculRaised () {
        console.log('ok');
        getJSON("https://api.ulule.com/v1/projects/niepi2017",
            function(err, data) {
                var percent =  Math.round(data.amount_raised / 23638 * 100);
                if (err != null || percent >= 100 ) {
                    jQuery('.somme').html('MERCI');
                } else {
                    jQuery('.somme').html(data.amount_raised +' '+ data.currency_display);
                }
            });
    }
    calculRaised();
    setInterval(calculRaised() ,60000);

}

jQuery(document).ready(function() {
    Ulule();
    burgerMenu();
    nav();
    blocParallaxe();
    sliderEquipe();
    imagesPartenaires();
    modaleActu();
});






