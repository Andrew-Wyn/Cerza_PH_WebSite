$(document).ready(function(){
    /*ACTIVATOR FOR FRAMEWORK*/
    $('.sidenav').sidenav();
    $('.materialboxed').materialbox();
    /********************************************************/
    
    $(window).scroll(function(){
        if($(window).scrollTop() > $(".main").position().top + $(".main").height()){
            $(".header").addClass("pos_fix");
            $(".compensatore").removeClass("dn");
            $(".head_before").addClass("op0");
            $(".head_after").removeClass("op0");
        } else {
            $(".header").removeClass("pos_fix");
            $(".compensatore").addClass("dn");
            $(".head_after").addClass("op0");
            $(".head_before").removeClass("op0");
        }
    });
    
    
    /* -------------------------- SCROLL GIUSTO PER I LINK dell'Indice --------------------------- */
    function rightScroll(anID) {
        var x = $("#"+anID).offset();
        $("html,body").animate({scrollTop: x.top + 10}, 1000, function(){});
    };
});