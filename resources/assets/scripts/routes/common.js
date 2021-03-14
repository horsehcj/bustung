export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    function updateHeaderState() {
      if ( $(window).scrollTop() > 100) {
        $('body').addClass('scrolled')
      } else {
        $('body').removeClass('scrolled')
      }
    }

    updateHeaderState();
    $(window).on('scroll', function() {
      updateHeaderState();
    });

    $('.menu-item').on('click', function(e) {
      if (!$(this).hasClass('.menu-item-language')) {
        e.preventDefault();

        let anchor = $(this).find('a').attr('href')
        $('html, body').animate({
          scrollTop: $(anchor).offset().top - 100,
        }, 500);
      }
    })
  },
};
