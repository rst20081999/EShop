<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flyhigh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'flyhigh' ); ?></a>
	<header id="masthead" class="site-header">
			<div id="logo"><img alt="logo" src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/logo.png',"flyhigh") ?>"/>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'Head-Menu',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
	</header>