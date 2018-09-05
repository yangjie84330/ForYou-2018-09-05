$(function() {

$('.page-header').each(function() {
	var $window = $(window),
		$point = $("#jsPoint"),
		$header = $(this),
	jsPoint = $point.offset().top - 91;

	$window.on('scroll', function() {
		$point = $("#jsPoint");
		jsPoint = $point.offset().top - 91;
		if ($window.scrollTop() > jsPoint) {
			$header.addClass('js-head');
		} else {
			$header.removeClass('js-head');
		}
});

$window.trigger('scroll');
});
});