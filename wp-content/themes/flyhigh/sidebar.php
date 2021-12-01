<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flyhigh
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>
<div id="sidebar">
<div id="psidebar">
<h3>Portfolio</h3>
<div id="pgallery">
<?php
$args = array(
    'post_type' => 'Portfolios',
    'posts_per_page' => 8
);
$loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();
	if (has_post_thumbnail( $post->ID ) ):
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID )); ?>
	<div id="pimage">
	<img src="<?php _e($image[0],'flyhigh') ?>"/>
	</div>
	<?php 
	endif;
endwhile;

// Reset Post Data
wp_reset_postdata();
?>
</div>
</div>
<div id="recent-posts">
<h3>Recent Posts</h3>
<?php
$args2 = array(
    'post_type' => 'post',
    'posts_per_page' => 5
);
$loop = new WP_Query($args2);
while ($loop->have_posts()) : $loop->the_post(); ?>
<div id="posts1">
<?php
	if (has_post_thumbnail( $post->ID ) ):
	$image2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID )); ?>
	<div id="pimage">
	<img src="<?php _e($image2[0],'flyhigh') ?>"/>
	</div>
	<?php 
	endif;?>
	<div id="data">
	<p><?php the_title(); ?></p>
	<p id="admin">by <span><?php the_author()?></span> on <?php echo get_the_date('j M Y')?></p>
	</div>
</div>
	<?php endwhile;
// Reset Post Data
wp_reset_postdata();
?>
</div>
<div id="archives">
<h3>Archives</h3>
	<?php
wp_get_archives(
  array(
    'type'            => 'daily',
    'format'          => 'option',
	'show_post_count' => 'true',
  )
);
?>
</div>
</div>

<!-- #secondary -->
