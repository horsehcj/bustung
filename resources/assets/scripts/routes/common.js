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
    })
  },
};
