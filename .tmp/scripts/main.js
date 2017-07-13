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

  // Donate

  // (function ($) {
  // $.fn.donateBox = function(ev) {
  //
  // var $donateEl = $('.donate-elem');
  //
  // if ( ev === 'open') {
  //   $searchEl.addClass('search-open')
  // };
  //
  // if ( ev === 'close') {
  //   $searchEl.removeClass('search-open')
  // };
  //
  // }(jQuery));
  //
  // $('.cta_wrapper').on('click', function(e){
  //   console.log("clicked");
  // $(this).donateBox('open');
  // e.preventDefault();
  // });
  //
  // $('.close').on('click', function(){
  // $(this).donateBox('close');
  // });
});
//# sourceMappingURL=main.js.map
