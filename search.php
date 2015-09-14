<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package	Anarcho Notepad
 * @since	2.16
 * @author	Arthur "Berserkr" Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2015, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php get_header(); ?>

<section id="content" role="main">
  <div class="col01">

  <?php anarcho_breadcrumbs(); ?>

<div id="center">

<h3><?php printf( 'Search Results for: %s', get_search_query() ); ?></h3>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php anarcho_ribbons(); ?>

		<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>

		<div class="post-inner">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

			<?php the_content( __( 'Continue reading', 'anarcho-notepad' ) ); ?>
      		</div>

      		<?php anarcho_entry_meta(); ?>

                </article>
   <?php endwhile; ?>

   <?php anarcho_page_nav(); ?>

   <?php else : echo _e('Sorry for your result nothing found', 'anarcho-notepad'); ?>
   <?php endif; ?>
    </div>

  </div>

   <?php get_sidebar(); ?>
</section><br clear="all" />

<?php get_footer(); ?>