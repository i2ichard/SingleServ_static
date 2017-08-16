$(document).ready(function () {
  console.log('\'Allo \'Allo!');
  (function ($) {

    $.fn.searchBox = function (ev) {

      var $searchEl = $('.search-elem');
      var $placeHolder = $('.placeholder');
      var $sField = $('#search-field');

      if (ev === 'open') {
        $searchEl.addClass('search-open'), $searchEl.addClass('search-open');
      };

      if (ev === 'close') {
        $searchEl.removeClass('search-open'), $placeHolder.removeClass('move-up'), $searchEl.removeClass('search-open'), $sField.val('');
      };

      var moveText = function () {
        $placeHolder.addClass('move-up');
      };

      $sField.focus(moveText);
      $placeHolder.on('click', moveText);

      $('.submit').prop('disabled', true);
      $('#search-field').keyup(function () {
        if ($(this).val() != '') {
          $('.submit').prop('disabled', false);
        }
      });
    };
  })(jQuery);

  $.fn.donateBox = function (trig) {
    var $donateEl = $('.donate-elem');

    if (trig === 'open') {
      $donateEl.addClass('search-open');
    };

    if (trig === 'close') {
      $donateEl.removeClass('search-open');
    };
  };

  $('.search-button').on('click', function (e) {
    $(this).searchBox('open');
    e.preventDefault();
  });

  $('.close').on('click', function () {
    $(this).searchBox('close');
  });

  $('.cta_wrapper').on('click', function (t) {
    console.log('clicked');
    $(this).donateBox('open');
    t.preventDefault();
  });

  $('.close').on('click', function () {
    $(this).donateBox('close');
  });

  // on hover show cart preview
  $('.cart_icon').hover(function () {
    /* on hover over*/
    $('.cart_hover_wrapper').addClass('show_on_hover');

    var cartIsHovered = $('.cart_hover_wrapper').is(':hover');
    var iconIsHovered = $('.cart_icon').is(':hover');

    setTimeout(function () {
      if (cartIsHovered == true) {
        console.log('no more hover here ' + iconIsHovered);
      }
    }, 2000);
  });

  // $('.artist_block').hover(function() {
  //   $(this).next('.artist_name > .date').css("opacity", "1");
  // })

  // function () {    /* on hover out*/
  //   var cartIsHovered = $('.cart_hover_wrapper').is(':hover');
  //   var iconIsHovered = $('.cart_icon').is(':hover');
  //
  //   if (!cartIsHovered && !iconIsHovered) {
  //     setTimeout(function() {
  //       $(".cart_hover_wrapper").removeClass("show_on_hover")
  //     }, 2000);
  //   }
  // }

});
//# sourceMappingURL=main.js.map
