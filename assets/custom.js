$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 1000,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
    dotsSpeed: 1000,
    navSpeed: 1000,
  });
});
