jQuery(document).ready(function ($) {
    //alert('hallo');

    $('.flexslider').flexslider({
        animation: "fade"
    });
});
jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('#marquee').addClass('slideIn');
		} else {
			jQuery('#marquee').removeClass('slideIn');
		}
	});