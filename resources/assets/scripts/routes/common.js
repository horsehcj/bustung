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
      e.preventDefault();

      if (!$(this).hasClass('.menu-item-language')) {
        let anchor = $.attr($(this).find('a'), 'href')
        $('html, body').animate({
          scrollTop: $(anchor).offset().top,
        }, 500);
      }
    })
  },
};
