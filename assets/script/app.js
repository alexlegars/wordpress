/**
 * Created by Thib on 23/01/2017.
 */

boySprite = [
    './assets/img/scene1/boy-1.svg',
    './assets/img/scene1/boy-2.svg',
    './assets/img/scene1/boy-3.svg',
    './assets/img/scene1/boy-2.svg'
];

workerSprite = [
    './assets/img/scene1/worker-1.svg',
    './assets/img/scene1/worker-2.svg',
    './assets/img/scene1/worker-3.svg',
    './assets/img/scene1/worker-2.svg'
];

var controller = new ScrollMagic.Controller();

//SCENE 1 TWEENS
var element = $('.act_first');
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

