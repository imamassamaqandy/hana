<?php
/**
 * @package Hana
 * @since Hana 1.0
 */
?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">

						<h1 class="entry-title"><?php the_title(); ?></h1>

						<div class="entry-meta">
							<?php hana_posted_on(); ?>
						</div><!-- .entry-meta -->

					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'hana' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta clearfix">
						<div class="pull-left">
						<?php
							$category_list = get_the_category_list( __( ', ', 'hana' ) );

							$tag_list = get_the_tag_list( '', __( ', ', 'hana' ) );

							if ( ! hana_categorized_blog() ) {

								if ( '' != $tag_list ) {
									$meta_text = __( 'This entry was tagged %2$s.', 'hana' );
								} else {

								}

							} else {

								if ( '' != $tag_list ) {
									$meta_text = __( 'This entry was posted in %1$s and tagged %2$s.', 'hana' );
								} else {
									$meta_text = __( 'This entry was posted in %1$s.', 'hana' );
								}

							}

							printf(
								$meta_text,
								$category_list,
								$tag_list
							);
						?>
						</div>

						<div class="pull-right">
							<?php edit_post_link( __( 'Edit', 'hana' ), '<span class="edit-link">', '</span>' ); ?>
						</div>

					</footer><!-- .entry-meta -->
					
				</article><!-- #post-## -->
