<?php
/**
 * The template for displaying all pages.
 *
 * @package     Anarcho Notepad
 * @since       2.38
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

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php spacexchimp_theme_date_tag(); ?>

            <h1 class="post-title">
                <?php the_title(); ?>
            </h1>

            <div class="post-inner">
                <?php the_post_thumbnail(); ?>
                <?php the_content( __( 'Continue reading', 'anarcho-notepad' ) ); ?>
            </div>

            <?php spacexchimp_theme_entry_meta(); ?>

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
