import 'slick-carousel';
import Swiper from 'swiper/bundle';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $('.index-hero-slider-container').slick({
      infinite: true,
      dots: true,
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
    })

    const servicesSwiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'custom',
        renderCustom: function (swiper, current, total) {
          let names = [];
          let slides = document.getElementsByClassName("swiper-slide");
          for (let i = 0; i < slides.length; i++) {
            names.push(slides[i].getAttribute('data-paginationname'));
          }
  
          let text = "<div class='slider-pagination'>";
          for (let i = 1; i <= total; i++) {
            if (current == i) {
              text += "<span data-slide='" + i + "' style='border-color: #6250d1; color: #6250d1;'>" + names[i] + "</span>";
            } else {
              text += "<span data-slide='" + i + "'>" + names[i] + "</span>";
            }
          }
          text += "</div>";
          return text;
        },
      },
    });

    $('body').on('click', '.slider-pagination span', function() {
      console.log("click");
      servicesSwiper.slideTo($(this).data('slide'), 500, false);
    })
  },
};
