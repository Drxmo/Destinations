




$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.headerX').addClass("smallX");
        $('.headerX').addClass("sticky");
        $('.containerX1').addClass("visibleX");
        $('.containerX1').removeClass("invisibleX");
        $('.navsub').addClass("stickyX2");


    }
    else {
        $('.headerX').removeClass("smallX");
        $('.headerX').removeClass("sticky");
        $('.containerX1').removeClass("visibleX");
        $('.containerX1').addClass("invisibleX");


//       $('.containerX1').addClass("active");

//       jQuery('nav>*').click(function(){
//    $this = jQuery(this);
//    $this.parent().children('a').removeClass('clicked');
//    $this.addClass("clicked");
//});


        $('.navsub').removeClass("stickyX2");
    }
    if ($(this).scrollTop() > 200) {
        $('.headerX').addClass("noStickyX");
        $('.headerX').removeClass("sticky");

        $('.navsub').removeClass("stickyX2");
        $('.navsub').addClass("stickyX3");
    }
    else {

        $('.navsub').removeClass("stickyX3");
        $('.headerX').removeClass("noStickyX");


    }
});



//       
//       $( document ).ready(function() {
//        console.log( "document loaded" );
//        $('.sitiosX').addClass('active');
//        
//    });
// 
//    $( window ).load(function() {
//        console.log( "window loaded" );
//        $('.sitioX').addClass('active');
//    });





//     if ($(this).scrollTop() > 201){  
//        
//        $('.headerX').removeClass("sticky");
//       
//        $('.navsub').removeClass("stickyX2");
//         
//    }
//  



