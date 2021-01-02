<?php
/**
 * Upgrade notice
 *
 * @package     Anarcho Notepad
 * @since       2.47
 * @author      Space X-Chimp
 * @copyright   Copyright (c) 2013-2021, Space X-Chimp
 * @link        https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license     http://www.gnu.org/licenses/gpl-3.0.html
 */


// Upgrade notice template
function spacexchimp_theme_upgrade_notice() {

    // Print template
    ?>
        <div class="notice anarcho-notice">
            <div class="anarcho-notice-item anarcho-notice">

                <img src="<?php echo esc_url( get_template_directory_uri() ) . '/images/theme_info/spacexchimp-logo.png'; ?>" alt="Anarcho Notepad" class="anarcho-notice-icon" width="145" height="145">

                <div class="anarcho-notice-message-container">
                    <h3 class="anarcho-notice-title">
                        <?php _e( 'Upgrade the Anarcho-Notepad theme to PREMIUM version!', 'anarcho-notepad' ); ?>
                    </h3>
                    <span class="anarcho-notice-message">
                        <?php _e( 'Hello. My name is Arthur, and I\'m a man behind the Anarcho-Notepad theme. I\'m pleased to inform you that there are now two premium versions of this theme available: the Author\'s-Notepad and the Simple-Notepad. These premium versions have significantly more customization options, improved design and many functional improvements. Importantly, both are optimized for mobile devices by having a responsive/mobile friendly layout. Elevate your website to the next level by upgrading to one of the PREMIUM Anarcho versions!', 'anarcho-notepad' ); ?>
                    </span>
                </div>

                <div class="anarcho-notice-buttons">
                    <a  href="//www.spacexchimp.com/themes/authors-notepad.html"
                        target="_blank"
                        class="anarcho-notice-button button button-primary"
                    >
                        <span class="dashicons dashicons-star-filled"></span>
                        <?php _e( 'Author\'s Notepad', 'anarcho-notepad' ); ?>
                    </a>
                    <a  href="//www.spacexchimp.com/themes/simple-notepad.html"
                        target="_blank"
                        class="anarcho-notice-button button button-primary"
                    >
                        <span class="dashicons dashicons-star-filled"></span>
                        <?php _e( 'Simple Notepad', 'anarcho-notepad' ); ?>
                    </a>
                    <a  href="https://www.spacexchimp.com/donate.html"
                        target="_blank"
                        rel="nofollow"
                        class="anarcho-notice-button anarcho-notice-button-white button"
                    >
                        <?php _e( 'or please DONATE', 'anarcho-notepad' ); ?>
                        <span class="dashicons dashicons-heart"></span>
                    </a>
                </div>

            </div>
        </div>
    <?php

    // Enqueue stylesheet
    wp_enqueue_style( 'spacexchimp_theme_upgrade_notice_styles', get_template_directory_uri() . '/inc/upgrade_notice.css' );

}

// Add the Upgrade notice to some pages in Admin area
global $pagenow;
if ( $pagenow == 'index.php' OR $pagenow == 'theme-editor.php' OR $pagenow == 'themes.php' ) {
        add_action( 'admin_notices', 'spacexchimp_theme_upgrade_notice' );
}
