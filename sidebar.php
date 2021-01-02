<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * @package     Anarcho Notepad
 * @since       2.47
 * @author      Space X-Chimp
 * @copyright   Copyright (c) 2013-2021, Space X-Chimp
 * @link        https://www.spacexchimp.com/themes/anarcho-notepad.html
 * @license     http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<aside id="sidebar" role="complementary">

    <!--FOLLOW-->
    <?php if ( get_theme_mod('disable_rss_icon') !== '1' ) { ?>
    <div class="follow">
        <a href="https://www.follow.it/now" target="_blank" rel="nofollow">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/follow.png" alt="RSS" />
        </a>
    </div>
    <?php } ?>
    <!--END-FOLLOW-->

    <!--YELLOW STICKER-->
    <nav class="yellow-sticker-middle">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
    <div class="yellow-sticker-bottom"></div>
    <!--END-YELLOW STICKER-->

    <?php dynamic_sidebar( 'sidebar-1' ); ?>

    <!--ABOUT (WIDGET)-->
    <?php if ( get_theme_mod('disable_about_box') !== '1' ) { ?>
    <div class="about-widget">
        <p>
            <?php
                $about_text = __( 'Paste here small text about you and/or about your site.', 'anarcho-notepad' );
                echo wp_kses_post( get_theme_mod( 'about_box', $about_text ) );
            ?>
        </p>
    </div>
    <?php } ?>
    <!--END-ABOUT (WIDGET)-->

    <?php dynamic_sidebar( 'sidebar-2' ); ?>

    <!--LINKS (WIDGET)-->
    <?php if ( get_theme_mod('disable_links_box') !== '1' ) { ?>
    <div class="links-widget">
        <p>
            <ul>
                <?php wp_list_bookmarks('categorize=0&title_li=&orderby=rating'); ?>
            </ul>
        </p>
    </div>
    <?php } ?>
    <!--END-LINKS (WIDGET)-->

    <?php dynamic_sidebar( 'sidebar-3' ); ?>

    <!--WHITE STICKER-->
    <?php if ( get_theme_mod('disable_recent_sticker') !== '1' ) { ?>
    <div class="white-sticker-top"></div>
    <nav class="white-sticker-middle">
        <?php $num_recent_post = get_theme_mod('num_recent_post'); ?>
        <?php $query = new WP_Query( array( 'posts_per_page' => $num_recent_post ) ); ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <ul>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <i class="fa fa-asterisk"></i>
                    <?php the_title(); ?>
                </a>
            </li>
        </ul>
        <?php endwhile; ?>
    </nav>
    <div class="white-sticker-bottom"></div>
    <?php } ?>
    <!--END-WHITE STICKER-->

    <?php dynamic_sidebar( 'sidebar-4' ); ?>

</aside>

<br clear="all">
