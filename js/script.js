( function( $ ) {
    $('.header-video').each(function(i, elem) {
        headerVideo = new HeaderVideo({
          element: elem,
          media: '.header-video__media',
          playTrigger: '.header-video__play-trigger',
          closeTrigger: '.header-video__close-trigger'
        });
    });
    $('.menu-open').on('click',function(){
    	$("#myNav").toggleClass('overlay-hg');
        $("#nav-icon1").toggleClass('open');
    });
    $('.tp-mask-wrap').on('click',function(){
    	$('html, body').animate({
	      scrollTop: $("#sobre").offset().top
	    }, 1000);
    });
} )( jQuery );
