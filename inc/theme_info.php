<?php
/**
 * Theme Information Page
 *
 * @package	Anarcho Notepad
 * @since	2.26
 * @author	Arthur "Berserkr" Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2015, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */

/* Add some CSS so I can Style the Theme Options Page */
function anarcho_include_theme_options_style() {
	wp_enqueue_style('anarcho_theme_options_styles', get_template_directory_uri() . '/theme_info.css', false, '1.0');
	wp_enqueue_style('font_awesome_styles', get_template_directory_uri() . '/fonts/font-awesome-4.4.0/css/font-awesome.min.css', 'screen');
}
add_action('admin_print_styles-appearance_page_theme_options', 'anarcho_include_theme_options_style');

/* Create the Theme Information page (Theme Options) */
function anarcho_theme_options_do_page() { ?>

    <?php
        $anarcho_author_uri = "http://mycyberuniverse.com/author.html";
        $anarcho_theme_uri = "http://mycyberuniverse.com/anarcho-notepad.html";
        $anarcho_twitter = "https://twitter.com/AGareginyan";
        $anarcho_facebook = "https://www.facebook.com/arthur.gareginyan";
        $anarcho_instagram = "http://instagram.com/arthur_gareginyan";
        $anarcho_googlepluse = "https://plus.google.com/+ArthurGareginyan";
    ?>

    <div class="cover">
    <header id="header"></header>
    <section id="page">

      <div class="content">

        <h3>"Anarcho Notepad"</h3>
        <h4><a title="Author" target="_blank" href="<?php echo $anarcho_author_uri; ?>">by Arthur "Berserkr" Gareginyan</a></h4>
        <p>
            <?php _e('Inspired by the idea of anarchy, I designed this free premium WordPress theme for your personal blogs and diaries. This theme is perfect for writers and artists. "Anarcho Notepad" can be easily customised and already translated to different languages. It utilises latest HTML-5, CSS-3, PHP and WordPress native functions for creating the awesomeness that looks good on every browser. I\'m constantly adding new features to this theme to allow you to personalise it to your own needs. If you want a new feature or just want to be able to change something just ask me and I would be happy to add it. I\'m glad to present you the Most Anarchist WP-Theme Of All! Enjoy!', 'anarcho-notepad');?>
        </p>

        <p>
            <h4><i class="fa fa-cogs"></i></i>&nbsp;Features</h4>
            <i class="fa fa-list-ul"></i>&nbsp;<b>Current features:</b>
            <ul class="fa-ul">
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>HTML5 Inside</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>CSS3 Inside</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Easy to set up - Theme Customizer</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Customize using "Google Web Fonts"</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Built-in iconic font "Font Awesome"</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Widget ready (in sidebar and footer)</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Built-in Pagination</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Built-in Breadcrumbs</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Template page "HTML map of the website"</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Template page "Without date"</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Block "About Author" below posts</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Custom text of copyright below posts</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Custom text of copyright in footer</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Custom header image</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Custom logo together or instead of the title of website</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Custom background</br>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Custom menu</br>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Ready for translation (Translated to 11 languages)</li>
                <li type="none"><i class="fa-li fa fa-check-square-o"></i>Published to the repository WordPess.org</li>
            </ul>
            </br>
            <i class="fa fa-list-ul"></i>&nbsp;<b>Coming soon:</b>
            <ul type="none" class="fa-ul">
                <li type="none"><i class="fa-li fa fa-square-o"></i>Responsive designe</li>
                <li type="none"><i class="fa-li fa fa-square-o"></i>Sticky Posts</li>
            </ul>
        </p>
        <p>
            <?php _e('Sorry for what I delete some functions from Customizer. I have to do it due to the rules of wordpress.org.', 'anarcho-notepad'); ?>
            </br>
            </br>
            <?php _e('If you have any questions or suggestions for improving and adding new features, feel free to contact me at:', 'anarcho-notepad'); ?>
            <a class="button" target="_blank" href="<?php echo $anarcho_theme_uri; ?>"> My Website </a>
        </p>

        <h4><i class="fa fa-globe"></i>&nbsp;<?php _e('Translation', 'anarcho-notepad'); ?></h4>
        <p>
            <?php _e('The theme is in the process of translation into other languages of the world. Already supports 11 languages! If you have the desire then you can help me in translation to your native language. Just send the translation files (*.po, *.mo) to me at the arthurgareginyan@gmail.com and I will include the translation within the one of the next theme update. Many of theme users would be delighted if you shared your translation with the community.', 'anarcho-notepad'); ?>
        </p>
        <p>
            <?php _e('"Anarcho-Notepad" written on <strong>English</strong> and translated into:', 'anarcho-notepad'); ?>
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
            </ul>
            </br>
            <em><b><?php _e('Thanks to all who helped me translate "Anarcho-Notepad" into other languages!', 'anarcho-notepad'); ?></b></em>
            <em><b><?php _e('Thank you very much for your contribution!', 'anarcho-notepad'); ?></b></em>
        </p>
        </div><!--<div class="content">-->

        <aside id="sidebar">

            <div class="comment">
                <h3><?php _e('Happy to enjoy the Anarcho-Notepad?', 'anarcho-notepad');?></h3>
                <p>
                    <a class="button-primary review-customizr" title="Leave a comment" href="http://wordpress.org/support/view/theme-reviews/anarcho-notepad" target="_blank"><i class="fa fa-commenting fa-lg"></i>&nbsp;<?php _e('Leave a comment', 'anarcho-notepad');?></a>
                </p>
            </div><!--<div class="comment">-->

            <div class="donate">
                <?php
                    $anarcho_donate = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2EBT6E8BQ5RRQ";
                ?>
                <h3><?php _e('Please consider making a donation', 'anarcho-notepad');?></h3>
                <p>
                    <a href="<?php echo $anarcho_donate; ?>" target="_blank" rel="nofollow"><img class="tc-donate" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Make a donation for Anarcho-Notepad"></a>
                </p>
            </div><!--<div class="donate">-->

            <div class="follow">
                <h3><?php _e('Follow me :', 'anarcho-notepad');?></h3>
                <p>
                    <a href="<?php echo $anarcho_twitter; ?>" target="_blank"><i class="fa fa-twitter-square"></i></a>
                    <a href="<?php echo $anarcho_facebook; ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="<?php echo $anarcho_instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $anarcho_googlepluse; ?>" target="_blank"><i class="fa fa-google-plus-square"></i></a>
                </p>
            </div><!--<div class="follow">-->

        </aside><!--<aside id="sidebar">-->

        <br clear="all">

        </section><!--<section id="page">-->
        <footer id="footer"></footer><!--<footer id="finishing">-->

        </div><!--<div class="cover">-->

<?php }
add_action('admin_menu', 'anarcho_theme_options_add_page');

/* Page "Theme info" in dashboard */
function anarcho_theme_options_add_page() {
	add_theme_page(
		__( 'Theme Info' , 'anarcho-notepad' ),     // Name of page
		__( 'Theme Info' , 'anarcho-notepad' ),     // Label in menu
		 'edit_theme_options',                      // Capability required
		 'theme_options',                           // Menu slug, used to uniquely identify the page
		 'anarcho_theme_options_do_page'            // Function to be called to output the content of this page
	);
}

/* Add help button to admin bar */
function anarcho_add_help_button() {
   if ( current_user_can( 'edit_theme_options' ) ) {
     global $wp_admin_bar;
     $wp_admin_bar->add_menu( array(
       'parent' => 'top-secondary',                 // Off on the right side
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

/* Enqueue additional styling for admin screens */
function anarcho_include_admin_style() {
	wp_enqueue_style( 'anarcho_admin_styles', get_template_directory_uri() . '/admin.css' );
}
add_action( 'admin_init', 'anarcho_include_admin_style' );
