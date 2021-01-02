<?php
/**
 * The template for displaying the footer.
 *
 * @package     Anarcho Notepad
 * @since       2.38
 * @author      Space X-Chimp
 * @copyright   Copyright (c) 2013-2021, Space X-Chimp
 * @link        https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license     http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div class="notepad-bottom"></div>

<footer id="footer" class="footer" role="contentinfo">

    <div id="footer-widgets">
        <span>
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </span>
        <span>
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </span>
        <span>
            <?php dynamic_sidebar( 'footer-3' ); ?>
        </span>
    </div>

    <br clear="all">

    <?php wp_footer(); ?>

    <br>

</footer>

</body>
</html>
