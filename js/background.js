/*
    日系网页风格背景动画效果
    By Sparrow
*/
jQuery(document).ready(function($) {
    var max = 30;
    for(var i = 0; i < max; i++){
        var l = randomRange(0,$(window).width()-50);
        var t = randomRange(0,1000);
        var delay = randomRange(1,5);
        $(".background-1").append('<span class="bk-element-text-pink" style="left:'+l+'px; top:'+t+'px; animation-delay:'+delay+'s;"><i class="fa fa-star" aria-hidden="true"></i></span>');
    }
    for(var i = 0; i < max; i++){
        var l = randomRange(0,$(window).width()-50);
        var t = randomRange(0,1000);
        var delay = randomRange(1,5);
        $(".background-2").append('<span class="bk-element-text-blue" style="left:'+l+'px; top:'+t+'px; animation-delay:'+delay+'s;">=w=</span>');
    }

    function randomRange(min, max) {
        return Math.random() * (max - min) + min;
    }
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    //添加滚动事件监听器
    $(document).scroll(function() {
        //if($(".background-1").position().top + $(".background-1").height() < $("#main-content").position().top)
            $(".background-1").css("top",$(document).scrollTop()*0.3);
        //if($(".background-2").position().top + $(".background-2").height() < $("#main-content").position().top)
            $(".background-2").css("top",$(document).scrollTop()*0.5);
 
        
        
  
    });
});