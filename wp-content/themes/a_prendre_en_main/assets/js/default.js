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
    var slidertl  = new TimelineMax();
    var img       = jQuery('.equipe ul li .left img');
    var textblock = jQuery('.equipe ul li .right .textblock');

    jQuery('.sliderEquipe').bxSlider({
        // onSlideAfter: function(){
        //   console.log("before");
        //   jQuery('.equipe .bx-next').click(function() {
        //     var left = jQuery('.equipe ul .left');
        //     var right = jQuery('.equipe ul .right');
        //     var tlSlider = new TimelineMax();
        //
        //     tlSlider.from(img, 0.2, {marginLeft: '50%'})
        //     tlSlider.to(img, 0.2, {marginLeft: '0'})
        //     tlSlider.from(textblock, 0.2, {marginLeft: '50%'})
        //     tlSlider.to(textblock, 0.2, {marginLeft: '0'})
        //   });
        // },
        //
        // onSlideBefore: function() {
        //   console.log("avant");
        //   jQuery('.equipe .bx-next').click(function() {
        //     var left = jQuery('.equipe ul .left');
        //     var right = jQuery('.equipe ul .right');
        //     var tlSlider = new TimelineMax();
        //
        //     tlSlider.from(img, 0.2, {marginLeft: '0'})
        //     tlSlider.to(img, 0.2, {marginLeft: '-50%'})
        //     tlSlider.from(textblock, 0.2, {marginLeft: '0'})
        //     tlSlider.to(textblock, 0.2, {marginLeft: '-50%'})
        //   });
        // }
    });
    jQuery('.equipe .bx-controls-direction .bx-prev').html('Précédent')
    jQuery('.equipe .bx-controls-direction .bx-next').html('Suivant')


}

/*
function imagesPartenaires(){
    jQuery('.footer a.attineos img').mouseenter(function() {
        jQuery(this).attr('src', './css/images/attineosActive.png');
    });
    jQuery('.footer a.attineos img').mouseleave(function() {
        jQuery(this).attr('src', './css/images/attineos.png');
    });

    jQuery('.footer a.digitalVillage img').mouseenter(function() {
        jQuery(this).attr('src', './css/images/digitalVillageActive.png');
    });
    jQuery('.footer a.digitalVillage img').mouseleave(function() {
        jQuery(this).attr('src', './css/images/digitalVillage.png');
    });

    jQuery('.footer a.supMontpellier img').mouseenter(function() {
        jQuery(this).attr('src', './css/images/supMontpellierActive.png');
    });
    jQuery('.footer a.supMontpellier img').mouseleave(function() {
        jQuery(this).attr('src', './css/images/supMontpellier.png');
    });
}
*/

function modaleActu(){
    var tlModale    = new TimelineMax();
    var modaleActu  = jQuery('.modale-actu');

    jQuery('.actualites .cache').click(function() {
        jQuery('.bg-noir').fadeIn();
        tlModale.to(modaleActu, 0.5, {left : '50%'});
        tlModale.play();
    });

    jQuery('.modale-actu .close').click(function() {
        jQuery('.bg-noir').fadeOut(800);
        tlModale.reverse();
    });

    jQuery('.bg-noir').click(function() {
        jQuery(this).fadeOut(800);
        tlModale.reverse();
    });
}

function animationParallaxe(){
    /**
     * Created by Thib on 23/01/2017.
     */

    boySprite = [
        './css/images/scene1/boy-1.svg',
        './css/images/scene1/boy-2.svg',
        './css/images/scene1/boy-3.svg',
        './css/images/scene1/boy-2.svg'
    ];

    workerSprite = [
        './css/images/scene1/worker-1.svg',
        './css/images/scene1/worker-2.svg',
        './css/images/scene1/worker-3.svg',
        './css/images/scene1/worker-2.svg'
    ];

    var controller = new ScrollMagic.Controller();

    //SCENE 1 TWEENS
    var element = jQuery('.act_first');
    var boySwap = new TimelineMax({repeat: 11});
    boySwap
        .set(element.find('.img--boy'), {attr: {src: boySprite[0]}}, 0)
        .set(element.find('.img--boy'), {attr: {src: boySprite[1]}}, 100)
        .set(element.find('.img--boy'), {attr: {src: boySprite[2]}}, 200)
        .set(element.find('.img--boy'), {attr: {src: boySprite[3]}}, 300);

    var scene1 = new TimelineMax();
    scene1 .to(element.find('.story-text--container'), 500, {opacity:1}, 500)
        .to(element.find('.story-text--container'), 500, {opacity:0}, 2250)
        .set(element.find('.story-text--container .number_holder'), {text:'02'}, 3400)
        .set(element.find('.story-text--container .story_text'), {text:'Wallah y a plus d\'eau chaude'}, 3400)
        .to(element.find('.story-text--container'), 500, {opacity:1}, 3500)
        .to(element.find('.story-text--container'), 500, {opacity:0}, 5000)
        .set(element.find('.story-text--container .number_holder'), {text:'03'}, 6200)
        .set(element.find('.story-text--container .story_text'), {text:'OMG l\'EAU EST TOUT CALCAIRE !!! LET THE MASTER DO, I\'m GONNA REPAIR THIS SHIT'}, 6200)
        .to(element.find('.story-text--container'), 500, {opacity:1}, 6250)
        .to(element.find('.story-text--container'), 500, {opacity:0}, 8000)
        .to(element.find('.img--boy'), 1000, {left: '46%'}, 2000)
        .to(element.find('.img--boy'), 500, {bottom: 50, width:'-=1%'}, 2500)
        .to(element.find('.img--puit'), 500, {left:'40%'},1500)
        .to(element.find('.img--puit'), 1000, {opacity: 1}, 4000);


    var scene1Bg = new TimelineMax({repeat: 0});
    scene1Bg
        .to(element.find('.img--bg'), 4000, {right: '0%', ease:Linear.easeNone})
        .to(element.find('.img--sun'), 8000, {left: '-5%', ease:Linear.easeNone}, 0);



    //SCENE 2 TWEENS

    var workerSwap = new TimelineMax({repeat: 22});
    workerSwap
        .set(element.find('.img--worker'), {attr: {src: workerSprite[0]}}, 0)
        .set(element.find('.img--worker'), {attr: {src: workerSprite[1]}}, 100)
        .set(element.find('.img--worker'), {attr: {src: workerSprite[2]}}, 200)
        .set(element.find('.img--worker'), {attr: {src: workerSprite[3]}}, 300);

    var scene2 = new TimelineMax();
    scene2.to(element.find('.img--worker'), 1000, {left: '70%'}, 5000)
        .to(element.find('.img--worker'), 1000, {bottom: 100, width:'-=1%'}, 6000);


    scene1Final = new TimelineMax({repeat: 0});
    scene1Final.add([boySwap, scene1Bg, scene1, scene2, workerSwap])



    var sceneController = new ScrollMagic.Scene({
        duration: 8000,
        offset: -400,
        reverse: true,
        triggerElement: '.act_first'
    })
        .setPin('.act_first')
        // .on('start', function() {
        //     scene1Final.play();
        // })
        .setTween(scene1Final)
        .addIndicators({name: "boy-walk"})
        .addTo(controller);

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
    // imagesPartenaires();
    modaleActu();
    animationParallaxe();
});










