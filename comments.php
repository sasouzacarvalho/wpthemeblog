<?php

if ( post_password_required() )
	return;
?>

	<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( 
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', '' ) ),
					esc_attr(number_format_i18n( get_comments_number()) ),
					'<span>' . get_the_title() . '</span>'
				);
			?>            
		</h2>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', '' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_attr__( '&larr; Older Comments', '' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_attr__( 'Newer Comments &rarr;', '' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use () to format the comments.
				 * If you want to override this in a child theme, then you can
				 * define () and that will be used instead.
				 * See () in inc/template-tags.php for more.
				 */
				wp_list_comments( array( 'callback' => '' ) );
			?>
		</ol><!-- .comment-list -->
	<?php endif; // have_comments() ?>
	<?php
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php esc_html_e( 'Comments are closed.', '' ); ?></p>
		<?php endif; ?>
	<?php comment_form(); ?>
</div><!-- #comments -->