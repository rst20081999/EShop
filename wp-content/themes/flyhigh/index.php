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
    <div id="belowslider">
      <div id="content">
        <div id="data">
        <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/leaf.png',"flyhigh") ?>"/>
        <span><p id="data-heading">Advertising</p>
        <p id="para">Some content below too lorem isum scdf orem isum scdf</p></span>
        </div>
        <div id="data">
          <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/mobile.png',"flyhigh") ?>"/>
          <span><p id="data-heading">Multimedia</p>
        <p id="para">Some content below too orem isum scdf orem isum scdf orem isum scdf</p></span>
        </div>
        <div id="data">
        <img src="<?php _e(get_stylesheet_directory_uri().'/assets/images/home/camera.png',"flyhigh") ?>"/>
          <span><p id="data-heading">Photography</p>
        <p id="para">Some content below too orem isum scdf orem isum scdf orem isum scdf</p></span>
        </div>
      </div>
    </div>
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
