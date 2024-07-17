$(document).ready(function () {
  $(".sliderTest").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplaySpeed: 2000,
    infinite: false,
    centerMode: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $('.approachSlider').slick({
    infinite: true,
    arrows: false,
    //autoplay: true,
    autoplaySpeed: 1500,
    speed: 1500,
    centerMode: false,
    dots: true,
  });
});
document.addEventListener("DOMContentLoaded", function () {
  var toggler = document.querySelector(".navbar-toggler");
  var navbar = document.querySelector(".navbar");

  toggler.addEventListener("click", function () {
    navbar.classList.toggle("navbarOpen");
  });
});

