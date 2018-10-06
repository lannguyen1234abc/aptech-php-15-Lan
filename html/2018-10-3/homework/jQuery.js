$(document).ready(function(){
    $("#bat").click(function(){
        $("#js-image").attr("src","https://www.w3schools.com/js/pic_bulbon.gif");
    });
    $("#tat").click(function(){
        $("#js-image").attr("src","https://www.w3schools.com/js/pic_bulboff.gif");
    });
    $("#battat").click(function(){
        if($("#js-image").attr("src")==="https://www.w3schools.com/js/pic_bulboff.gif") {
            $("#js-image").attr("src", "https://www.w3schools.com/js/pic_bulbon.gif");
        } else{
            $("#js-image").attr("src", "https://www.w3schools.com/js/pic_bulboff.gif");
        }
     });
});



