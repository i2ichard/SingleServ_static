$(document).ready(function(){console.log("'Allo 'Allo!"),function(e){e.fn.searchBox=function(o){var c=e(".search-elem"),n=e(".placeholder"),s=e("#search-field");"open"===o&&(c.addClass("search-open"),c.addClass("search-open")),"close"===o&&(c.removeClass("search-open"),n.removeClass("move-up"),c.removeClass("search-open"),s.val(""));var a=function(){n.addClass("move-up")};s.focus(a),n.on("click",a),e(".submit").prop("disabled",!0),e("#search-field").keyup(function(){""!=e(this).val()&&e(".submit").prop("disabled",!1)})}}(jQuery),$.fn.donateBox=function(e){var o=$(".donate-elem");"open"===e&&o.addClass("search-open"),"close"===e&&o.removeClass("search-open")},$(".search-button").on("click",function(e){$(this).searchBox("open"),e.preventDefault()}),$(".close").on("click",function(){$(this).searchBox("close")}),$(".cta_wrapper").on("click",function(e){console.log("clicked"),$(this).donateBox("open"),e.preventDefault()}),$(".close").on("click",function(){$(this).donateBox("close")})});