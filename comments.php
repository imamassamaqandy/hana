<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to hana_comment() which is
 * located in the includes/templates.php file.
 *
 * @package Hana
 * @since Hana 1.0
 */
?>

<?php
	
	if ( post_password_required() )
		return;
?>
				
				<div id="comments" class="comments-area">

				<?php if ( have_comments() ) : ?>
					<h2 class="comments-title">
						<?php
							printf( _nx( 'One response on &ldquo;%2$s&rdquo;', '%1$s responses on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'hana' ),
								number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
						?>
					</h2>

					<ol class="comment-list">
						<?php
							/* Loop through and list the comments. Tell wp_list_comments()
							 * to use hana_comment() to format the comments.
							 * If you want to overload this in a child theme then you can
							 * define hana_comment() and that will be used instead.
							 * See hana_comment() in inc/template-tags.php for more.
							 */
							wp_list_comments( array( 'callback' => 'hana_comment' ) );
						?>
					</ol><!-- .comment-list -->

					<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
					<nav id="comment-nav-below" class="navigation-comment" role="navigation">
						<h1 class="assistive-text"><?php _e( 'Comment navigation', 'hana' ); ?></h1>
						<div class="previous"><?php previous_comments_link( __( '&larr; Older Comments', 'hana' ) ); ?></div>
						<div class="next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'hana' ) ); ?></div>
					</nav><!-- #comment-nav-below -->
					<?php endif; // check for comment navigation ?>

				<?php endif; // have_comments() ?>

				<?php
					// If comments are closed and there are comments, let's leave a little note, shall we?
					if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
				?>
					<p class="no-comments"><?php _e( 'Comments are closed.', 'hana' ); ?></p>
				<?php endif; ?>

				<?php comment_form(); ?>

			</div><!-- #comments -->
