/*
 * Smooth scroll v1.2 | @agareginyan | GPL v3 Licensed
 *
 * Copyright (c) 2021, Space X-Chimp ( https://www.spacexchimp.com ).
 * All Rights Reserved.
 */


jQuery(document).ready(function($) {

    $('.scroll-to-top').hide();

    $(window).scroll(function() {
        if ($(this).scrollTop() < 200) {
            $('.scroll-to-top').fadeOut();
        } else {
            $('.scroll-to-top').fadeIn();
        }
    });

    $('.scroll-to-top').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 'fast');
        return false;
    });

});