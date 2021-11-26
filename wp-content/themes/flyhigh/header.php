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
<?php wp_body_open();
$logo=get_header_image();?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'flyhigh' ); ?></a>
	<header id="masthead" class="site-header">
		<div id="navbar">
			<div id="logo-img">
        <img alt="logo" src="<?php echo $logo;?>"/>
			</div>
			<div id="divforsearch">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'Head-Menu',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<div id="searchbar"><input type="text" placeholder="Search here"><span class="dashicons dashicons-search"></span></div>
			</div>
		</div>
	</header>
	<?php 
	if ( is_front_page() && is_home() ) :
	?>
	<div class="slidercontainer">  
        <div class="showSlide fade">  
            <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/slider-image.png',"flyhigh") ?>" />  
            <div class="content">Gearing up the ideas <br/></div>
            <div class="content2">Loremsom ipsum lorem sum ipsum kuchj nnjdf<br/></div>  
        </div>  
        <div class="showSlide fade">  
            <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/slider-image.png',"flyhigh") ?>"/>  
            <div class="content">Lorem ipsum sit ametdolor </div>  
        </div>  
  
        <div class="showSlide fade">  
            <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/slider-image.png',"flyhigh") ?>"/>  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
        <div class="showSlide fade">  
            <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/slider-image.png',"flyhigh") ?>"/>  
            <div class="content">Lorem ipsum dolor sit amet</div>  
        </div>  
        <!-- Navigation arrows -->  
        <a class="left" onclick="nextSlide(-1)"><span class="dashicons dashicons-arrow-left-alt"></span></a>  
        <a class="right" onclick="nextSlide(1)"><span class="dashicons dashicons-arrow-right-alt"></span></a>  
    </div>
	<?php endif; ?>
    <div id="belowslider">
      <div id="content">
        <div id="data">
        <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/leaf.png',"flyhigh") ?>"/>
        <span><p id="data-heading"><?php echo get_theme_mod('cf_belowslider_title1'); ?></p>
        <p id="para"><?php echo get_theme_mod('cf_belowslider_desc1'); ?></p></span>
        </div>
        <div id="data">
          <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/mobile.png',"flyhigh") ?>"/>
          <span><p id="data-heading"><?php echo get_theme_mod('cf_belowslider_title2'); ?></p>
        <p id="para"><?php echo get_theme_mod('cf_belowslider_desc2'); ?></p></span>
        </div>
        <div id="data">
        <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/camera.png',"flyhigh") ?>"/>
          <span><p id="data-heading"><?php echo get_theme_mod('cf_belowslider_title3'); ?></p>
        <p id="para"><?php echo get_theme_mod('cf_belowslider_desc3'); ?></p></span>
        </div>
      </div>
    </div>