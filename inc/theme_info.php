<?php
/**
 * Theme Information Page
 *
 * @package     Anarcho Notepad
 * @since       2.30
 * @author      Arthur Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2016, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */

/* Add some CSS so I can Style the Theme Options Page */
function anarcho_include_theme_options_style() {
    wp_enqueue_style('anarcho_theme_options_styles', get_template_directory_uri() . '/theme_info.css', false, '1.0');
    wp_enqueue_style('font_awesome_styles', get_template_directory_uri() . '/fonts/font-awesome-4.5.0/css/font-awesome.min.css', 'screen');
}
add_action('admin_print_styles-appearance_page_theme_options', 'anarcho_include_theme_options_style');

/* Create the Theme Information page (Theme Options) */
function anarcho_theme_options_do_page() {
    
    ?>

    <?php
        $anarcho_author_img = get_template_directory_uri() . '/images/author.png';
        
        $anarcho_author_uri = "http://www.arthurgareginyan.com";
        $anarcho_theme_uri = "http://mycyberuniverse.com/anarcho-notepad.html";
        
        $anarcho_twitter = "https://twitter.com/AGareginyan";
        $anarcho_facebook = "https://www.facebook.com/arthur.gareginyan";
        $anarcho_instagram = "http://instagram.com/arthur_gareginyan";
        
        $anarcho_donate_link = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS";
        $anarcho_donate_image = get_template_directory_uri() . '/images/donate.png';
    ?>

    <div class="cover">
        <header id="header"></header>
        <section id="page">

            <div class="content">

                <h3><?php _e('Theme "Anarcho Notepad"', 'anarcho-notepad'); ?></h3>
                <h4><a title="Author" target="_blank" href="<?php echo $anarcho_author_uri; ?>"><?php _e('by Arthur Gareginyan', 'anarcho-notepad'); ?></a></h4>
                <p>
                    <a title="Author" target="_blank" href="<?php echo $anarcho_author_uri; ?>">
                        <img src="<?php echo $anarcho_author_img; ?>" alt="Theme author" width="170" height="170" class="alignleft size-thumbnail author-img" />
                    </a>
                    <?php _e('Inspired by the idea of anarchy, I designed this free premium WordPress theme for your personal blogs and diaries. This theme is perfect for writers and artists. "Anarcho Notepad" can be easily customised and already translated to different languages. It utilises latest HTML-5, CSS-3, PHP and WordPress native functions for creating the awesomeness that looks good on every browser. I’m constantly adding new features to this theme to allow you to personalise it to your own needs. If you want a new feature or just want to be able to change something just ask me and I would be happy to add it. I\'m glad to present you the Most Anarchist WP-Theme Of All! Enjoy!', 'anarcho-notepad'); ?>
                </p>

                </br>
                <h4><i class="fa fa-cogs"></i></i> <?php _e('Features', 'anarcho-notepad'); ?></h4>

                <i class="fa fa-list-ul"></i> <b><?php _e('Current features:', 'anarcho-notepad'); ?></b>
                <ul class="fa-ul">
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('HTML5 Inside', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('CSS3 Inside', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Easy to set up - Theme Customizer', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Customize using "Google Web Fonts"', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Built-in iconic font "Font Awesome"', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Widget ready (in sidebar and footer)', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Built-in Pagination', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Built-in Breadcrumbs', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Template page "HTML map of the website"', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Template page "Without date"', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Block "About Author" below posts', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Custom text of copyright below posts', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Custom text of copyright in footer', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Custom header image', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Custom logo together or instead of the title of website', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Custom background', 'anarcho-notepad'); ?></br>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Custom menu', 'anarcho-notepad'); ?></br>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Ready for translation (Translated to 12 languages)', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e('Published to the repository WordPess.org', 'anarcho-notepad'); ?></li>
                </ul>

                </br>
                <i class="fa fa-list-ul"></i> <b><?php _e('Coming soon:', 'anarcho-notepad'); ?></b>
                <ul type="none" class="fa-ul">
                    <li type="none"><i class="fa-li fa fa-square-o"></i><?php _e('Responsive design', 'anarcho-notepad'); ?></li>
                    <li type="none"><i class="fa-li fa fa-square-o"></i><?php _e('Sticky Posts', 'anarcho-notepad'); ?></li>
                </ul>
                <p>
                    <?php _e('If you have any questions or suggestions for improving and adding new features, feel free to contact me at:', 'anarcho-notepad'); ?>
                    <a href="mailto:arthurgareginyan@gmail.com?subject=Anarcho Notepad">arthurgareginyan@gmail.com</a>
                </p>

                </br>
                <h4><i class="fa fa-globe"></i> <?php _e('Translation', 'anarcho-notepad'); ?></h4>
                <p>
                    <?php _e('"Anarcho-Notepad" theme is ready for translation. It written on <strong>English</strong> and translated into:', 'anarcho-notepad'); ?>
                    <ul class="fa-ul">
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Russian</strong> (translated by <strong>Arthur Gareginyan</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Ukrainian</strong> (translated by <strong>Svetlana Drotyanko</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Slovak</strong> (translated by <strong>Martin Petrus</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Afrikaans</strong> (translated by <strong>MadriVictor</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Spanish</strong> (translated by <strong>Ivan Ratinoff</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Polish</strong> (translated by <strong>Krzysztof Goral</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>German</strong> (translated by <strong>Alexander v. Falkenhausen</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Estonian</strong> (translated by <strong>Taavi Tiitsmaa</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Catalan</strong> (translated by <strong>Nestor Malet</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Danish</strong> (translated by <strong>Chano Klinck Andersen</strong>)</li>
                        <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>French</strong> (translated by <strong>Rolland Dudemaine</strong>)</li>
                    </ul>
                </p>
                <p>
                    <?php _e('If you want to help translate this theme, please use the POT file, that is included and placed in the "languages" folder, in order to create a translation files (*.po, *.mo). Just send the translation files (*.po, *.mo) to me at', 'anarcho-notepad'); ?>
                    <a href="mailto:arthurgareginyan@gmail.com?subject=Anarcho Notepad">arthurgareginyan@gmail.com</a>
                    <?php _e('and I will include the translation within the next theme update.', 'anarcho-notepad'); ?>
                    <?php _e('Also you can use an existing PO file that placed in the "languages" folder, in order to make corrections.', 'anarcho-notepad'); ?>
                    <?php _e('Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!', 'anarcho-notepad'); ?>
                </p>
                <p>
                    <em><b><?php _e('Thanks to all who helped me translate "Anarcho-Notepad" into other languages!', 'anarcho-notepad'); ?></b></em>
                    <em><b><?php _e('Thank you very much for your contribution!', 'anarcho-notepad'); ?></b></em>
                </p>
            </div>

            <aside id="sidebar">

                <div class="donate">
                    <h3><?php _e('Happy to enjoy the Anarcho-Notepad?', 'anarcho-notepad'); ?></h3>

                    <p>
                        <a href="<?php echo $anarcho_donate_link; ?>" target="_blank" rel="nofollow"><img class="tc-donate" src="<?php echo $anarcho_donate_image; ?>" alt="Make a donation for Anarcho-Notepad"></a>
                        <?php _e('Thanks for your support!', 'anarcho-notepad'); ?>
                    </p>
                </div>

                <div class="follow">
                    <h3><?php _e('Follow me :', 'anarcho-notepad'); ?></h3>
                    <p>
                        <a href="<?php echo $anarcho_twitter; ?>" target="_blank"><i class="fa fa-twitter-square"></i></a>
                        <a href="<?php echo $anarcho_facebook; ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="<?php echo $anarcho_instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    </p>
                </div>

            </aside>

            <br clear="all">

        </section>
        <footer id="footer"></footer>

    </div>

    <?php
}
add_action('admin_menu', 'anarcho_theme_options_add_page');

/* Page "Theme info" in dashboard */
function anarcho_theme_options_add_page() {
    add_theme_page(
                   __( 'Theme Info' , 'anarcho-notepad' ),      // Name of page
                   __( 'Theme Info' , 'anarcho-notepad' ),      // Label in menu
                   'edit_theme_options',                        // Capability required
                   'theme_options',                             // Menu slug, used to uniquely identify the page
                   'anarcho_theme_options_do_page'              // Function to be called to output the content of this page
    );
}

/* Add help button to admin bar */
function anarcho_add_help_button() {
    if ( current_user_can( 'edit_theme_options' ) ) {
        global $wp_admin_bar;
        $wp_admin_bar->add_menu( array(
                                       'parent' => 'top-secondary',     // Off on the right side
                                       'id' 	=> 'anarcho-help' ,
                                       'title' 	=>  __( 'Help' , 'anarcho-notepad' ),
                                       'href' 	=> admin_url( 'themes.php?page=theme_options' ),
                                       'meta'   => array(
                                                         'title'  => __( 'Need help with Anarcho-Notepad? Click here!', 'anarcho-notepad' ),
                                                         ),
                                       ));
    }
}
add_action ( 'wp_before_admin_bar_render', 'anarcho_add_help_button' );

/* Enqueue additional stylesheet for admin screens */
function anarcho_include_admin_style() {
    wp_enqueue_style( 'anarcho_admin_styles', get_template_directory_uri() . '/admin.css' );
}
add_action( 'admin_init', 'anarcho_include_admin_style' );
