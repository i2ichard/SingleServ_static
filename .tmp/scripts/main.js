$(document).ready(function () {
	console.log('\'Allo \'Allo!');

	(function ($) {

		$.fn.searchBox = function (ev) {

			var $searchEl = $('.search-elem');
			var $placeHolder = $('.placeholder');
			var $sField = $('#search-field');

			if (ev === "open") {
				$searchEl.addClass('search-open');
			};

			if (ev === 'close') {
				$searchEl.removeClass('search-open'), $placeHolder.removeClass('move-up'), $sField.val('');
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

	$('.search-btn').on('click', function (e) {
		$(this).searchBox('open');
		e.preventDefault();
	});

	$('.close').on('click', function () {
		$(this).searchBox('close');
	});
});
//# sourceMappingURL=main.js.map
