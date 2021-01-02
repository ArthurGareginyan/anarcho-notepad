<?php
/**
 * The template for displaying Sitemap.
 *
 * Template Name: Sitemap Page
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

            <h1 class="post-title">
                <?php the_title(); ?>
            </h1>

            <div class="post-inner">
                <?php the_post_thumbnail(); ?>
                <!-- HTML Sitemap -->
                <div class="html-sitemap">
                    <!--
                        <h2>
                            <?php _e( 'Author(s):', 'anarcho-notepad' ); ?>
                        </h2>
                        <ul class="sitemap-authors">
                            <?php wp_list_authors('exclude_admin=1&optioncount=1'); ?>
                        </ul>
                    -->

                    <h2>
                        <?php _e( 'Pages:', 'anarcho-notepad' ); ?>
                    </h2>
                    <ul class="sitemap-pages">
                        <?php
                              wp_list_pages('exclude=889&title_li='); //***Exclude page ID, separated. We excluded the sitemap of this blog (page_ID=889).
                        ?>
                    </ul>

                    <h2>
                        <?php _e( 'Posts:', 'anarcho-notepad' ); ?>
                    </h2>
                    <ul>
                        <?php
                              $cats = get_categories('exclude='); //***Exclude categories by ID, separated if you like.
                              foreach ($cats as $cat) {
                        ?>
                        <li class="category">
                            <h3>
                                <span class="grey">
                                    <?php _e( 'Category: ', 'anarcho-notepad' ); ?>
                                </span>
                                <?php echo $cat->cat_name; ?>
                            </h3>
                            <ul class="cat-posts">
                                <?php
                                      $query = new WP_Query( array( 'posts_per_page' => '-1' ) ); //-1 shows all posts per category. 1 to show most recent post.
                                      while ($query->have_posts()): $query->the_post();
                                      $category = get_the_category();
                                      //Display a post once, even if it is in multiple categories/subcategories. Lists the post in the first Category displayed.
                                      if ($category[0]->cat_ID == $cat->cat_ID) {
                                ?>
                                <li>
                                    <?php the_time('M d, Y')?>
                                    &raquo;
                                    <a href="<?php the_permalink() ?>" title="Permanent Link to: <?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                    (
                                    <?php comments_number('0', '1', '%'); ?>
                                    )
                                </li>
                                <?php
                                      } //endif
                                      endwhile; //endwhile
                                ?>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php wp_reset_query(); ?>
                    <h2>
                        <?php _e( 'Archives:', 'anarcho-notepad' ); ?>
                    </h2>
                    <ul class="sitemap-archives">
                        <?php wp_get_archives('type=monthly&show_post_count=true'); ?>
                    </ul>
                </div>
                <!-- END -->
            </div>

        </article>

        <?php endwhile; ?>

        <?php else : ?>
        <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>

</section>

<br clear="all">

<?php get_footer(); ?>
