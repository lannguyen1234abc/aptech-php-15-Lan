$(document).ready(function(){
    $("#bat").click(function(){
        $("#js-image").attr("src","https://www.w3schools.com/js/pic_bulbon.gif");
    });
});

$(document).ready(function(){
    $("#tat").click(function(){
        $("#js-image").attr("src","https://www.w3schools.com/js/pic_bulboff.gif");
    });
});

$(document).ready(function(){
    $("#battat").click(function(){
       if($("#js-image").attr("src")==="https://www.w3schools.com/js/pic_bulboff.gif") {
           $("#js-image").attr("src", "https://www.w3schools.com/js/pic_bulbon.gif");
       } else{
           $("#js-image").attr("src", "https://www.w3schools.com/js/pic_bulboff.gif");
       }
    });
});
