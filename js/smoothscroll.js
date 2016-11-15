/*
 Smooth scroll v1.1 | @agareginyan | GPL v3 Licensed
*/


jQuery(document).ready(function($) {

    $('#back-top').hide();

    $(window).scroll(function() {
        if ($(this).scrollTop() < 200) {
			$('#back-top') .fadeOut();
        } else {
			$('#back-top') .fadeIn();
        }
    });

	$('#back-top').on('click', function() {
		$('html, body').animate({scrollTop:0}, 'fast');
		return false;
    });

});
