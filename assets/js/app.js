$(document).ready(function () {
  //Owl
  $("#hero-slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    dots: false,
    navText: false,
    smartSpeed: 2000,
    autoplay: true,
    autoplayTimeout: 2000,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    autoplayHoverPause: true,
    mouseDrag: true,
    responsive: {
      0: {
        nav: false,
      },
      768: {
        nav: true,
      },
    },
  });
});
