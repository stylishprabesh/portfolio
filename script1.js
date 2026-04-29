$(document).ready(function () {
  $('.hero-slider').slick({
    autoplay: true,
    arrows: false,
    dots: true,
    fade: true,
    autoplaySpeed: 3000
  });

  // Preloader
  setTimeout(() => {
    $('#preloader').fadeOut();
  }, 1000);

  // Back to top
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn();
    } else {
      $('.back-to-top').fadeOut();
    }
  });

  $('.back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 600);
    return false;
  });
});
