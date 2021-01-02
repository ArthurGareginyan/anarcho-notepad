<?php
/**
 * Theme functions and definitions.
 *
 * @package     Anarcho Notepad
 * @since       2.48
 * @author      Space X-Chimp
 * @copyright   Copyright (c) 2013-2021, Space X-Chimp
 * @link        https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license     http://www.gnu.org/licenses/gpl-3.0.html
 *
 * ███████╗██████╗  █████╗  ██████╗███████╗    ██╗  ██╗      ██████╗██╗  ██╗██╗███╗   ███╗██████╗
 * ██╔════╝██╔══██╗██╔══██╗██╔════╝██╔════╝    ╚██╗██╔╝     ██╔════╝██║  ██║██║████╗ ████║██╔══██╗
 * ███████╗██████╔╝███████║██║     █████╗       ╚███╔╝█████╗██║     ███████║██║██╔████╔██║██████╔╝
 * ╚════██║██╔═══╝ ██╔══██║██║     ██╔══╝       ██╔██╗╚════╝██║     ██╔══██║██║██║╚██╔╝██║██╔═══╝
 * ███████║██║     ██║  ██║╚██████╗███████╗    ██╔╝ ██╗     ╚██████╗██║  ██║██║██║ ╚═╝ ██║██║
 * ╚══════╝╚═╝     ╚═╝  ╚═╝ ╚═════╝╚══════╝    ╚═╝  ╚═╝      ╚═════╝╚═╝  ╚═╝╚═╝╚═╝     ╚═╝╚═╝
 *
 */

/******************************************************************************
 *              PLEASE DON'T EDIT THIS FILE DIRECTLY                          *
 *                                                                            *
 *  To add custom functions, consider using a plugin from the same developer  *
 * "My Custom Functions" (https://wordpress.org/plugins/my-custom-functions/) *
 ******************************************************************************/


/**
 * Define global constants
 *
 * @since 2.34
 */
$theme_data = wp_get_theme();
function spacexchimp_theme_define_constants( $constant_name, $value ) {
    $constant_name = 'SPACEXCHIMP_T001_' . $constant_name;
    if ( !defined( $constant_name ) )
        define( $constant_name, $value );
}
spacexchimp_theme_define_constants( 'VERSION', $theme_data->get( 'Version' ) );

/* Ladies and Gentlemans, boys and girls let's start our engine */
function spacexchimp_theme_setup() {
    global $content_width;

    // Localization Init
    load_theme_textdomain( 'anarcho-notepad', get_template_directory() . '/languages' );

    // This feature enables Custom Backgrounds.
    add_theme_support( 'custom-background', array(
        'default-image' => get_template_directory_uri() . '/images/background.png'
    ));

    // This feature enables Custom Header.
    add_theme_support( 'custom-header', array(
        'flex-width'             => true,
        'width'                  => 500,
        'flex-height'            => true,
        'height'                 => 150,
        //'default-text-color'   => '#e5e5e5',
        'header-text'            => true,
        //'default-image'        => get_template_directory_uri() . '/images/logotype.png',
        'uploads'                => true,
    ));

    // This feature enables Featured Images (also known as post thumbnails).
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(540,230,!1);

    // This feature enables post and comment RSS feed links to <head>.
    add_theme_support('automatic-feed-links');

    // Add HTML5 elements
    add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', 'gallery', 'caption', ) );

    // Add Title-tag
    add_theme_support('title-tag');

    // This feature enables menu.
    register_nav_menus( array(
        'primary' => __( 'Primary', 'anarcho-notepad' )
    ));

    // This feature enables Link Manager in Admin page.
    add_filter( 'pre_option_link_manager_enabled', '__return_true' );
}
add_action( 'after_setup_theme', 'spacexchimp_theme_setup' );

/**
 * Upgrade DB settings
 *
 * @since 2.31
 */
