<?php
/**
 * The template for displaying all single posts.
 *
 * @package     Anarcho Notepad
 * @since       2.48
 * @author      Space X-Chimp
 * @copyright   Copyright (c) 2013-2021, Space X-Chimp
 * @link        https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license     http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php get_header(); ?>

<section id="content" role="main">
    <div class="col01">

        <?php spacexchimp_theme_breadcrumbs(); ?>

        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="before-posts">
            <?php echo spacexchimp_theme_sanitize_scripts( get_theme_mod('scripts_before_posts') ); ?>
        </div>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php spacexchimp_theme_date_tag(); ?>

            <h1 class="post-title">
                <?php the_title(); ?>
            </h1>

            <div class="post-inner">

                <div class="beginning-posts">
                    <?php echo spacexchimp_theme_sanitize_scripts( get_theme_mod('scripts_beginning_posts') ); ?>
                </div>

                <?php the_post_thumbnail(); ?>
                <?php the_content( __( 'Continue reading', 'anarcho-notepad' ) ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span>' . __( 'Pages:', 'anarcho-notepad' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

                <div class="end-posts">
                    <?php echo spacexchimp_theme_sanitize_scripts( get_theme_mod('scripts_end_posts') ); ?>
                </div>

            </div>

            <p class="tagsandcopy">
                <?php the_tags(); ?>
                <br>
                <?php
                    $spacexchimp_theme_copy_post = __( 'Copyright 2021. All rights reserved.', 'anarcho-notepad' );
                    echo wp_kses_post( get_theme_mod( 'copyright_post', $spacexchimp_theme_copy_post ) );
                ?>
            </p>

            <?php spacexchimp_theme_entry_meta(); ?>
            <?php spacexchimp_theme_post_nav(); ?>

            <div class="after-posts">
                <?php echo spacexchimp_theme_sanitize_scripts( get_theme_mod('scripts_after_posts') ); ?>
            </div>

        </article>

        <?php comments_template(); ?>

        <?php endwhile; ?>

        <?php else : ?>
            <?php spacexchimp_theme_not_found(); ?>
        <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>

</section>

<br clear="all">

<?php get_footer(); ?>
