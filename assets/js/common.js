// Controls full height sections
jQuery(document).ready(function() {	

	jQuery(window).resize( function(){
		var h = jQuery(window).outerHeight();
		jQuery('.fullheight').css('min-height',h);
		jQuery('.fullheight').each(function(){
			jQuery(this).css('height','');
			if( jQuery(this).outerHeight() <= h ){
				jQuery(this).outerHeight(h);
			}
		});
	});
	jQuery(window).on('load orientationchange', function(){
		jQuery(window).trigger('resize');
	});
	// Triggers the resize
	$(window).trigger('resize');
});

// Parallax image scroll
$(function() {

	var $window = $(window);

	$('div[data-type="background"]').each(function(){
		var $bgobj = $(this);
		$(window).scroll(function() {
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			var coords = '0%'+ yPos / 10 + 'px';

			$bgobj.css({backgroundPosition: coords});
		});
	});
});


// Adds the underline to section headings
// $(function(){
// 	$('.section-heading').each(function(index, obj){
// 	var stringLength = $(this).text().length;

// 	$(this).css("background-size" , stringLength*20 + "px 0.3em");
// 	});
	
// });

// scroll to
$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

//navbar toggle
$(function () {
	$('#nav-toggle').click(function() {
		$('header').toggleClass('open');
	});
	$('#primary-navigation li a').on('click', function(){
        $("header").toggleClass('open');
	});
});
