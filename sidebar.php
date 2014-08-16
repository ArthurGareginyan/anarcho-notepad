<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * @package	Anarcho Notepad
 * @since	2.5
 * @author	Arthur (Berserkr) Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2014, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<aside id="sidebar" role="complementary">

<!--PAGES (MENU)-->
<nav class="pages">
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav>
<div class="pages-bottom"></div>
<!--END-PAGES (MENU)-->

<?php dynamic_sidebar( 'sidebar-1' ); ?>

<!--ABOUT BOX-->
<?php if(get_theme_mod('disable_about_box') == '0') {  ?>
<div class="about-box">
  <p>
    <?php echo sanitize_text_field(get_theme_mod('about_box')); ?>
  </p>
</div>
<?php }  ?>
<!--END-ABOUT BOX-->

<?php dynamic_sidebar( 'sidebar-2' ); ?>

<!--LINKS BOX-->
<?php if(get_theme_mod('disable_links_box') == '0') {  ?>
<div class="links-box">
  <p>
    <ul>
	<?php wp_list_bookmarks('categorize=0&title_li='); ?>
    </ul>
  </p>
</div>
<?php }  ?>
<!--END-LINKS BOX-->

<?php dynamic_sidebar( 'sidebar-3' ); ?>

<!--RECENT POSTS-->
<?php if(get_theme_mod('disable_recent_sticker') == '0') {  ?>
<div class="recent-posts-upper"></div>
 <nav class="recent-posts">
    <?php $query = new WP_Query( array( 'posts_per_page' => '10' ) ); ?>
    <?php while ($query->have_posts()): $query->the_post(); ?>
    <ul>
       <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
       </li>
    </ul>
    <?php endwhile; ?>
 </nav>
<div class="recent-posts-bottom"></div>
<?php }  ?>
<!--END-RECENT POSTS-->

<?php dynamic_sidebar( 'sidebar-4' ); ?>

</aside><br clear="all" />