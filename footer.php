<?php
/**
 * The template for displaying the footer.
 *
 * @package     Anarcho Notepad
 * @since       2.28
 * @author      Arthur Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2016, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<footer id="footer" role="contentinfo">

  <div class="notepad-bottom"></div>

  <div class="site-info">

	<div id="footer-widgets">
		<span><?php dynamic_sidebar( 'footer-1' ); ?></span>
		<span><?php dynamic_sidebar( 'footer-2' ); ?></span>
		<span><?php dynamic_sidebar( 'footer-3' ); ?></span>
	</div>
	<br clear="all">

	<?php echo get_theme_mod('site-info'); ?>
  </div>

  <div class="footer">
	<?php wp_footer(); ?>
    </br>
  </div>

</footer>
</body>
</html>
