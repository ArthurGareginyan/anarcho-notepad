<?php
/**
 * The template for displaying Searchform (HTML5).
 *
 * @package     Anarcho Notepad
 * @since       2.32
 * @author      Arthur Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2018, Space X-Chimp
 * @link      	https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div id="search">

    <?php
        $search_placeholder_default_text = __( 'Write your search and hit Enter', 'anarcho-notepad' );
        $search_placeholder_text = esc_html( $search_placeholder_default_text );
    ?>

    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url() ); ?>">
        <label>
            <span class="screen-reader-text">Search for:</span>
            <input type="search" class="search-field" placeholder="<?php echo $search_placeholder_text; ?>" value="" name="s" title="Search" />
        </label>
        <input type="submit" class="search-submit" value="Search" />
    </form>
</div>
