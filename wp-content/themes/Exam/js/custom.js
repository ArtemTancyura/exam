//jQuery(function($){
//    $('.product-menu-item').hover(function(){
//        $('.products-posts').addClass('when_product-menu-item_hover');
//    }, function(){
//        $('.products-posts').removeClass('when_product-menu-item_hover');
//    })
//});

//Navigation
var visible = false;
function showmenu() {
jQuery(document).ready(function ($) {
    if(visible) {
        $(".primary-mobile-nav").css('display', 'none');
        visible = false;
    } else {
        $(".primary-mobile-nav").css('display', 'block');
        visible = true;
    }
});
}

jQuery(document).ready(function ($) {
    $(window).resize(function () {
        if ($(window).width() > 800) {
            $(".primary-mobile-nav").css('display', 'none');
        }
        else {

        }
    });

});//Navigation


//slider
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide"
    });
});