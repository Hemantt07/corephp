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

  const navBar = () => {
    $("#toggleBar").on("click", function () {
      $(this).parent().find("ul.nav").animate({ right: 0 }, 1000);
    });

    $("ul.nav #close").on("click", function () {
      $(this).parent().animate({ right: "-100%" }, 1000);
    });
  };

  navBar();
});
