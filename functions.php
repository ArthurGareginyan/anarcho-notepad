<?php
/**
 * Anarcho Notepad functions and definitions.
 *
 * @package	Anarcho Notepad
 * @since	2.28
 * @author	Arthur "Berserkr" Gareginyan <arthurgareginyan@gmail.com>
 * @copyright 	Copyright (c) 2013-2015, Arthur Gareginyan
 * @link      	http://mycyberuniverse.com/anarcho-notepad.html
 * @license   	http://www.gnu.org/licenses/gpl-3.0.html
 */

/* Ladies and Gentleman, boys and girls let's start our engine */


function anarcho_notepad_setup() {
	global $content_width;

	// Localization Init
	load_theme_textdomain( 'anarcho-notepad', get_template_directory() . '/languages' );

	// This feature enables Custom Backgrounds.
	add_theme_support( 'custom-background', array(
		'default-image' => get_template_directory_uri() . '/images/background.jpg', ) );

	// This feature enables Custom Header.
	add_theme_support( 'custom-header', array(
	  'flex-width'    	   => true,
	  'width'         	   => 500,
	  'flex-height'    	   => true,
	  'height'        	   => 150,
	  //'default-text-color'     => '#e5e5e5',
	  'header-text'            => true,
	  //'default-image' 	   => get_template_directory_uri() . '/images/logotype.jpg',
	  'uploads'       	   => true,
	) );

	// This feature enables Featured Images (also known as post thumbnails).
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(540,230,!1);

	// This feature enables post and comment RSS feed links to <head>.
	add_theme_support('automatic-feed-links');

	// Add HTML5 elements
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', 'gallery', 'caption', ) );

	// Add Title-tag
	add_theme_support('title-tag');

	// This feature enables menu.
	register_nav_menus( array(
			'primary' => __( 'Primary', 'anarcho-notepad' ) ));

	// This feature enables Link Manager in Admin page.
	add_filter( 'pre_option_link_manager_enabled', '__return_true' );
}
add_action('after_setup_theme', 'anarcho_notepad_setup');

//Adding backwards compatibility for title-tag less than WordPress version 4.1
if ( ! function_exists( '_wp_render_title_tag' ) ) {
    function anarcho_render_title() {
        ?>
            <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php
    }
    add_action( 'wp_head', 'anarcho_render_title' );
}

/* Add Theme Information Page */
require get_template_directory() . '/inc/theme_info.php';

/* Add Theme Customizer functionality */
require get_template_directory() . '/inc/customizer.php';

/* Add IE conditional HTML5 shim to header */
function anarcho_add_ie_html5_shim () {
     global $is_IE;
     if ($is_IE)
    	echo '<!--[if lt IE 9]>';
    	echo '<script src="', get_template_directory_uri() .'/js/html5.js"></script>';
    	echo '<![endif]-->';
}
add_action('wp_head', 'anarcho_add_ie_html5_shim');

