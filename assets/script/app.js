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
    './assets/img/scene2/worker-1.svg',
    './assets/img/scene2/worker-2.svg',
    './assets/img/scene2/worker-3.svg',
    './assets/img/scene2/worker-2.svg'
];

workingSprite = [
    './assets/img/scene3/working-1.svg',
    './assets/img/scene3/working-2.svg'
];

var controller = new ScrollMagic.Controller();

//SCENE 1 TWEENS
var element = $('.act_first');
var boySwap = new TimelineMax({repeat: 12});
boySwap
    .set(element.find('.img--boy'), {attr: {src: boySprite[0]}}, 0)
    .set(element.find('.img--boy'), {attr: {src: boySprite[1]}}, 100)
    .set(element.find('.img--boy'), {attr: {src: boySprite[2]}}, 200)
    .set(element.find('.img--boy'), {attr: {src: boySprite[3]}}, 300);

var scene1 = new TimelineMax();
scene1.to(element.find('.story-text--container'), 500, {opacity: 1}, 500)
    .to(element.find('.story-text--container'), 500, {opacity: 0}, 2250)
    .set(element.find('.story-text--container .number_holder'), {text: '02'}, 3400)
    .set(element.find('.story-text--container .story_text'), {text: 'Wallah y a plus d\'eau chaude'}, 3400)
    .to(element.find('.story-text--container'), 500, {opacity: 1}, 3500)
    .to(element.find('.story-text--container'), 500, {opacity: 0}, 5000)
    .set(element.find('.story-text--container .number_holder'), {text: '03'}, 6200)
    .set(element.find('.story-text--container .story_text'), {text: 'OMG l\'EAU EST TOUT CALCAIRE !!! LET THE MASTER DO, I\'m GONNA REPAIR THIS SHIT'}, 6200)
    .to(element.find('.story-text--container'), 500, {opacity: 1}, 6250)
    .to(element.find('.story-text--container'), 500, {opacity: 0}, 8000)
    .to(element.find('.img--boy'), 1000, {left: '46%'}, 2000)
    .to(element.find('.img--boy'), 800, {bottom: 50, width: '-=1%'}, 2500)
    .to(element.find('.img--puit'), 500, {left: '40%'}, 1500)
    .to(element.find('.img--puit'), 1000, {opacity: 1}, 4000)
    .to(element.find('.img--smoke'), 1, {left: '56%', bottom: '17vw'}, 1500)
    .to(element.find('.img--smoke'), 500, {opacity: 1}, 5000);


var scene1Bg = new TimelineMax({repeat: 0});
scene1Bg
    .to(element.find('.img--bg'), 4000, {right: '0%', ease: Linear.easeNone})
    .to(element.find('.img--sun'), 8000, {left: '-5%', ease: Linear.easeNone}, 0);


//SCENE 2 TWEENS

var workerSwap = new TimelineMax({repeat: 24});
workerSwap
    .set(element.find('.img--worker'), {attr: {src: workerSprite[0]}}, 0)
    .set(element.find('.img--worker'), {attr: {src: workerSprite[1]}}, 100)
    .set(element.find('.img--worker'), {attr: {src: workerSprite[2]}}, 200)
    .set(element.find('.img--worker'), {attr: {src: workerSprite[3]}}, 300);

var scene2 = new TimelineMax();
scene2.to(element.find('.img--worker'), 1000, {left: '70%'}, 6000)
    .to(element.find('.img--worker'), 1000, {bottom: 100, width: '-=1%'}, 7000);


//SCENE 3 TWEENS

var workingSwap = new TimelineMax({repeat: 100});
workingSwap = new TimelineMax()
    .set(element.find('.img--worker'), {attr: {src: workingSprite[0]}}, 100)
    .set(element.find('.img--worker'), {attr: {src: workingSprite[1]}}, 200);

var scene3 = new TimelineMax()
scene3.set(element.find('.img--puit'), {attr: {src: './assets/img/scene3/pump.svg'}}, 9000)
    .to(element.find('.img--worker'), 0, {width: '21%', left: '61%'}, 8600)
    .to(element.find('.img--smoke'), 0, {opacity: 0}, 8999)
    .to(element.find('.img--puit'), 0, {bottom: -50, width: '47%', left: '37%'}, 9000)
    .add(workingSwap, 8500);

//SCENE INTERSECTION

var intersection = new TimelineMax();

intersection.to(element.find('.leaf_container .left'), 500, {bottom: '5%', left: '0%', rotation: '90'}, 10000)
    .to(element.find('.leaf_container .right'), 500, {bottom: '5%', right: '0%', rotation: -30}, 10000);


//SCENE INTERSECTION

var scene4 = new TimelineMax();
scene4.to(element.find('.comunity-case_container'), 500, {opacity: 1, width: '100%', height: '100vw', left:0}, 10250)
    .to(element.find('.leaf_container .left'), 750, {bottom: '0', left: '-70%', rotation: 0}, 10750)
    .to(element.find('.leaf_container .right'), 750, {bottom: '0', right: '-70%', rotation: 0}, 10750)
    .to(element.find('.comunity-case_container .img--case'), 500, {right: '25%', bottom: "20vw"}, 12000)
    .to(element.find('.comunity-case_container .img--case'), 100, {width: '25%'}, 12500)
    .to(element.find('.comunity-case_container .img--hand'), 100, {left: '0%', opacity:1}, 13000)
    .to(element.find('.comunity-case_container .img--case'), 1000, {bottom: '2vw'}, 14500)
    .to(element.find('.comunity-case_container .img--hand'), 1000, {left: '40%', opacity:1}, 14500)
    .to(element.find('.comunity-case_container .img--case'), 500, {left: '39%'}, 15500)
    .to(element.find('.comunity-case_container .img--hand'), 500, {left: '30%', opacity:1}, 15500)


scene1Final = new TimelineMax({repeat: 0});
scene1Final.add([boySwap, scene1Bg, scene1, scene2, workerSwap, scene3, intersection, scene4]);


var sceneController = new ScrollMagic.Scene({
    duration: 20000,
    offset: -420,
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