function spacexchimp_theme_upgrade_settings() {

    // Read saved theme settings
    $settings_saved = get_option( 'theme_mods_anarcho-notepad' );

    // Return if the upgrade has already been made
    if ( isset($settings_saved['upgraded']) && $settings_saved['upgraded'] == 'yes' ) {
        return;
    }

    // Make array with default values
    $settings_default = array(
        'enable_year_ribbons'       => '',
        'disable_ribbons'           => '',
        'enable_title_animation'    => '',
        'disable_paper_search'      => '',
        'disable_about_box'         => '',
        'disable_links_box'         => '',
        'disable_stickers'          => '',
        'disable_recent_sticker'    => '',
        'enable_breadcrumbs'        => '',
        'enable_page-nav'           => '',
        'disable_about_bio'         => '',
        'disable_scroll_to_top'     => '',
        'show_info_line'            => '',
        'disable_rss_icon'          => '',
        'num_recent_post'           => '6',
        'upgraded'                  => 'yes'
    );

    if ( !empty( $settings_saved ) ) {

        // Merge array of saved settings with array of new default settings
        $settings = array_merge( $settings_default, $settings_saved );

    } else {
        $settings = $settings_default;
    }

    // Save new setting with default values
    update_option( 'theme_mods_anarcho-notepad', $settings );

}
spacexchimp_theme_upgrade_settings();

/**
 * Fire the wp_body_open action (triggered after the opening <body> tag).
 * Added for backwards compatibility to support WordPress versions prior to 5.2.0.
 */
if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

/* Add Theme Information Page */
require get_template_directory() . '/inc/theme_info.php';

/* Add help button to admin bar */
function spacexchimp_theme_add_help_button() {
    if ( current_user_can( 'edit_theme_options' ) ) {
        global $wp_admin_bar;
        $wp_admin_bar->add_menu( array(
            'parent' => 'top-secondary',     // Off on the right side
            'id'     => 'anarcho-help' ,
            'title'  =>  __( 'Help' , 'anarcho-notepad' ),
            'href'   => admin_url( 'themes.php?page=theme_options' ),
            'meta'   => array(
                            'title'  => __( 'Need help with Anarcho-Notepad? Click here!', 'anarcho-notepad' )
                        )
        ));
    }
}
add_action ( 'wp_before_admin_bar_render', 'spacexchimp_theme_add_help_button' );

/* Add the Upgrade notice */
require get_template_directory() . '/inc/upgrade_notice.php';

/* Enqueue scripts and styles on the admin pages */
function spacexchimp_theme_scripts_admin() {

    // Load additional stylesheet for admin screens
    wp_enqueue_style( 'anarcho-admin-css', get_template_directory_uri() . '/inc/admin.css', array(), SPACEXCHIMP_T001_VERSION, 'all' );

}
add_action( 'admin_enqueue_scripts', 'spacexchimp_theme_scripts_admin' );

/* Enqueue scripts and styles on the front end */
function spacexchimp_theme_scripts_frontend() {

    // Load JQuery library
    wp_enqueue_script( 'jquery' );

    // Load the Font-Awesome iconic font
    wp_enqueue_style( 'anarcho-font-awesome-css', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css', array(), SPACEXCHIMP_T001_VERSION, 'screen' );

    // Comments. Enable comment_reply
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );

    // Scroll to Top Button. Load the smoothscroll.js
    wp_enqueue_script( 'anarcho-smooth-scroll-js', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), SPACEXCHIMP_T001_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'spacexchimp_theme_scripts_frontend' );

/* Custom sanitizer function for the Scripts options */
function spacexchimp_theme_sanitize_scripts( $input ){
    global $allowedposttags;
    $tags = $allowedposttags;
    $atts_default = array(
        'accesskey'       => true,
        'autocapitalize'  => true,
        'class'           => true,
        'contenteditable' => true,
        'contextmenu'     => true,
        'dir'             => true,
        'draggable'       => true,
        'dropzone'        => true,
        'exportparts'     => true,
        'hidden'          => true,
        'id'              => true,
        'inputmode'       => true,
        'is'              => true,
        'itemid'          => true,
        'itemprop'        => true,
        'itemref'         => true,
        'itemscope'       => true,
        'itemtype'        => true,
        'lang'            => true,
        'part'            => true,
        'slot'            => true,
        'spellcheck'      => true,
        'style'           => true,
        'tabindex'        => true,
        'title'           => true,
        'translate'       => true,
    );
	$tags['style']    = array_merge(
        array(
            'media'          => true,
    		'type'           => true,
        ),
        $atts_default
    );
    $tags['script']   = array_merge(
        array(
    		'async'          => true,
    		'crossorigin'    => true,
    		'defer'          => true,
    		'integrity'      => true,
            'nomodule'       => true,
            'nonce'          => true,
            'referrerpolicy' => true,
            'src'            => true,
            'type'           => true,
        ),
        $atts_default
    );
    $tags['noscript'] = array_merge(
        array(
            'class'          => true,
    		'href'           => true,
    		'rel'            => true,
    		'title'          => true,
        ),
        $atts_default
    );
    return wp_kses( $input, $tags );
}

