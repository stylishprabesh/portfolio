$(document).ready(function(){

  // Hero Carousel
  $('.owl-carousel').owlCarousel({ items:1, loop:true, autoplay:true, autoplayTimeout:5000, dots:true });

  // Smooth scroll
  $('a.nav-link').on('click', function(e){
    if(this.hash !== ""){ e.preventDefault();
      $('html, body').animate({ scrollTop: $(this.hash).offset().top - 70 }, 800);
    }
  });

  // Navbar style toggle
  $(window).on('scroll', function(){
    $('.navbar').toggleClass('scrolled', $(this).scrollTop() > 50);
  });

  // AOS Animate On Scroll
  AOS.init({ duration: 800, once: true });

  // Isotope filtering
  var $grid = $('.grid').isotope({ itemSelector: '.grid-item', layoutMode: 'fitRows' });
  $('.filters').on('click', 'button', function(){
    $('.filters .active').removeClass('active');
    $(this).addClass('active');
    $grid.isotope({ filter: $(this).attr('data-filter') });
  });

  // Magnific Popup
  $('.popup-link').magnificPopup({ type: 'image', gallery:{ enabled: true } });

  // Form submission handling…
});
