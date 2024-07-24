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
    autoplay: true,
    autoplaySpeed: 1500,
    speed: 1500,
    centerMode: false,
    dots: true,

  });

  // $('.gridWrap').slick({
  //   infinite: false,
  //   arrows: false,
  //   autoplay: false,
  //   autoplaySpeed: 1500,
  //   speed: 1500,
  //   centerMode: false,
  //   dots: true,
  //   responsive: [
  //     {
  //       breakpoint: 5000,
  //       settings: "unslick",
  //     },
  //     {
  //       breakpoint: 1200,
  //       settings: {
          
  //         slidesToShow: 2,
  //         slidesToScroll: 1,
  //       },
  //     },
  //     {
  //       breakpoint: 780,
  //       settings: {
          
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //       },
  //     },
  //   ]
  // });
  $(".contentDetails").mCustomScrollbar({
    theme: "dark",
  });
});
document.addEventListener("DOMContentLoaded", function () {
  var toggler = document.querySelector(".navbar-toggler");
  var navbar = document.querySelector(".navbar");

  toggler.addEventListener("click", function () {
    navbar.classList.toggle("navbarOpen");
  });
});

$(document).on(
  'change',
  '.file-border', 
  function(){
    
  var filename = this.value.split('\\').pop();
console.log(filename);
console.log(this)
  $(this).closest('#upload-btn').html(filename);
});