/* Add Theme Customizer functionality */
require get_template_directory() . '/inc/customizer-arrays.php';
require get_template_directory() . '/inc/customizer.php';

/* This feature enables widgets area in the sidebar */
function spacexchimp_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __( 'Sidebar Area 1', 'anarcho-notepad' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown below "Pages".', 'anarcho-notepad' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Sidebar Area 2', 'anarcho-notepad' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Widgets in this area will be shown below "What is this place?".', 'anarcho-notepad' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Sidebar Area 3', 'anarcho-notepad' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Widgets in this area will be shown below "Friends & Links".', 'anarcho-notepad' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Sidebar Area 4', 'anarcho-notepad' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Widgets in this area will be shown below "Recent Posts".', 'anarcho-notepad' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action( 'widgets_init', 'spacexchimp_theme_widgets_init' );

/* This feature enables widgets area in the footer */
function spacexchimp_theme_widgets_footer_init() {
    register_sidebar(array(
        'name'          => __( 'Footer Area 1', 'anarcho-notepad' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown left.', 'anarcho-notepad' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Footer Area 2', 'anarcho-notepad' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown center.', 'anarcho-notepad' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Footer Area 3', 'anarcho-notepad' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown right.', 'anarcho-notepad' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action( 'widgets_init', 'spacexchimp_theme_widgets_footer_init' );

/* Adds a custom default avatar */
function spacexchimp_theme_avatar( $avatar_defaults ) {
    $myavatar = get_stylesheet_directory_uri() . '/images/anarchy-symbol.png';
    $avatar_defaults[$myavatar] = 'Anarcho symbol';
    return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'spacexchimp_theme_avatar' );

/* Display block "About the Author" */
function spacexchimp_theme_author_bio() {
    if ( get_theme_mod('disable_about_bio') !== '1' ) {
        if ( ( get_the_author_meta( 'description' ) != '' ) ) {
            echo esc_html( get_template_part( 'author-bio' ) );
        }
    }
}

/* Date Tag (Red ribbon) */
function spacexchimp_theme_date_tag() {
    if ( get_theme_mod('disable_ribbons') !== '1' ) {
        if ( get_theme_mod('enable_year_ribbons') !== '1' ) {
            if ( is_home() || is_category() || is_archive() || is_search() ) {
                printf( '<a href="%1$s">',
                            esc_url( get_permalink() )
                );
            }
            printf( '<div class="date-tab">
                        <span class="month">%1$s</span>
                        <span class="day">%2$s</span>
                     </div>',
                     esc_attr( get_the_date('F') ),
                     esc_attr( get_the_date('j') )
            );
            if ( is_home() || is_category() || is_archive() || is_search() ) {
                printf( '</a>' );
            }
        } else {
            if ( is_home() || is_category() || is_archive() || is_search() ) {
                printf( '<a href="%1$s">',
                            esc_url( get_permalink() )
                );
            }
            printf( '<div class="date-tab">
                        <span class="month">%1$s</span>
                        <span class="day">%2$s</span>
                     </div>',
                     esc_attr( get_the_date('F j') ),
                     esc_attr( get_the_date('Y') )
            );
            if ( is_home() || is_category() || is_archive() || is_search() ) {
                printf( '</a>' );
            }
        }
    }
}

/* Enable Breadcrumbs */
function spacexchimp_theme_breadcrumbs() {
    if ( get_theme_mod('enable_breadcrumbs') == '1' ) {
        $delimiter = '&raquo;';
        $before = '<span>';
        $after = '</span>';
        echo '<nav id="breadcrumbs">';
        global $post;
        $homeLink = esc_url( home_url() );
        echo '<a href="' . $homeLink . '" style="font-family: FontAwesome; font-size: 20px; vertical-align: bottom;">&#xf015;</a> ' . $delimiter . ' ';
        if ( is_category() ) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0) echo (get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ')) ;
            echo $before . __( 'Archive by category ', 'anarcho-notepad' ) . '"' . single_cat_title('', false) . '"' . $after;
        } elseif ( is_day() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . __( 'Archive by date ', 'anarcho-notepad' ) . '"' . get_the_time('d') . '"' . $after;
        } elseif ( is_month() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . __( 'Archive by month ', 'anarcho-notepad' ) . '"' . get_the_time('F') . '"' . $after;
        } elseif ( is_year() ) {
            echo $before . __( 'Archive by year ', 'anarcho-notepad' ) . '"' . get_the_time('Y') . '"' . $after;
        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                echo ' ' . get_category_parents($cat, TRUE, ' ' . $delimiter . ' ') . ' ';
                echo $before . __( 'You&apos;re currently reading ', 'anarcho-notepad' ) . '"' . get_the_title() . '"' .  $after;
            }
            /* } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;*/
        } elseif ( is_attachment() ) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id    = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';
            echo $before . __( 'You&apos;re currently viewing ', 'anarcho-notepad' ) . '"' . get_the_title() . '"' . $after;
        } elseif ( is_page() && !$post->post_parent ) {
            echo $before . __( 'You&apos;re currently reading ', 'anarcho-notepad' ) . '"' . get_the_title() . '"' . $after;
        } elseif ( is_page() && $post->post_parent ) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id    = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';
            echo $before . __( 'You&apos;re currently reading ', 'anarcho-notepad' ) . '"' . get_the_title() . '"' . $after;
        } elseif ( is_search() ) {
            echo $before . __( 'Search results for ', 'anarcho-notepad' ) . '"' . get_search_query() . '"' . $after;
        } elseif ( is_tag() ) {
            echo $before . __( 'Archive by tag ', 'anarcho-notepad' ) . '"' . single_tag_title('', false) . '"' . $after;
        } elseif ( is_author() ) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . __( 'Articles posted by ', 'anarcho-notepad' ) . '"' . $userdata->display_name . '"' . $after;
        } elseif ( is_404() ) {
            echo $before . __( 'You got it ', 'anarcho-notepad' ) . '"' . 'Error 404 not Found' . '"&nbsp;' . $after;
        }
        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
            echo ('Page') . ' ' . get_query_var('paged');
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
        }
        echo '</nav>';
    }
}

