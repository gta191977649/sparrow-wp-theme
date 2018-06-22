/*
    各种特效
    By Sparrow
*/
jQuery(document).ready(function($) {
   
    $("input,textarea").keypress(function() {
        $(this).animate({top: "3px"},50);
    });
    $("input,textarea").keyup(function() {
        $(this).animate({top: "0px"},50);
    });
});
