<?php
/**
* Template Name: Portfolio
*
*/
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// $the_query = new WP_Query( array('posts_per_page'=>8,
// 'post_type'=>'Portfolios',
// 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
// ); 
?>
<div id="portfolio">
    <div id="top">
    <h3>
        DESIGN is the SOUL
    </h3>
    <div id="buttonlist">
        <a>Multimedia</a>
        <a>Advertising</a>
        <a>Photography</a>
    </div>
    </div>
    <div id="gallery">
    <?php
$args = array(
    'post_type' => 'Portfolios',
    'posts_per_page'=>6,
    'paged'=>$paged
);
$obituary_query = new WP_Query($args);
while ($obituary_query->have_posts()) : $obituary_query->the_post();
	if (has_post_thumbnail( $post->ID ) ):
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID )); ?>
	<div id="image">
	<a href="#TB_inline?&width=500&height=400&inlineId=<?php echo $post->ID;?>" class="thickbox">
    <div id="<?php echo $post->ID;?>" >
    <img  src="<?php _e($image[0],'flyhigh') ?>"/>
    </div>
    </a>
	</div>
	<?php 
	endif;
endwhile;
?>
    </div>
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
<?php add_thickbox(); ?>
<div id="my-content-id" style="display:none;">
     <p>
          This is my hidden content! It will appear in ThickBox when the link is clicked.
     </p>
</div>
 </div>
</div>


<?php
get_footer();
?>