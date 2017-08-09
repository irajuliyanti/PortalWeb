$(function() {
	$('#nav a[href~="' + location.href + '"]').parents('li').addClass('active');
});