/*
 * Page Navigation
 * Display navigation to next/previous set of posts when applicable
 */
function spacexchimp_theme_page_nav() {
    if ( get_theme_mod('enable_page-nav') == '1' ) {
        global $wp_query, $wp_rewrite;
        $pages = '';
        $max = $wp_query->max_num_pages;
        if (!$current = get_query_var('paged')) $current = 1;
        $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
        $a['total'] = $max;
        $a['current'] = $current;
        $total = 0;
        $a['mid_size'] = 3;
        $a['end_size'] = 1;
        $a['prev_text'] = __( 'Previous page', 'anarcho-notepad' );
        $a['next_text'] = __( 'Next page', 'anarcho-notepad' );
        if ($max > 0) echo '<nav id="page-nav">';
        if ($total == 1 && $max > 0) $pages = '<span class="pages-nav">' . __( 'Page ', 'anarcho-notepad' ) . $current . __( ' of the ', 'anarcho-notepad' ) . $max . '</span>'."\r\n";
        echo $pages . paginate_links($a);
        if ($max > 0) echo '</nav><br>';
    } else {
        global $wp_query;

        // Don't print empty markup if there's only one page.
        if ( $wp_query->max_num_pages < 2 ) return;
        ?>
        <nav class="navigation paging-navigation" role="navigation">
            <h1 class="screen-reader-text">
                <?php _e( 'Posts navigation', 'anarcho-notepad' ); ?>
            </h1>
            <div class="nav-links">

                <?php if ( get_next_posts_link() ) : ?>
                    <div class="nav-previous">
                        <?php next_posts_link( '<i class="fa fa-arrow-left"></i> ' . __( 'Older posts', 'anarcho-notepad' ) ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( get_previous_posts_link() ) : ?>
                    <div class="nav-next">
                        <?php previous_posts_link( __( 'Newer posts', 'anarcho-notepad' ) . ' <i class="fa fa-arrow-right"></i>' ); ?>
                    </div>
                <?php endif; ?>

            </div>
        </nav>
        <?php
    }
}

/*
 * Post navigation
 * Display navigation to next/previous post when applicable
 */
function spacexchimp_theme_post_nav() {
    global $post;

    // Don't print empty markup if there's nowhere to navigate.
    $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous ) return;
    ?>
    <nav class="navigation post-navigation" role="navigation">
        <h2 class="screen-reader-text">
            <?php _e( 'Post navigation', 'anarcho-notepad' ); ?>
        </h2>
        <div class="nav-links">

            <?php previous_post_link( '%link', '<i class="fa fa-arrow-left"></i> %title' ); ?>
            <?php next_post_link( '%link', '%title <i class="fa fa-arrow-right"></i>' ); ?>

        </div>
    </nav>
    <?php
}

