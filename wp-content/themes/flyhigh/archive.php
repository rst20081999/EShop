<?php
/**
* Template Name: BlogPage
*
*/
get_header();
if(is_category()):
	$title=single_cat_title();
	$feild="category_name";
	$value=single_cat_title();
elseif(is_tag()):
	$title=single_tag_title();
	$feild="tag";
	$value=single_tag_title();
elseif(is_author()):
	the_post();
	$title=get_the_author();
	$feild="author";
	$value=get_the_author();
elseif(is_day()):
	$title=get_the_date();
	$feild="day";
	$value=get_the_date('j');
elseif(is_month()):
	$feild="monthnum";
	$title=get_the_date('F Y');
	$value=get_the_date('m');
elseif(is_year()):
	$feild="year";
	$title='Year: '.get_the_date('Y');	
	$value=get_the_date('Y');
else:
	$title='Archives';
endif;
?>
<div id="blogpage">
<div id=blogpost>
<h5><?php echo esc_html($title,'flyhigh'); ?></h5>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post',
    'paged'=>$paged,
	$feild=>$value,
);
// print_r($args);
$obituary_query = new WP_Query($args);
// print_r($obituary_query);
while ($obituary_query->have_posts()) : $obituary_query->the_post();
?>
<div id="thepost">
<div id="top">
<p id="date"><?php echo get_the_date('j');?>
<span><?php echo get_the_date('M');?></span>
</p>
<h3><?php the_title(); ?></h3>
</div>
<div id="bottom">
<div id="image-box">
    <?php
if (has_post_thumbnail( $post->ID ) ):
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID )); ?>
	<img src="<?php _e($image[0],'flyhigh') ?>"/>
	<?php 
	endif;
    ?>
    </div>
    <div id="bottom-right">
        <div id="author-comment-date">
            <p>by <span><?php the_author()?></span> on <?php echo get_the_date('j M Y')?></p>
            <span><?php echo get_comments_number();?> comments</span>
        </div>
        <div id="excerpt">
            <?php the_excerpt();?>
            <span>Read More</span>
        </div>
    </div>
</div>
</div>
<?php
endwhile;
?>
    <div id="pagination">
<?php
$total_pages = $obituary_query->max_num_pages;
if ($total_pages > 1){
    $current_page = max( 1, get_query_var('paged') );
    echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => '/page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'prev_text'    => __('<< prev'),
        'next_text'    => __('next >>'),
    ));
}
// Reset Post Data
wp_reset_postdata();
?>
 </div>
</div>
<div id="psidebar">
    <?php echo get_sidebar(); ?>
</div>
</div>
<?php 
get_sidebar();
get_footer();
?>