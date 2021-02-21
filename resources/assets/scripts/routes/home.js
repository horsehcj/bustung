import 'slick-carousel';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $('.index-hero-slider-container').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    })
  },
};
