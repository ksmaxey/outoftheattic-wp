<div class="comments">

	<?php $fields = array(
		'author' => '<input id="author" placeholder="Name" name="author" type="text" value="'. esc_attr( $commenter['comment_author'] ) .'" />',
		'email'=> '<input id="email" placeholder="Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . $aria_req . ' />'
	);

	$args = array(
		'fields' => apply_filters( 'comment_form_default_fields', $fields )
	);

	comment_form($args);
	?>

<!-- DISPLAY LIST OF COMMENTS -->

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments(array(
	    'avatar_size' => '140',
	    'type' => 'comment',
	    'callback' => 'ahha_comments'
		)); ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>

</div>