/* This feature enables widgets area in the sidebar */
function anarcho_widgets_init() {
	register_sidebar(array(
			'name' => __('Sidebar Area 1', 'anarcho-notepad'),
			'id' => 'sidebar-1',
			'description' => __('Widgets in this area will be shown below "Pages".', 'anarcho-notepad'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	));
	register_sidebar(array(
			'name' => __('Sidebar Area 2', 'anarcho-notepad'),
			'id' => 'sidebar-2',
			'description' => __('Widgets in this area will be shown below "What is this place".', 'anarcho-notepad'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	));
	register_sidebar(array(
			'name' => __('Sidebar Area 3', 'anarcho-notepad'),
			'id' => 'sidebar-3',
			'description' => __('Widgets in this area will be shown below "Friends & Links".', 'anarcho-notepad'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	));
	register_sidebar(array(
			'name' => __('Sidebar Area 4', 'anarcho-notepad'),
			'id' => 'sidebar-4',
			'description' => __('Widgets in this area will be shown below "Recent Posts".', 'anarcho-notepad'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'anarcho_widgets_init' );

/* This feature enables widgets area in the footer */
function anarcho_widgets_footer_init() {
	register_sidebar(array(
			'name' => __('Footer Area 1', 'anarcho-notepad'),
			'id' => 'footer-1',
			'description' => __('Widgets in this area will be shown left.', 'anarcho-notepad'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	));
		register_sidebar(array(
			'name' => __('Footer Area 2', 'anarcho-notepad'),
			'id' => 'footer-2',
			'description' => __('Widgets in this area will be shown center.', 'anarcho-notepad'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	));
		register_sidebar(array(
			'name' => __('Footer Area 3', 'anarcho-notepad'),
			'id' => 'footer-3',
			'description' => __('Widgets in this area will be shown right.', 'anarcho-notepad'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'anarcho_widgets_footer_init' );

/* Adds a custom default avatar */
function anarcho_avatar( $avatar_defaults ) {
	$myavatar = get_stylesheet_directory_uri() . '/images/anarchy-symbol.png';
	$avatar_defaults[$myavatar] = 'Anarcho symbol';
	return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'anarcho_avatar' );

/* Include Font-Awesome styles */
function anarcho_include_font_awesome_styles() {
    wp_register_style( 'font_awesome_styles', get_template_directory_uri() . '/fonts/font-awesome-4.4.0/css/font-awesome.min.css', 'screen' );
    wp_enqueue_style( 'font_awesome_styles' );
}
add_action( 'wp_enqueue_scripts', 'anarcho_include_font_awesome_styles' );

/* Enable smoothscroll.js */
function anarcho_include_smoothscroll_script() {
	wp_enqueue_script( 'back-top', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '',  true );
}
add_action( 'wp_enqueue_scripts', 'anarcho_include_smoothscroll_script' );

/* Display block "About the Author" */
function anarcho_author_bio() {
    if(get_theme_mod('disable_about_bio') !== '1') {
	if ( ( get_the_author_meta( 'description' ) != '' ) ) echo esc_html(get_template_part( 'author-bio' ));
    }
}

/* Red data ribbons */
function anarcho_ribbons() {
    if(get_theme_mod('disable_ribbons') !== '1') {
      if(get_theme_mod('enable_year_ribbons') !== '1') {
        if ( is_home() || is_category() || is_archive() || is_search() ) {
           printf( '<a href="%1$s">',
                esc_url( get_permalink() )
           );
        }
        printf( '<div class="date-tab">
                     <span class="month">%1$s</span>
                     <span class="day">%2$s</span>
                 </div><!-- .date-tab -->',
             esc_attr( get_the_date('F') ),
             esc_attr( get_the_date('j') )
        );
        if ( is_home() || is_category() || is_archive() || is_search() ) {
           printf( '</a>' ); }
      } else {
                if ( is_home() || is_category() || is_archive() || is_search() ) {
           printf( '<a href="%1$s">',
                esc_url( get_permalink() )
           );
        }
        printf( '<div class="date-tab">
                     <span class="month">%1$s</span>
                     <span class="day">%2$s</span>
                 </div><!-- .date-tab -->',
             esc_attr( get_the_date('F j') ),
             esc_attr( get_the_date('Y') )
        );
        if ( is_home() || is_category() || is_archive() || is_search() ) {
           printf( '</a>' ); }
      }
    }
}

/* Enable Breadcrumbs */
function anarcho_breadcrumbs() {
 if(get_theme_mod('enable_breadcrumbs') == '1') {
	$delimiter = '&raquo;';
	$before = '<span>';
	$after = '</span>';
	echo '<nav id="breadcrumbs">';
	global $post;
	$homeLink = esc_url( home_url() );
	echo '<a href="' . $homeLink . '" style="font-family: FontAwesome; font-size: 20px; vertical-align: bottom;">&#xf015;</a> ' . $delimiter . ' ';
 if ( is_category() ) {
	global $wp_query;
	$cat_obj = $wp_query->get_queried_object();
	$thisCat = $cat_obj->term_id;
	$thisCat = get_category($thisCat);
	$parentCat = get_category($thisCat->parent);
 if ($thisCat->parent != 0) echo (get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ')) ;
	echo $before . __('Archive by category ', 'anarcho-notepad') . '"' . single_cat_title('', false) . '"' . $after;
 } elseif ( is_day() ) {
	echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
	echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
	echo $before . __('Archive by date ', 'anarcho-notepad') . '"' . get_the_time('d') . '"' . $after;
 } elseif ( is_month() ) {
	echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
	echo $before . __('Archive by month ', 'anarcho-notepad') . '"' . get_the_time('F') . '"' . $after;
 } elseif ( is_year() ) {
	echo $before . __('Archive by year ', 'anarcho-notepad') . '"' . get_the_time('Y') . '"' . $after;
 } elseif ( is_single() && !is_attachment() ) {
 if ( get_post_type() != 'post' ) {
	$post_type = get_post_type_object(get_post_type());
	$slug = $post_type->rewrite;
	echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>' . $delimiter . ' ';
	echo $before . get_the_title() . $after;
 } else {
	$cat = get_the_category(); $cat = $cat[0];
	echo ' ' . get_category_parents($cat, TRUE, ' ' . $delimiter . ' ') . ' ';
	echo $before . __('You currently reading ', 'anarcho-notepad') . '"' . get_the_title() . '"' .  $after;
 }
/* } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
	$post_type = get_post_type_object(get_post_type());
	echo $before . $post_type->labels->singular_name . $after;*/
 } elseif ( is_attachment() ) {
	$parent_id  = $post->post_parent;
	$breadcrumbs = array();
	while ($parent_id) {
	$page = get_page($parent_id);
	$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
	$parent_id    = $page->post_parent;
 }
	$breadcrumbs = array_reverse($breadcrumbs);
	foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';
	echo $before . 'You&apos;re currently viewing "' . get_the_title() . '"' . $after;
 } elseif ( is_page() && !$post->post_parent ) {
	echo $before . 'You&apos;re currently reading "' . get_the_title() . '"' . $after;
 } elseif ( is_page() && $post->post_parent ) {
	$parent_id  = $post->post_parent;
	$breadcrumbs = array();
	while ($parent_id) {
	$page = get_page($parent_id);
	$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
	$parent_id    = $page->post_parent;
 }
	$breadcrumbs = array_reverse($breadcrumbs);
	foreach ($breadcrumbs as $crumb) echo ' ' . $crumb . ' ' . $delimiter . ' ';
	echo $before . __('You currently reading ', 'anarcho-notepad') . '"' . get_the_title() . '"' . $after;
 } elseif ( is_search() ) {
	echo $before . __('Search results for ', 'anarcho-notepad') . '"' . get_search_query() . '"' . $after;
 } elseif ( is_tag() ) {
	echo $before . __('Archive by tag ', 'anarcho-notepad') . '"' . single_tag_title('', false) . '"' . $after;
 } elseif ( is_author() ) {
	global $author;
	$userdata = get_userdata($author);
	echo $before . __('Articles posted by ', 'anarcho-notepad') . '"' . $userdata->display_name . '"' . $after;
 } elseif ( is_404() ) {
	echo $before . __('You got it ', 'anarcho-notepad') . '"' . 'Error 404 not Found' . '"&nbsp;' . $after;
 }
 if ( get_query_var('paged') ) {
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
	echo ('Page') . ' ' . get_query_var('paged');
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
 }
	echo '</nav>';
 }
}

/*
 * Page Navigation
 * Display navigation to next/previous set of posts when applicable
 */
function anarcho_page_nav() {
 if(get_theme_mod('enable_page-nav') == '1') {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;
  $total = 0;
  $a['mid_size'] = 3;
  $a['end_size'] = 1;
  $a['prev_text'] = __('Previous page', 'anarcho-notepad');
  $a['next_text'] = __('Next page', 'anarcho-notepad');
  if ($max > 0) echo '<nav id="page-nav">';
  if ($total == 1 && $max > 0) $pages = '<span class="pages-nav">' . __('Page ', 'anarcho-notepad') . $current . __(' of the ', 'anarcho-notepad') . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 0) echo '</nav><br/>';
 }
 else {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'anarcho-notepad' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( '<i class="fa fa-arrow-left"></i> Older posts' ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( 'Newer posts <i class="fa fa-arrow-right"></i>' ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
 }
}

/*
 * Post navigation
 * Display navigation to next/previous post when applicable
 */
function anarcho_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'anarcho-notepad' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', '<i class="fa fa-arrow-left"></i> %title' ); ?>
			<?php next_post_link( '%link', '%title <i class="fa fa-arrow-right"></i>' ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

/*
 * Comments
 * Enable comment_reply
 */
function anarcho_include_comment_reply() {
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action( 'wp_enqueue_scripts', 'anarcho_include_comment_reply' );

/*
 * Template for comments and pingbacks.
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function anarcho_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'anarcho-notepad' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'anarcho-notepad' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite>By <b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( '(Post author) ', 'anarcho-notepad' ) . '</span>' : ''
					);
					printf( '<b>on <a href="%1$s"><time datetime="%2$s">%3$s</time></a></b>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						sprintf( '%1$s', get_comment_date( 'j F, Y' ) )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'anarcho-notepad' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'anarcho-notepad' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'anarcho-notepad' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}

/*
 * Copyright
 * Enable info about copyright
 */
function anarcho_copyright() {
 if(get_theme_mod('disable_anarcho_copy') !== '1') {
     $anarcho_copy_uri = "http://mycyberuniverse.com/author.html";
     $anarcho_copy_text = 'Theme "Anarcho Notepad" designed and engineered by Arthur "Berserkr" Gareginyan.';
     echo '<a title="Theme author" target="_blank" href=' . $anarcho_copy_uri . '>' . $anarcho_copy_text . '</a></br>';
 }
}
add_action ('wp_footer','anarcho_copyright', 999);

/*
 * Queries
 * Display info about a database queries
 */
function anarcho_mysql_queries() {
 if(get_theme_mod('show_info_line') == '1') {
 	echo "\n";
	echo get_num_queries();
	_e(' queries in ', 'anarcho-notepad');
	timer_stop(1);
	_e(' seconds', 'anarcho-notepad');
	echo ' / ';
	echo round(memory_get_usage()/1024/1024, 2);
	_e(' mb', 'anarcho-notepad');
	echo "\n";
 }
}
add_action ('wp_footer','anarcho_mysql_queries', 999);

/*
 * Top Button
 * Enable Top Button
 */
function anarcho_top_button() {
 if(get_theme_mod('disable_top_button') !== '1') {
	echo '<a id="back-top" href="#top"><i class="fa fa-arrow-up fa-lg"></i></a>';
 }
}
add_action ('wp_footer','anarcho_top_button', 999);

/*
 * No Content
 * The Message if no content
 */
function anarcho_not_found() {
	?>
		<div class="no-results">
			<h1><?php _e('Not Found', 'anarcho-notepad'); ?></h1>
			<p><?php _e('Sorry, but you are looking for something that isn\'t here.', 'anarcho-notepad'); ?></p>
		</div>
	<?php
}

/*
 * Entry Meta
 * Display Entry Meta
 */
function anarcho_entry_meta() {
	?>
           <div class="meta">
	<?php
		if ( is_page() ) {
			if ((the_category() != '')) {
				?><i class="fa fa-folder-open"></i> <?php _e('Category: ', 'anarcho-notepad'); the_category(', ');
			}
			edit_post_link(__('EDIT', 'anarcho-notepad' ), ' | <i class="fa fa-pencil"> ', '</i>');
		} elseif ( is_single() ) {
			_e('Posted ', 'anarcho-notepad'); the_date(get_option('m.d.Y')); _e(' by ', 'anarcho-notepad'); the_author(); _e(' in category "', 'anarcho-notepad'); the_category('", "'); edit_post_link(__('EDIT', 'anarcho-notepad' ), '" | <i class="fa fa-pencil"> ', '</i>');
			?>
			   <br/>
			<?php
			anarcho_author_bio();
		} elseif ( is_home() || is_category() || is_archive() || is_search() ) {
			?><i class="fa fa-folder-open"></i> <?php _e('Category: ', 'anarcho-notepad'); the_category(', '); ?> | <i class="fa fa-comment"></i> <?php comments_popup_link(__('LEAVE A COMMENT', 'anarcho-notepad' )); edit_post_link(__('EDIT', 'anarcho-notepad' ), ' | <i class="fa fa-pencil"> ', '</i>');
		} else {
			?><i class="fa fa-folder-open"></i> <?php _e('Category: ', 'anarcho-notepad'); the_category(', '); ?> | <i class="fa fa-comment"></i> <?php comments_popup_link(__('LEAVE A COMMENT', 'anarcho-notepad' )); edit_post_link(__('EDIT', 'anarcho-notepad' ), ' | <i class="fa fa-pencil"> ', '</i>');
		}
	?>
           </div>
	<?php
}

?>