/*
 * Template for comments and pingbacks.
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function spacexchimp_theme_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
        // Display trackbacks differently than normal comments.
        ?>
        <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <p>
                <?php _e( 'Pingback:', 'anarcho-notepad' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'anarcho-notepad' ), '<span class="edit-link">', '</span>' ); ?>
            </p>
            <?php
                break;
                default :
                // Proceed with normal comments.
                global $post;
            ?>
            <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                <article id="comment-<?php comment_ID(); ?>" class="comment">
                    <header class="comment-meta comment-author vcard">
                        <?php
                            echo get_avatar( $comment, 44 );
                            printf(
                                '<cite>By <b class="fn">%1$s</b> %2$s</cite>',
                                get_comment_author_link(),
                                // If current post author is also comment author, make it known visually.
                                ( $comment->user_id === $post->post_author ) ? '<span>' . __( '(Post author) ', 'anarcho-notepad' ) . '</span>' : ''
                            );
                            printf(
                                '<b> on <a href="%1$s"><time datetime="%2$s">%3$s</time></a></b>',
                                esc_url( get_comment_link( $comment->comment_ID ) ),
                                get_comment_time( 'c' ),
                                sprintf( '%1$s', get_comment_date( 'j F, Y' ) )
                            );
                        ?>
            </header>

            <?php if ( '0' == $comment->comment_approved ) : ?>
                <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'anarcho-notepad' ); ?></p>
            <?php endif; ?>

            <section class="comment-content comment">
                <?php comment_text(); ?>
                <?php edit_comment_link( __( 'Edit', 'anarcho-notepad' ), '<p class="edit-link">', '</p>' ); ?>
            </section>

            <div class="reply">
                <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'anarcho-notepad' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
        </article>
        <?php
            break;
            endswitch; // end comment_type check
}

/*
 * Copyright
 */
function spacexchimp_theme_copyright() {

    $spacexchimp_theme_copy_website = __( 'Copyright 2021. All rights reserved.', 'anarcho-notepad' );
    echo wp_kses_post( get_theme_mod( 'site-info', $spacexchimp_theme_copy_website ) ) . "<br>";

    $spacexchimp_theme_copy_theme_uri = "https://www.spacexchimp.com/themes/anarcho-notepad.html";
    $spacexchimp_theme_copy_theme_name = "Anarcho Notepad";
    $spacexchimp_theme_copy_theme_link = '<a title="Theme page" target="_blank" href=' . $spacexchimp_theme_copy_theme_uri . '>' . $spacexchimp_theme_copy_theme_name . '</a>';

    $spacexchimp_theme_copy_author_uri = "https://www.spacexchimp.com/";
    $spacexchimp_theme_copy_author_name = "Space X-Chimp";
    $spacexchimp_theme_copy_author_link = '<a title="Theme author" target="_blank" href=' . $spacexchimp_theme_copy_author_uri . '>' . $spacexchimp_theme_copy_author_name . '</a>';

    echo '<div class="anarchocopy" style="margin-top:10px;">' . 'WordPress theme "' . $spacexchimp_theme_copy_theme_link . '" by ' . $spacexchimp_theme_copy_author_link . '.' . '</div>';

}
add_action( 'wp_footer','spacexchimp_theme_copyright', 999 );

