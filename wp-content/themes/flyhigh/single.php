<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Flyhigh
 */

get_header();
?>
<?php the_post(); ?>
<div id="single-post">
	<div id="thepost">
		<h3><?php the_title();?></h3>
		<div id="author-comment-date">
            <p>by <span><?php echo get_the_author()?></span> on <?php echo get_the_date('j M Y')?></p>
            <span><?php echo get_comments_number();?> comments</span>
        </div>
		<div id="content">
		<?php if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID )); ?>
    	<img  src="<?php _e($image[0],'flyhigh') ?>"/>
	<?php 
	endif;?>
			<?php the_content(); ?>
			<p id="tags"><?php the_tags() ?></p>
		</div>
		<div id="comments">
			<h5>Comments</h5>
			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
		</div>
	</div>
	<div id="thesidebar">
		<?php get_sidebar();?>
	</div>
</div>
<?php
get_sidebar();
get_footer();
