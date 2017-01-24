/**
 * Created by Thib on 23/01/2017.
 */

boySprite = [
    './assets/img/boy-1.svg',
    './assets/img/boy-2.svg',
    './assets/img/boy-3.svg',
    './assets/img/boy-2.svg'
];


function sprite (imageTab){
   var index;
    index >= imageTab.length ? index+=1 : index = 0;
    imageTab[index];
}

var element1 = $('.act_first');
var parkour = 0;

var controller = new ScrollMagic.Controller();
var element = $('.act_second');


var scene2 = new TimelineMax({repeat:3});
scene2
    .set(element.find('img'), {attr:{src: boySprite[0]}}, 1)
    .set(element.find('img'), {attr:{src: boySprite[1]}}, 2)
    .set(element.find('img'), {attr:{src: boySprite[2]}}, 3)
    .set(element.find('img'), {attr:{src: boySprite[3]}}, 4)
    .to(element, 1, {left : '+=10%'}, -1);
var scene2Controller = new ScrollMagic.Scene({
    duration: 2400,
    offset: 150,
    reverse: true,
    triggerElement: '.act_second'
})
    .setPin('.act_second')
    .on('start', function () {
        scene2.play();
    })
    .setTween(scene2)
    .addTo(controller);