/*
 * Queries
 * Display info about a database queries
 */
function spacexchimp_theme_mysql_queries() {
    if ( get_theme_mod('show_info_line') == '1' ) {
        echo "\n";
        echo get_num_queries();
        _e( ' queries in ', 'anarcho-notepad' );
        timer_stop(1);
        _e( ' seconds', 'anarcho-notepad' );
        echo ' / ';
        echo round(memory_get_usage()/1024/1024, 2);
        _e( ' mb', 'anarcho-notepad' );
        echo "\n";
    }
}
add_action( 'wp_footer','spacexchimp_theme_mysql_queries', 999 );

/*
 * Scroll to Top Button
 * Load smoothscroll.js and Enable Scroll to Top Button
 */
function spacexchimp_theme_scroll_to_top() {
    if ( get_theme_mod('disable_scroll_to_top') !== '1' ) {
        echo '
            <a class="scroll-to-top" href="#top">
                <i class="fa fa-arrow-up fa-lg"></i>
            </a>
        ';
    }
}
add_action( 'wp_footer','spacexchimp_theme_scroll_to_top', 999 );

/*
 * No Content
 * The Message if no content
 */
function spacexchimp_theme_not_found() {
    ?>
    <div class="no-results">
        <h1>
            <?php _e( 'Not Found', 'anarcho-notepad' ); ?>
        </h1>
        <p>
            <?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'anarcho-notepad' ); ?>
        </p>
    </div>
    <?php
}

/*
 * Entry Meta
 * Display Entry Meta
 */
function spacexchimp_theme_entry_meta() {
    ?>
    <div class="meta">
        <?php
            if ( is_page() ) {
                if ( the_category() != '' ) {
                    ?>
                    <i class="fa fa-folder-open"></i>
                    <?php
                    _e( 'Category: ', 'anarcho-notepad' );
                    the_category( ', ' );
                }
                edit_post_link( __( 'EDIT', 'anarcho-notepad' ), ' | <i class="fa fa-pencil"> ', '</i>' );
            } elseif ( is_single() ) {
                _e( 'Posted ', 'anarcho-notepad' );
                the_date( get_option( 'm.d.Y' ) );
                _e( ' by ', 'anarcho-notepad' );
                the_author();
                _e( ' in category "', 'anarcho-notepad' );
                the_category( '", "' );
                edit_post_link( __( 'EDIT', 'anarcho-notepad' ), '" | <i class="fa fa-pencil"> ', '</i>' );
                ?>
                <br>
                <?php
                spacexchimp_theme_author_bio();
            } elseif ( is_home() || is_category() || is_archive() || is_search() ) {
                ?>
                <i class="fa fa-folder-open"></i>
                <?php
                _e( 'Category: ', 'anarcho-notepad' );
                the_category( ', ' );
                ?>
                |
                <i class="fa fa-commenting"></i>
                <?php
                comments_popup_link( __( 'LEAVE A COMMENT', 'anarcho-notepad' ) );
                edit_post_link( __( 'EDIT', 'anarcho-notepad' ), ' | <i class="fa fa-pencil"> ', '</i>' );
            } else {
                ?>
                <i class="fa fa-folder-open"></i>
                <?php
                _e( 'Category: ', 'anarcho-notepad' );
                the_category( ', ' );
                ?>
                |
                <i class="fa fa-commenting"></i>
                <?php
                comments_popup_link( __( 'LEAVE A COMMENT', 'anarcho-notepad' ) );
                edit_post_link( __( 'EDIT', 'anarcho-notepad' ), ' | <i class="fa fa-pencil"> ', '</i>' );
            }
        ?>
        </div>
        <?php
}

/******************************************************************************
 *              PLEASE DON'T EDIT THIS FILE DIRECTLY                          *
 *                                                                            *
 *  To add custom functions, consider using a plugin from the same developer  *
 * "My Custom Functions" (https://wordpress.org/plugins/my-custom-functions/) *
 ******************************************************************************/

?>
