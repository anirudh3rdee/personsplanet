$(document).ready(function() {
  $('.homeSlider').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    lazyLoad: 'ondemand', controls: true,
  });
});