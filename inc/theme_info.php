<?php
/**
 * Theme Information Page
 *
 * @package     Anarcho Notepad
 * @since       2.43
 * @author      Space X-Chimp
 * @copyright   Copyright (c) 2013-2021, Space X-Chimp
 * @link        https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license     http://www.gnu.org/licenses/gpl-3.0.html
 */

/* Add some CSS so we can Style the Theme Options Page */
function spacexchimp_theme_include_theme_options_style() {
    wp_enqueue_style('spacexchimp_theme_options_styles', get_template_directory_uri() . '/inc/theme_info.css', false, '1.0');
    wp_enqueue_style('spacexchimp_theme_options_font_awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css', 'screen');
}
add_action( 'admin_print_styles-appearance_page_theme_options', 'spacexchimp_theme_include_theme_options_style' );

/* Create the Theme Information page (Theme Options) */
function spacexchimp_theme_options_do_page() {

    $spacexchimp_theme_brand_logo = get_template_directory_uri() . '/images/theme_info/spacexchimp-logo.png';
    $spacexchimp_theme_brand_banner = get_template_directory_uri() . '/images/theme_info/spacexchimp-banner.png';
    $spacexchimp_theme_brand_uri = "https://www.spacexchimp.com";
    $spacexchimp_theme_uri = "https://www.spacexchimp.com/themes/anarcho-notepad.html";
    $spacexchimp_theme_donate_link = "https://www.spacexchimp.com/donate.html";
    $spacexchimp_theme_donate_image = get_template_directory_uri() . '/images/theme_info/donate.png';
    $spacexchimp_theme_contact_link = "https://www.spacexchimp.com/contact.html";
    $spacexchimp_theme_contact_link_short = "www.spacexchimp.com/contact.html";

    ?>
    <div class="cover">
        <header id="header"></header>
        <section id="page">

            <div class="content">

                <h3>
                    <?php _e( 'Theme "Anarcho Notepad"', 'anarcho-notepad' ); ?>
                </h3>
                <h4>
                    <a title="Space X-Chimp" target="_blank" href="<?php echo $spacexchimp_theme_brand_uri; ?>">
                        <?php _e( 'by Space X-Chimp', 'anarcho-notepad' ); ?>
                    </a>
                </h4>
                <p>
                    <a title="Space X-Chimp" target="_blank" href="<?php echo $spacexchimp_theme_brand_uri; ?>">
                        <img src="<?php echo $spacexchimp_theme_brand_logo; ?>" alt="Space X-Chimp" width="170" height="170" class="alignleft size-thumbnail logo-img" />
                    </a>
                    <?php _e( 'Inspired by the idea of anarchy, we designed this free WordPress theme for your personal blogs and diaries. This theme is perfect for writers and artists. "Anarcho Notepad" can be easily customized and already translated to different languages. It utilizes latest HTML-5, CSS-3, PHP and WordPress native functions for creating the awesomeness that looks good on every browser. We are constantly adding new features to this theme to allow you to personalize it to your own needs. We are glad to present you the Most Anarchist WP-Theme Of All! Enjoy!', 'anarcho-notepad' ); ?>
                </p>

                <h4>
                    <i class="fa fa-cogs"></i>
                    <?php _e( 'Features', 'anarcho-notepad' ); ?>
                </h4>
                <ul class="fa-ul">
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Cross browser compatible (work smooth in any modern browser)', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'RTL compatible (right to left)', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Ready for translation (Translated to 13 languages)', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Hand-coded, no WYSIWYG stuff', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'HTML5 Inside', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'CSS3 Inside', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Easy to set up - Theme Customizer', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Customize using "Google Web Fonts"', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Built-in iconic font "Font Awesome"', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Widget ready (in sidebar and footer)', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Built-in Pagination', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Built-in Breadcrumbs', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Template page "HTML map of the website"', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Template page "Without date"', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Block "About Author" below posts', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Custom text of copyright below posts', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Custom text of copyright in footer', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Custom header image', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Custom background', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'Custom menu', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-check-square-o"></i><?php _e( 'And many more...', 'anarcho-notepad' ); ?></li>
                    <li type="none"><i class="fa-li fa fa-square-o"></i><?php _e( 'Got more ideas? Tell us!', 'anarcho-notepad' ); ?></li>
                </ul>
                <p>
                    <?php
                        printf(
                            __( 'If you have any questions or suggestions for improving and adding new features, feel free to %1$s contact us %2$s.', 'anarcho-notepad' ),
                            '<a href="' . $spacexchimp_theme_contact_link . '" target="_blank">',
                            '</a>'
                        );
                    ?>
                </p>

                <h4>
                    <i class="fa fa-globe"></i>
                    <?php _e( 'Translation', 'anarcho-notepad' ); ?>
                </h4>
                <p>
                    <?php _e( 'This theme is ready for translation. It written on <strong>English</strong> and translated into:', 'anarcho-notepad' ); ?>
                </p>
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
                    <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Chinese</strong> (translated by <strong>Weiquan Bao</strong>)</li>
                    <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Italian</strong> (translated by <strong>Demetrio Fiumano</strong>)</li>
                    <li type="none"><i class="fa-li fa fa-check-circle"></i><strong>Portuguese (Brazil)</strong> (translated by <strong>Fabio Correia Pimenta</strong>)</li>
                </ul>
                <p>
                    <?php
                        printf(
                            __( 'If you want to help translate this theme, please use the POT file, that is included and placed in the "languages" folder, in order to create a translation files (*.po, *.mo). Just send the translation files (*.po, *.mo) to us ( %s ) and we will include the translation within the next theme update.', 'anarcho-notepad' ),
                            '<a href="' . $spacexchimp_theme_contact_link . '" target="_blank">' . $spacexchimp_theme_contact_link_short . '</a>'
                        );
                    ?>
                    <?php _e( 'Also you can use an existing PO file that placed in the "languages" folder, in order to make corrections.', 'anarcho-notepad' ); ?>
                    <?php _e( 'Many of theme users would be delighted if you share your translation with the community. Thanks for your contribution!', 'anarcho-notepad' ); ?>
                </p>
                <p>
                    <em><b><?php _e( 'Thanks to all who helped us translate this theme into other languages!', 'anarcho-notepad' ); ?></b></em>
                    <em><b><?php _e( 'Thank you very much for your contribution!', 'anarcho-notepad' ); ?></b></em>
                </p>

                <h4>
                    <i class="fa fa-diamond"></i>
                    <?php _e( 'PREMIUM versions', 'anarcho-notepad' ); ?>
                </h4>
                <p>
                    <?php _e( 'Elevate your website to the next level by upgrading to one of the PREMIUM Anarcho versions: the Author\'s-Notepad and the Simple-Notepad!', 'anarcho-notepad' ); ?>
                </p>
                <table class="store-item-features">
                    <tbody>
                        <tr>
                            <td class="feature-item-text"><b><?php _e( 'Responsive layout', 'anarcho-notepad' ); ?></b></td>
                            <td class="feature-item-text"><b><?php _e( 'Better SEO', 'anarcho-notepad' ); ?></b></td>
                            <td class="feature-item-text"><b><?php _e( 'Optimized load time', 'anarcho-notepad' ); ?></b></td>
                        </tr>
                        <tr>
                            <td class="feature-item-text"><b><?php _e( 'More secure', 'anarcho-notepad' ); ?></b></td>
                            <td class="feature-item-text"><b><?php _e( 'Improved design', 'anarcho-notepad' ); ?></b></td>
                            <td class="feature-item-text"><b><?php _e( 'Better typography', 'anarcho-notepad' ); ?></b></td>
                        </tr>
                        <tr>
                            <td class="feature-item-text"><b><?php _e( 'WooCommerce supported', 'anarcho-notepad' ); ?></b></td>
                            <td class="feature-item-text"><b><?php _e( 'More settings', 'anarcho-notepad' ); ?></b></td>
                            <td class="feature-item-text"><b><?php _e( 'More features', 'anarcho-notepad' ); ?></b></td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    <?php _e( 'These premium versions have significantly more customization options, improved design and many functional improvements. Importantly, both are <b>optimized for mobile devices</b> by having a responsive/mobile friendly layout.', 'anarcho-notepad' ); ?>
                </p>
            </div>

            <aside id="sidebar">

                <div class="donate">
                    <h3>
                        <?php _e( 'Happy to enjoy the theme?', 'anarcho-notepad' ); ?>
                    </h3>

                    <p>
                        <a href="<?php echo $spacexchimp_theme_donate_link; ?>" target="_blank" rel="nofollow">
                            <img class="tc-donate" src="<?php echo $spacexchimp_theme_donate_image; ?>" alt="Make a donation for Anarcho-Notepad">
                        </a>
                        <?php _e( 'Thanks for your support!', 'anarcho-notepad' ); ?>
                    </p>
                </div>

                <div class="store">
                    <h3>
                        <?php _e( 'Explore our website', 'anarcho-notepad' ); ?>
                    </h3>
                    <a href="<?php echo $spacexchimp_theme_brand_uri; ?>" title="Space X-Chimp studio" target="_blank">
                        <img src="<?php echo $spacexchimp_theme_brand_banner; ?>" alt="Space X-Chimp">
                    </a>
                </div>

            </aside>

            <br clear="all">

        </section>
        <footer id="footer"></footer>

    </div>

    <?php
}
add_action('admin_menu', 'spacexchimp_theme_options_add_page');

/* Page "Theme info" in dashboard */
function spacexchimp_theme_options_add_page() {
    add_theme_page(
        __( 'Theme Info' , 'anarcho-notepad' ),      // Name of page
        __( 'Theme Info' , 'anarcho-notepad' ),      // Label in menu
        'edit_theme_options',                        // Capability required
        'theme_options',                             // Menu slug, used to uniquely identify the page
        'spacexchimp_theme_options_do_page'              // Function to be called to output the content of this page
    );
}
