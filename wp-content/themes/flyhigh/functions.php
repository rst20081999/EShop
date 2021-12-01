<?php
/**
 * Flyhigh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Flyhigh
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'flyhigh_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function flyhigh_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Flyhigh, use a find and replace
		 * to change 'flyhigh' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'flyhigh', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		add_theme_support('post-thumbnails');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'flyhigh' ),
				'Head-Menu'=>esc_html__('Menu','flyhigh')
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'flyhigh_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'flyhigh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function flyhigh_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'flyhigh_content_width', 640 );
}
add_action( 'after_setup_theme', 'flyhigh_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function flyhigh_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'flyhigh' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'flyhigh' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'flyhigh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function flyhigh_scripts() {
	wp_enqueue_style( 'flyhigh-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'flyhigh-style', 'rtl', 'replace' );

	wp_enqueue_script( 'flyhigh-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'flyhigh_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function cf_belowslider($wp_customize){
	$wp_customize->add_section('cf_belowslider_section',array(
		'title'=>'Below Slider',
	));
	custom_setting_control('cf_belowslider_title1','Title 1','cf_belowslider_title1_control','Title 1','cf_belowslider_section',$wp_customize);
	custom_setting_control('cf_belowslider_desc1','Desc 1','cf_belowslider_desc1_control','Desc 1','cf_belowslider_section',$wp_customize);
	custom_setting_control('cf_belowslider_title2','Title 2','cf_belowslider_title2_control','Title 2','cf_belowslider_section',$wp_customize);
	custom_setting_control('cf_belowslider_desc2','Desc 2','cf_belowslider_desc2_control','Desc 2','cf_belowslider_section',$wp_customize);
	custom_setting_control('cf_belowslider_title3','Title 3','cf_belowslider_title3_control','Title 3','cf_belowslider_section',$wp_customize);
	custom_setting_control('cf_belowslider_desc3','Desc 3','cf_belowslider_desc3_control','Desc 3','cf_belowslider_section',$wp_customize);
	
	$wp_customize->add_section('cf_footer',array(
		'title'=>'Footer',
	));
	custom_setting_control('cf_footer_ltitle','Left Title','cf_footer_ltcontrol','Left Title','cf_footer',$wp_customize);
	custom_setting_control('cf_footer_ldesc','Left Desc','cf_footer_ldcontrol','Left Desc','cf_footer',$wp_customize);
	custom_setting_control('cf_footer_rtitle','Right Title','cf_footer_rtcontrol','Right Title','cf_footer',$wp_customize);
	custom_setting_control('cf_footer_rdesc','Right Desc','cf_footer_rdcontrol','Right Desc','cf_footer',$wp_customize);
	custom_setting_control('cf_footer_email','Email ID','cf_footer_email_control','Email ID','cf_footer',$wp_customize);
	custom_setting_control('cf_footer_social_fb','#','cf_footer_social_control_fb','FacePortfolio','cf_footer',$wp_customize);
	custom_setting_control('cf_footer_social_google','#','cf_footer_social_control_google','Google','cf_footer',$wp_customize);
	custom_setting_control('cf_footer_social_twitter','#','cf_footer_social_control_twitter','Twitter','cf_footer',$wp_customize);
	custom_setting_control('cf_footer_social_pinterest','#','cf_footer_social_control_pinterest','Pinterest','cf_footer',$wp_customize);
	custom_setting_control('cf_footer_social_linkedin','#','cf_footer_social_control_linkedin','Linked In','cf_footer',$wp_customize);
	

}
function custom_setting_control($setting_id,$default_title,$control_id,$control_label,$section_id,$wp_customize){
	$wp_customize->add_setting($setting_id,array(
		'default'=>$default_title
	));
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,$control_id,array(
		'label'=>$control_label,
		'section'=>$section_id,
		'settings'=>$setting_id
	)));
}
add_action('customize_register','cf_belowslider');

function customPostPortfolio()
{
	// Set UI labels for Custom Post Type
	$labels = [
		'name' => _x('Portfolio', 'Post Type General Name', 'portfoliodomain'),
		'singular_name' => _x('Portfolios', 'Post Type Singular Name', 'portfoliodomain'),
		'menu_name' => __('Portfolio', 'portfoliodomain'),
		'parent_item_colon' => __('Parent Portfolio', 'portfoliodomain'),
		'all_items' => __('All Portfolios', 'portfoliodomain'),
		'view_item' => __('View Portfolio', 'portfoliodomain'),
		'add_new_item' => __('Add New Portfolio', 'portfoliodomain'),
		'add_new' => __('Add New', 'portfoliodomain'),
		'edit_item' => __('Edit Portfolio', 'portfoliodomain'),
		'update_item' => __('Update Portfolio', 'portfoliodomain'),
		'search_items' => __('Search Portfolio', 'portfoliodomain'),
		'not_found' => __('Not Found', 'portfoliodomain'),
		'not_found_in_trash' => __('Not found in Trash', 'portfoliodomain'),
	];

	// Set other options for Custom Post Type

	$args = [
		'label' => __('Portfolios', 'portfoliodomain'),
		'description' => __('Portfolio news and reviews', 'portfoliodomain'),
		'labels' => $labels,
		// Features this CPT supports in Post Editor
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies' => ['genres'],
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
	];

	// Registering your Custom Post Type
	register_post_type('Portfolios', $args);
}
add_action('init','customPostPortfolio');
add_action('init', 'init_theme_method');
 
function init_theme_method() {
   add_thickbox();
}
function better_comments($comment, $args, $depth){
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	 <div class="comment">
		 <div class="icon-thumbnail">
		 <span class="dashicons dashicons-admin-comments"></span>
		 <span class="comment-by">
					 <span id="author"><?php echo get_comment_author() ?></span>
					 
			 <span class="date float-right">said on <?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?></span>

				 </span>
				 
		 </div>
		 <div class="comment-block">
			 <div class="comment-arrow"></div>
				 <?php if ($comment->comment_approved == '0') : ?>
					 <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
					 <br />
				 <?php endif; ?>
			 <p> <?php comment_text() ?></p>
		 </div>
		 <div class="float-right">
						 <span> <a href="#"><i class="fa fa-reply"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span>
					 </div>
		 </div>
 
 <?php
		 }

		//  function wpsites_customize_comment_form_text_area($arg) {
		// 	$arg['comment_field'] = '<label for="comment">' . _x( 'Your Feedback Is Appreciated', 'noun' ) . '</label><textarea id="comment" name="comment" placeholder="Please Use Pastebin or Github Gists If You Want To Leave PHP Code In Your Comment. Thanks!"cols="45" rows="1" aria-required="true"></textarea></p></div>';
		// 	return $arg;
		// }
		
		// add_filter('comment_form_defaults', 'wpsites_customize_comment_form_text_area');
		add_filter( 'comment_form_default_fields', 'wc_comment_form_change_cookies' );
function wc_comment_form_change_cookies( $fields ) {
	$commenter = wp_get_current_commenter();

	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

	$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label for="wp-comment-cookies-consent">'.__('Remember Me!', 'textdomain').'</label></p>';
	return $fields;
}