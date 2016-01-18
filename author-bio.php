<?php
/**
 * The template for displaying Author bios.
 *
 * @package	Anarcho Notepad
 * @since	2.5
 * @author	Arthur "Berserkr" Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2015, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div class="author-info">
	<div class="author-avatar" >
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'anarcho-notepad_author_bio_avatar_size', 80 ) ); ?>
	</div><!-- .author-avatar -->
	<div class="author-description">
		<h2 class="author-title" ><?php _e( 'About the Author', 'anarcho-notepad' ); ?></h2>
		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
		</p>
	</div><!-- .author-description -->
</div><!-- .author-info -->
