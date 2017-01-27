<?php
/**
 * Upgrade notice
 *
 * @package     Anarcho Notepad
 * @since       2.31
 * @author      Arthur Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2017, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */


// Upgrade notice template
function anarcho_upgrade_notice() {

    // Print template
    ?>
        <div class="notice anarcho-notice">
            <div class="anarcho-notice-item anarcho-notice">

                <span class="dashicons dashicons-star-filled anarcho-notice-icon-1"></span>
                <span class="dashicons dashicons-star-filled anarcho-notice-icon-2"></span>
                <span class="dashicons dashicons-admin-appearance anarcho-notice-icon-3"></span>

                <div class="anarcho-notice-message-container">
                    <h3 class="anarcho-notice-title">
                        <?php _e( 'Upgrade the Anarcho-Notepad theme to PREMIUM version for only $59!', 'anarcho-notepad' ); ?>
                    </h3>
                    <span class="anarcho-notice-message">
                        <?php _e( 'Hello, My name is Arthur, I\'m a man behind the Anarcho-Notepad theme. I\'m pleased to inform you that now available two premium versions of this theme: the Author\'s-Notepad and the Simple-Notepad. Note that they has much more advanced Customizer options, a much more improved design and lots of more improvements. And also they both are optimized for mobile devices (has a responsive/mobile friendly layout). Lift up your website to the next level by upgrading the Anarcho-Notepad theme to PREMIUM version!', 'anarcho-notepad' ); ?>
                    </span>
                </div>

                <div class="anarcho-notice-buttons">
                    <a  href="//www.arthurgareginyan.com/theme-authors-notepad.html"
                        target="_blank"
                        class="anarcho-notice-button button button-primary"
                    >
                        <span class="dashicons dashicons-star-filled"></span>
                        <?php _e( 'Author\'s Notepad', 'anarcho-notepad' ); ?>
                    </a>
                    <a  href="//www.arthurgareginyan.com/theme-simple-notepad.html"
                        target="_blank"
                        class="anarcho-notice-button button button-primary"
                    >
                        <span class="dashicons dashicons-star-filled"></span>
                        <?php _e( 'Simple Notepad', 'anarcho-notepad' ); ?>
                    </a>
                    <a  href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS"
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
    wp_enqueue_style( 'anarcho_upgrade_notice_styles', get_template_directory_uri() . '/inc/upgrade_notice.css' );

}

// Add the Upgrade notice to some pages in Admin area
global $pagenow;
if ( $pagenow == 'index.php' OR $pagenow == 'theme-editor.php' OR $pagenow == 'themes.php' ) {
        add_action( 'admin_notices', 'anarcho_upgrade_notice' );
}
