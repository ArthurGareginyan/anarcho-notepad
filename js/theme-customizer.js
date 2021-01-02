/*
 * Theme Customizer live preview v1.2 | @agareginyan | GPL v3 Licensed
 *
 * Copyright (c) 2021, Space X-Chimp ( https://www.spacexchimp.com ).
 * All Rights Reserved.
 *
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */

(function($) {

    // Title & Description

    // Update the site title in real time...
    wp.customize('blogname', function(value) {
        value.bind(function(newval) {
            $('.site-title').html(newval);
        });
    });

    // Update site Title color in real time...
    wp.customize('title_color', function(value) {
        value.bind(function(newval) {
            $('.site-title').css('color', newval);
        });
    });


    // Description

    // Update the site description in real time...
    wp.customize('blogdescription', function(value) {
        value.bind(function(newval) {
            $('.site-description').html(newval);
        });
    });

    // Update site Description color in real time...
    wp.customize('tagline_color', function(value) {
        value.bind(function(newval) {
            $('.site-description').css('color', newval);
        });
    });


    // Posts

    // Update the font of posts in real time...
    wp.customize('post_font', function(value) {
        value.bind(function(newval) {
            $('#content .col01 .post-inner').html(newval);
        });
    });

    // Update the font size of posts in real time...
    wp.customize('post_font_size', function(value) {
        value.bind(function(newval) {
            $('#content .col01 .post-inner').html(newval);
        });
    });


    // Background

    // Update site Background color...
    wp.customize('background_color', function(value) {
        value.bind(function(newval) {
            $('body').css('background-color', newval);
        });
    });

})(jQuery);