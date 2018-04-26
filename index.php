<?php
/**
 * The main template file.
 *
 * @package     Anarcho Notepad
 * @since       2.31
 * @author      Space X-Chimp
 * @copyright 	Copyright (c) 2013-2018, Space X-Chimp
 * @link      	https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php get_header(); ?>

<section id="content" role="main">
  <div class="col01">

  <?php anarcho_breadcrumbs(); ?>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php anarcho_date_tag(); ?>

      <h1><?php the_title(); ?></h1>
      <div class="post-inner">

		<?php the_post_thumbnail(); ?>

		<?php the_content( __( 'Continue reading', 'anarcho-notepad' ) ); ?>
      </div>

      <?php anarcho_entry_meta(); ?>
      <?php anarcho_post_nav(); ?>

    </article>
    <?php endwhile; ?>

    <?php anarcho_page_nav(); ?>

    <?php else : anarcho_not_found(); endif; ?>

  </div>

   <?php get_sidebar(); ?>
</section>
<br clear="all" />

<?php get_footer(); ?>
