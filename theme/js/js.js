(function ($) {

  if (typeof Drupal != 'undefined') {
    Drupal.behaviors.projectName = {
      attach: function (context, settings) {
        init();
      },

      completedCallback: function () {
        // Do nothing. But it's here in case other modules/themes want to override it.
      }
    }
  }

  $(function () {
    if (typeof Drupal == 'undefined') {
      init();
    }

    $(window).load(function() {

    });
  });

  function init() {
    initFlexslider();
    initMobileNav();
    initColum();
    initSelect();

  }

  function initSelect() {
    $(document).ready(function () {
      $('select').select2();
    });
  }

  function initColum() {
    $('.left-client-list-wrapper ul').columnize({width:380, columns :2});
  }

  function initFlexslider() {
    $(window).load(function () {
      $('.flexslider').flexslider({
        animation: "slade",
        animationLoop: false,
        slideshow: true,
        slideshowSpeed: 6000,
        pauseOnHover: true,
        controlNav: false,
        directionNav: true,
        prevText: "",
        nextText: ""
      });
    });
  }

  function initMobileNav() {

    var $navWrapper = $('.nav');
    var $btn = $navWrapper.find('.btn-nav');

    $btn.on('click touch', checkNav);

    $('html').on('click touch', function (e) {
      if (!$(e.target).closest($navWrapper).length && $navWrapper.hasClass('nav-active')) {
        $navWrapper.removeClass('nav-active');
      }
    });

    function checkNav(e) {
      e.preventDefault();

      if ($navWrapper.hasClass('nav-active')) {
        $navWrapper.removeClass('nav-active');
      } else {
        $navWrapper.addClass('nav-active');
      }
    }
  }

})(jQuery);