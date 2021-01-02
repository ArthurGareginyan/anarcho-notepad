<?php
/**
 * Theme Customizer support
 *
 * @package     Anarcho Notepad
 * @since       2.48
 * @author      Space X-Chimp
 * @copyright   Copyright (c) 2013-2021, Space X-Chimp
 * @link        https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license     http://www.gnu.org/licenses/gpl-3.0.html
 */


/* Implement Theme Customizer additions and adjustments */
function spacexchimp_theme_customize_register( $wp_customize ) {

    /* Class Anarcho_Customize_Textarea_Control */
    class Anarcho_Customize_Textarea_Control extends WP_Customize_Control {

        public $type = 'textarea';
        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
            <?php
        }
    }

    $wp_customize->remove_section( 'colors' );

    // META SECTION
    $wp_customize->add_section( 'meta_section', array(
        'title'             => __( 'Meta', 'anarcho-notepad' ),
        'priority'          => 1,
    ));

        // Text for the About widget
        $wp_customize->add_setting( 'about_box', array(
                'default'           => __( 'Paste here small text about you and/or about your site.', 'anarcho-notepad' ),
                'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control( new Anarcho_Customize_Textarea_Control( $wp_customize, 'about_box', array(
                'priority'          => 1,
                'label'             => __( 'About widget - "What is this place?"', 'anarcho-notepad' ),
                'section'           => 'meta_section',
                'settings'          => 'about_box',
        )));

        // Copyright after post
        $wp_customize->add_setting( 'copyright_post', array(
                'default'           => __( 'Copyright 2021. All rights reserved.', 'anarcho-notepad' ),
                'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control( new Anarcho_Customize_Textarea_Control( $wp_customize, 'copyright_post', array(
                'priority'          => 2,
                'label'             => __( 'Copyright after post', 'anarcho-notepad' ),
                'section'           => 'meta_section',
                'settings'          => 'copyright_post',
        )));

        // Copyright in footer
        $wp_customize->add_setting( 'site-info', array(
                'default'           => __( 'Copyright 2021. All rights reserved.', 'anarcho-notepad' ),
                'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control( new Anarcho_Customize_Textarea_Control( $wp_customize, 'site-info', array(
                'priority'          => 3,
                'label'             => __( 'Copyright in footer', 'anarcho-notepad' ),
                'section'           => 'meta_section',
                'settings'          => 'site-info',
        )));


    // STUFF SECTION
    $wp_customize->add_section( 'stuff_section', array(
        'title'             => __( 'Stuff', 'anarcho-notepad' ),
        'priority'          => 2,
    ));

        // Disable "Paper Search"
        $wp_customize->add_setting('disable_paper_search', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'disable_paper_search', array(
                'priority'          => 1,
                'type'              => 'checkbox',
                'label'             => __( 'Disable "Paper Search"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Disable Red Date Ribbons
        $wp_customize->add_setting('disable_ribbons', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'disable_ribbons', array(
                'priority'          => 6,
                'type'              => 'checkbox',
                'label'             => __( 'Disable "Red Date Ribbons"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Enable Year in Red Date Ribbons
        $wp_customize->add_setting('enable_year_ribbons', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'enable_year_ribbons', array(
                'priority'          => 5,
                'type'              => 'checkbox',
                'label'             => __( 'Enable Year in "Red Date Ribbons"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Disable RSS feed ribbon tag
        $wp_customize->add_setting('disable_rss_icon', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'disable_rss_icon', array(
                'priority'          => 13,
                'type'              => 'checkbox',
                'label'             => __( 'Disable RSS feed ribbon tag', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Disable widget "What is this place?"
        $wp_customize->add_setting('disable_about_box', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'disable_about_box', array(
                'priority'          => 3,
                'type'              => 'checkbox',
                'label'             => __( 'Disable widget "What is this place?"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Disable widget "Friends & Links"
        $wp_customize->add_setting('disable_links_box', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'disable_links_box', array(
                'priority'          => 4,
                'type'              => 'checkbox',
                'label'             => __( 'Disable widget "Friends & Links"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Disable Recent Posts Sticker
        $wp_customize->add_setting('disable_recent_sticker', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'disable_recent_sticker', array(
                'priority'          => 7,
                'type'              => 'checkbox',
                'label'             => __( 'Disable "Recent Posts Sticker"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Disable "About the Author"
        $wp_customize->add_setting('disable_about_bio', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'disable_about_bio', array(
                'priority'          => 10,
                'type'              => 'checkbox',
                'label'             => __( 'Disable block "About the Author"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Enable "Breadcrumbs"
        $wp_customize->add_setting('enable_breadcrumbs', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'enable_breadcrumbs', array(
                'priority'          => 8,
                'type'              => 'checkbox',
                'label'             => __( 'Enable "Breadcrumbs"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Enable "Page Navigation"
        $wp_customize->add_setting('enable_page-nav', array(
                'default'           => '1',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'enable_page-nav', array(
                'priority'          => 9,
                'type'              => 'checkbox',
                'label'             => __( 'Enable "Page Navigation"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Enable Title Animation
        $wp_customize->add_setting('enable_title_animation', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'enable_title_animation', array(
                'priority'          => 1,
                'type'              => 'checkbox',
                'label'             => __( 'Enable "Title animation"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Disable button "Scroll To Top"
        $wp_customize->add_setting('disable_scroll_to_top', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'disable_scroll_to_top', array(
                'priority'          => 11,
                'type'              => 'checkbox',
                'label'             => __( 'Disable button "Scroll To Top"', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Show info line in footer
        $wp_customize->add_setting('show_info_line', array(
                'default'           => '0',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'show_info_line', array(
                'priority'          => 12,
                'type'              => 'checkbox',
                'label'             => __( 'Show info line in footer', 'anarcho-notepad' ),
                'section'           => 'stuff_section',
        ));

        // Enable number of recent post
        $num_recent_post_array = spacexchimp_theme_customizer_arrays();
        $wp_customize->add_setting( 'num_recent_post', array(
                'default'           => '6',
                'control'           => 'select',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'num_recent_post', array(
                'label'             => __( 'Numbers of recent posts in sidebar', 'anarcho-notepad' ),
                'priority'          => 14,
                'section'           => 'stuff_section',
                'settings'          => 'num_recent_post',
                'type'              => 'select',
                'choices'           => $num_recent_post_array['num_recent_post'],
        ));

    // SCRIPTS SECTION
    $wp_customize->add_section( 'scripts_section', array(
        'title'             => __( 'Scripts', 'anarcho-notepad' ),
        'description'       => __( 'Put here your scripts', 'anarcho-notepad' ),
        'priority'          => 3,
    ));

        // Scripts before posts
        $wp_customize->add_setting( 'scripts_before_posts', array(
                'default'           => '',
                'sanitize_callback' => 'spacexchimp_theme_sanitize_scripts',
        ));
        $wp_customize->add_control( new Anarcho_Customize_Textarea_Control( $wp_customize, 'scripts_before_posts', array(
                'priority'          => 2,
                'label'             => __( 'Scripts before posts', 'anarcho-notepad' ),
                'section'           => 'scripts_section',
                'settings'          => 'scripts_before_posts',
        )));

        // Scripts at the beginning of the posts
        $wp_customize->add_setting( 'scripts_beginning_posts', array(
                'default'           => '',
                'sanitize_callback' => 'spacexchimp_theme_sanitize_scripts',
        ));
        $wp_customize->add_control( new Anarcho_Customize_Textarea_Control( $wp_customize, 'scripts_beginning_posts', array(
                'priority'          => 3,
                'label'             => __( 'Scripts at the beginning of the posts', 'anarcho-notepad' ),
                'section'           => 'scripts_section',
                'settings'          => 'scripts_beginning_posts',
        )));

        // Scripts at the end of the posts
        $wp_customize->add_setting( 'scripts_end_posts', array(
                'default'           => '',
                'sanitize_callback' => 'spacexchimp_theme_sanitize_scripts',
        ));
        $wp_customize->add_control( new Anarcho_Customize_Textarea_Control( $wp_customize, 'scripts_end_posts', array(
                'priority'          => 4,
                'label'             => __( 'Scripts at the end of the posts', 'anarcho-notepad' ),
                'section'           => 'scripts_section',
                'settings'          => 'scripts_end_posts',
        )));

        // Scripts after posts
        $wp_customize->add_setting( 'scripts_after_posts', array(
                'default'           => '',
                'sanitize_callback' => 'spacexchimp_theme_sanitize_scripts',
        ));
        $wp_customize->add_control( new Anarcho_Customize_Textarea_Control( $wp_customize, 'scripts_after_posts', array(
                'priority'          => 5,
                'label'             => __( 'Scripts after posts', 'anarcho-notepad' ),
                'section'           => 'scripts_section',
                'settings'          => 'scripts_after_posts',
        )));

    // POST SECTION
    $wp_customize->add_section( 'post_section', array(
        'title'             => __( 'Post', 'anarcho-notepad' ),
        'priority'          => 10,
    ));

        // Posts font (Google Fonts)
        $post_font_array = spacexchimp_theme_customizer_arrays();
        $wp_customize->add_setting( 'post_font', array(
                'default'           => '',
                'control'           => 'select',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'post_font', array(
                'label'             => __( 'Font of posts (Google Fonts)', 'anarcho-notepad' ),
                'priority'          => 1,
                'section'           => 'post_section',
                'settings'          => 'post_font',
                'type'              => 'select',
                'choices'           => $post_font_array['google_fonts'],
        ));

        // Posts font size
        $post_font_size_array = spacexchimp_theme_customizer_arrays();
        $wp_customize->add_setting( 'post_font_size', array(
                'default'           => '100%',
                'control'           => 'select',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'post_font_size', array(
                'label'             => __( 'Font size of posts', 'anarcho-notepad' ),
                'priority'          => 1,
                'section'           => 'post_section',
                'settings'          => 'post_font_size',
                'type'              => 'select',
                'choices'           => $post_font_size_array['post_font_size'],
        ));

    // HEADER SECTION


    // TITLE SECTION

        // Title font (Google Fonts)
        $title_font_array = spacexchimp_theme_customizer_arrays();
        $wp_customize->add_setting( 'titlefontstyle_setting', array(
                'default'           => 'Permanent+Marker',
                'control'           => 'select',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'titlefontstyle_control', array(
                'label'             => __( 'Site Title font (Google Fonts)', 'anarcho-notepad' ),
                'priority'          => 10,
                'section'           => 'title_tagline',
                'settings'          => 'titlefontstyle_setting',
                'type'              => 'select',
                'choices'           => $title_font_array['google_fonts'],
        ));

        // Tagline font (Google Fonts)
        $tagline_font_array = spacexchimp_theme_customizer_arrays();
        $wp_customize->add_setting( 'taglinefontstyle_setting', array(
                'default'           => 'Permanent+Marker',
                'control'           => 'select',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'taglinefontstyle_control', array(
                'label'             => __( 'Site Tagline font (Google Fonts)', 'anarcho-notepad' ),
                'priority'          => 11,
                'section'           => 'title_tagline',
                'settings'          => 'taglinefontstyle_setting',
                'type'              => 'select',
                'choices'           => $tagline_font_array['google_fonts'],
        ));

        // Title color
        $wp_customize->add_setting( 'title_color', array(
                'default'           => '#e5e5e5',
                'transport'         => 'postMessage',
                'type'              => 'option',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_color', array(
                'label'             => __( 'Site Title color', 'anarcho-notepad' ),
                'section'           => 'title_tagline',
                'settings'          => 'title_color',
                'priority'          => 12,
        )));

        // Tagline color
        $wp_customize->add_setting( 'tagline_color', array(
                'default'           => '#9b9b9b',
                'transport'         => 'postMessage',
                'type'              => 'option',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tagline_color', array(
                'label'             => __( 'Site Tagline color', 'anarcho-notepad' ),
                'section'           => 'title_tagline',
                'settings'          => 'tagline_color',
                'priority'          => 13,
        )));

        // Title position
        $wp_customize->add_setting( 'title_position', array(
                'default'           => 'left',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'title_position', array(
                'label'             => __( 'Site Title position', 'anarcho-notepad' ),
                'section'           => 'title_tagline',
                'settings'          => 'title_position',
                'priority'          => 14,
                'type'              => 'radio',
                'choices'           => array(
                                              'left'      => __( 'Left', 'anarcho-notepad' ),
                                              'center'    => __( 'Center', 'anarcho-notepad' )
                                            ),
        ));

    // BACKGROUND SECTION
    $wp_customize->get_section( 'background_image' );

        // Background color
        $wp_customize->add_setting( 'background_color' , array(
                'default'           => '000000',
                'transport'         => 'postMessage',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
                'label'             => __( 'Background Color', 'anarcho-notepad' ),
                'section'           => 'background_image',
        )));

        // Add the option to use the CSS3 property Background-size
        $wp_customize->add_setting( 'backgroundsize_setting', array(
                'default'           => 'auto',
                'control'           => 'select',
                'sanitize_callback' => 'esc_attr',
        ));
        $wp_customize->add_control( 'backgroundsize_control', array(
                'label'             => __( 'Background Size', 'anarcho-notepad' ),
                'section'           => 'background_image',
                'settings'          => 'backgroundsize_setting',
                'priority'          => 10,
                'type'              => 'radio',
                'choices'           => array(
                                              'auto'      => __( 'Auto (Default)', 'anarcho-notepad' ),
                                              'contain'   => __( 'Contain', 'anarcho-notepad' ),
                                              'cover'     => __( 'Cover', 'anarcho-notepad' ),
                                            ),
        ));

}
add_action( 'customize_register', 'spacexchimp_theme_customize_register' );

/* Inject the Customizer Choices into the Theme */
function spacexchimp_theme_inline_css() {

    if ( get_theme_mod('enable_title_animation') == '1' ) {
        echo '
            <script>
                var tit=document.title,c=0;
                function writetitle() {
                        document.title=tit.substring(0,c);c==tit.length?(c=0,setTimeout("writetitle()",3E3)):(c++,setTimeout("writetitle()",200))
                }
                writetitle();
            </script>
            ' . "\n";
    }

    /* Load the user selected fonts from the Google Fonts online library */
    $fonts_array = array();
    $fonts_array[] = 'Permanent+Marker';
    $fonts_array[] = get_theme_mod( 'titlefontstyle_setting', 'Permanent+Marker' );
    $fonts_array[] = get_theme_mod( 'taglinefontstyle_setting', 'Permanent+Marker' );
    $fonts_array[] = get_theme_mod( 'post_font', '' );
    foreach ( $fonts_array as $key => $value ) {
        echo "<link href='//fonts.googleapis.com/css?family=" . $value . "' rel='stylesheet' type='text/css'>"  . "\n";
    }

    ?>
        <style type="text/css" media="screen">
    <?php

    /* Background-size */
    $background_size = get_theme_mod( 'backgroundsize_setting' );
    ?>
        body.custom-background {
            -webkit-background-size: <?php echo $background_size; ?>;
            -moz-background-size: <?php echo $background_size; ?>;
            -o-background-size: <?php echo $background_size; ?>;
            background-size: <?php echo $background_size; ?>;
        }
    <?php

    /* Has the text been hidden? */
    if ( ! display_header_text() ) {
    ?>
        .site-title,
        .site-description {
            position: absolute;
            clip: rect(1px 1px 1px 1px); /* IE7 */
            clip: rect(1px, 1px, 1px, 1px);
        }
    <?php
    }

    /* Title & Description */
    $title_font = get_theme_mod( 'titlefontstyle_setting', 'Permanent+Marker' );
    $title_font = preg_replace('/[^a-zA-Z0-9]+/', ' ', $title_font);
    $title_color = get_option('title_color');
    ?>
        .site-title {
            font-family: <?php echo $title_font; ?>;
            color: <?php echo $title_color; ?>;
        }
    <?php
    $tagline_font = get_theme_mod( 'taglinefontstyle_setting', 'Permanent+Marker' );
    $tagline_font = preg_replace('/[^a-zA-Z0-9]+/', ' ', $tagline_font);
    $tagline_color = get_option( 'tagline_color', '#9b9b9b' );
    ?>
        .site-description {
            font-family: <?php echo $tagline_font; ?>;
            color: <?php echo $tagline_color; ?>;
        }
    <?php

    /* Title Position. */
    if ( get_theme_mod('title_position') == 'center' ) {
    ?>
        #title { margin-left: 20%; }
    <?php
    }

    /* Post */
    $post_font = get_theme_mod( 'post_font', 'Forum' );
    $post_font = preg_replace('/[^a-zA-Z0-9]+/', ' ', $post_font);
    $post_font_size = get_theme_mod( 'post_font_size', '' );
    ?>
        #content .col01 .post-inner {
            font-family: <?php echo $post_font; ?>;
            font-size: <?php echo $post_font_size; ?>;
        }
    <?php

    /* Disable Paper Search */
    if ( get_theme_mod('disable_paper_search') == '1' ) {
    $outer_back = get_template_directory_uri() . '/images/outer-back.png';
    ?>
        #title { height: 80%; }
        .logo { margin-top: 4%; }
        .site-title { margin-top: 4%; }
        .site-header {
            background: url( <?php echo $outer_back ?> ) no-repeat top center;
            margin-top: -2.8%; }
        .top-search-form {
            position: absolute;
            clip: rect(1px 1px 1px 1px); /* IE7 */
            clip: rect(1px, 1px, 1px, 1px); }
    <?php
    }
    if ( get_theme_mod('disable_paper_search') !== '1' ) {
    $outer_back_search = get_template_directory_uri() . '/images/outer-back-search.png';
    ?>
        .site-header {
            background: url( <?php echo $outer_back_search ?> ) no-repeat top center;
        }
    <?php
    }

    ?>
        </style>
    <?php

}
add_action( 'wp_head', 'spacexchimp_theme_inline_css' );

function spacexchimp_theme_customizer_live_preview() {
    wp_enqueue_script(
        'anarcho-themecustomizer',
        get_template_directory_uri().'/js/theme-customizer.js',
        array( 'jquery','customize-preview' ),
        '',
        true
    );
}
add_action( 'customize_preview_init', 'spacexchimp_theme_customizer_live_preview' );
