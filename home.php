<?php
/**
 * The template for displaying Home page.
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

        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php spacexchimp_theme_date_tag(); ?>

            <h2 class="post-title">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'anarcho-notepad' ); ?> <?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>

            <div class="post-inner">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <?php the_content( __( 'Continue reading', 'anarcho-notepad' ) ); ?>
            </div>

            <?php spacexchimp_theme_entry_meta(); ?>

        </article>

        <?php endwhile; ?>

        <?php spacexchimp_theme_page_nav(); ?>

        <?php else : ?>
            <?php spacexchimp_theme_not_found(); ?>
        <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>

</section>

<br clear="all">

<?php get_footer(); ?>
