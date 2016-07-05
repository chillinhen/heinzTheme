jQuery(document).ready(function ($) {
    //close marquee
    $('#marquee .close').click(function(){
        $('#marquee').removeClass('slideIn').addClass('fadeOut');
    });
    // jumpto main menu
    var anker = 'main-menu';
    var currentlink = $('li:not(.kaufen).menu-item > a');
    
    currentlink.click(function(){
        var link = $(this).attr('href');
        var jumpto = link + '#' + anker;
        //alert(jumpto);
        $(this).attr('href',jumpto);
    });
    
 //fanclub carousel, made with flexslider
    $('.fanclubs.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 315,
    itemMargin: 15,
    minItems: 3,
    maxItems: 6
  });
    
    $('.flexslider').flexslider({
        animation: "fade"
    });

    $('.gallery-item a').nivoLightbox({
        effect: 'fade', // The effect to use when showing the lightbox 
        theme: 'default', // The lightbox theme to use 
        keyboardNav: true, // Enable/Disable keyboard navigation (left/right/escape) 
        onInit: function () {}, // Callback when lightbox has loaded 
        beforeShowLightbox: function () {}, // Callback before the lightbox is shown 
        afterShowLightbox: function (lightbox) {}, // Callback after the lightbox is shown 
        beforeHideLightbox: function () {}, // Callback before the lightbox is hidden 
        afterHideLightbox: function () {}, // Callback after the lightbox is hidden 
        onPrev: function (element) {}, // Callback when the lightbox gallery goes to previous item 
        onNext: function (element) {}, // Callback when the lightbox gallery goes to next item 
        errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded 
    });

    $('.thumbnail a').each(function () {
        var gallery = $(this).parent().parent().parent('div');
        var galleryID = gallery.attr('id');
        //alert(galleryID);
        $(this).attr('data-lightbox-gallery', galleryID);
    });
    
    //elastic iframes
       $('div:not(".soundcloudIsGold") > iframe,p > iframe').each(function(){
       	$(this).wrap('<div class="iframe-elastic"></div>');
       });
});
jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
        jQuery('#marquee').addClass('slideIn');
    } else {
        jQuery('#marquee').removeClass('slideIn');
    }
});