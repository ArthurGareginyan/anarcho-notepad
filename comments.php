<?php
/**
 * The template for displaying Comments.
 *
 * @package     Anarcho Notepad
 * @since       2.38
 * @author      Space X-Chimp
 * @copyright   Copyright (c) 2013-2021, Space X-Chimp
 * @link        https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license     http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
    <p class="comments-title">
        <?php
            printf(
                '%1$s COMMENTS :',
                number_format_i18n( get_comments_number() )
            );
        ?>
    </p>

    <ol class="commentlist">
        <?php wp_list_comments( array( 'callback' => 'spacexchimp_theme_comment', 'style' => 'ol' ) ); ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
    <nav id="comment-nav-below" class="navigation" role="navigation">
        <h1 class="assistive-text section-heading">
            <?php _e( 'Comment navigation', 'anarcho-notepad' ); ?>
        </h1>
        <div class="nav-previous">
            <?php previous_comments_link( '&larr; Older Comments' ); ?>
        </div>
        <div class="nav-next">
            <?php next_comments_link( 'Newer Comments &rarr;' ); ?>
        </div>
    </nav>
    <?php endif; ?>

    <?php
        /* If there are no comments and comments are closed, let's leave a note.
         * But we only want the note on posts and pages that had comments in the first place.
         */
        if ( ! comments_open() && get_comments_number() ) :
    ?>
    <p class="nocomments">
        <?php _e( 'Comments are closed.' , 'anarcho-notepad' ); ?>
    </p>
    <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php comment_form(); ?>

</div>
