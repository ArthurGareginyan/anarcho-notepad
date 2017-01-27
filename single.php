<?php
/**
 * The template for displaying all single posts.
 *
 * @package     Anarcho Notepad
 * @since       2.31
 * @author      Arthur Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2017, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php get_header(); ?>

<section id="content" role="main">
  <div class="col01">

  <?php anarcho_breadcrumbs(); ?>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="before-posts"><?php echo get_theme_mod('scripts_before_posts'); ?></div>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php anarcho_date_tag(); ?>

      <h1><?php the_title(); ?></h1>
      <div class="post-inner">

		<div class="beginning-posts"><?php echo get_theme_mod('scripts_beginning_posts'); ?></div>
		<?php the_post_thumbnail(); ?>
		<?php the_content( __( 'Continue reading', 'anarcho-notepad' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span>' . __( 'Pages:', 'anarcho-notepad' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      </div>

      <div class="after-posts"><?php echo get_theme_mod('scripts_after_posts'); ?></div>
      <br/>
      <p class="tagsandcopy">
            <?php the_tags(); ?>
            <br/>
            <?php
                $anarcho_copy_post = __( 'Copyright 2017. All rights reserved.', 'anarcho-notepad' );
                echo esc_html( get_theme_mod( 'copyright_post', $anarcho_copy_post ) );
            ?>
      </p>

      <?php anarcho_entry_meta(); ?>
      <?php anarcho_post_nav(); ?>

      <div class="end-posts"><?php echo get_theme_mod('scripts_end_posts'); ?></div>

    </article>
    <?php comments_template(); ?>
    <?php endwhile; ?>
    <?php else : anarcho_not_found(); endif; ?>

  </div>

   <?php get_sidebar(); ?>
</section>
<br clear="all" />

<?php get_footer(); ?>
