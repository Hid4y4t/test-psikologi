$(document).ready(function(){
    $(".btn1").click(function(){
    
        $(".geser1").css("right" , "0");
    });
    $(".back1").click(function(){
    
        $(".geser1").css("right" , "-100vw");
    });
    $(".btn2").click(function(){
    
        $(".geser2").css("right" , "0");
    });
    $(".back2").click(function(){
    
        $(".geser2").css("right" , "-100vw");
    });
    $(".btn3").click(function(){
    
        $(".geser3").css("right" , "0");
    });
    $(".back3").click(function(){
    
        $(".geser3").css("right" , "-100vw");
    });
    $(".btn4").click(function(){
    
        $(".geser4").css("right" , "0");
    });
    $(".back4").click(function(){
    
        $(".geser4").css("right" , "-100vw");
    });
    
});

$(function(){
    var pull = $('#mobile2');
   
    $(window).rize(function(){
       var w=$(window) .width();
       if(w > 600 && menubar.visible(':hidden')){
           menubar.removedAttr('style');
       }
    });
   });