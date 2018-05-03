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
    $(this).toggleClass('menu-w');
  });
  $('.tp-mask-wrap').on('click',function(){
  	$('html, body').animate({
      scrollTop: $("#sobre").offset().top
    }, 1000);
  });
  $(window).on('load', function() { // makes sure the whole site is loaded 
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(400).queue(function (next) { 
      $(this).css({'overflow':'visible'}); next(); 
    });
  });
  var owl = $("#chef .owl-carousel");
  owl.owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
        },
        900:{
            items:3,
        }
    }
  });
  $('.owl-next-btn').click(function() {
      owl.trigger('next.owl.carousel');
  });
  $('.owl-prev-btn').click(function() {
      owl.trigger('prev.owl.carousel');
  });
  var owlb = $("#menu .owl-carousel");
  owlb.owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
        },
        900:{
            items:3,
        }
    }
  });
  $('.owl-next-btnb').click(function() {
      owlb.trigger('next.owl.carousel');
  });
  $('.owl-prev-btnb').click(function() {
      owlb.trigger('prev.owl.carousel');
  });
} )( jQuery );
