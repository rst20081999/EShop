<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flyhigh
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	// $comments = get_comments( array( 'post_id' => $post->ID ) );
	// print_r($comments);
	if ( have_comments() ) :

		?>
		<!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">

			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'callback'=>'better_comments'
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'flyhigh' ); ?></p>
			<?php
		endif;

	endif;
	 // Check for have_comments().
	 ?>
		 <?php
	 $args=array(
		'title_reply_to'=>' ',
		'cancel_reply_link'=>" ",
		'comment_notes_before'=>" ",
		'logged_in_as'=>' ',
		'comment_form_comment'=> ' ',
		'class_container'=>'df',
		'comment_author_email'=>" ",
		'comment_field'=>'<label id="comment-label" for="comment">' . _x( 'Post your Comment', 'noun' ).'</label><textarea id="comment-textarea" name="comment" placeholder="comment here" cols="45" rows="5" aria-required="true"></textarea>',
	);
	comment_form($args);
	?>
</div><!-- #comments -->
