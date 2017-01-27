<?php
/**
 * The template for displaying Searchform (HTML5).
 *
 * @package     Anarcho Notepad
 * @since       2.5
 * @author      Arthur Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2017, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div id="search">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url() ); ?>">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Write your search and hit Enter', 'anarcho-notepad' ); ?>" value="" name="s" title="Search" />
	</label>
	<input type="submit" class="search-submit" value="Search" />
</form>
</div>
