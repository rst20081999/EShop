<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flyhigh
 */

get_header();
?>

    <div id="belowgallery">
      <div id="content">
        <div id="title-bar">
          <p>D'SIGN IS THE SOUL</p>
          <button>View all</button>
        </div>
        <div id="main-gallery">
          <div id="image-box">
            <div id="images">
          <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/image-1.png',"flyhigh") ?>" />  
          </div>
          <div id="images">
          <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/image-1.png',"flyhigh") ?>" />  
          </div>
          <div id="images">
          <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/image-1.png',"flyhigh") ?>" />  
          </div>
          <div id="images">
          <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/image-1.png',"flyhigh") ?>" />  
          </div>
          <div id="images">
          <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/image-1.png',"flyhigh") ?>" />  
          </div>
          <div id="images">
          <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/image-1.png',"flyhigh") ?>" />  
          </div>
          </div>
        </div>
      </div>
    </div>


<?php
// get_sidebar();
get_footer();
