<?php
/**
 * @package Hana
 * @since Hana 1.0
 */
?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">

						<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'hana' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

						<?php if ( 'post' == get_post_type() ) : ?>

						<div class="entry-meta">
							<?php hana_posted_on(); ?>
							<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
								<?php printf( __( '&sdot; ', 'hana' ) ); ?><span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'hana' ), __( '1 Comment', 'hana' ), __( '% Comments', 'hana' ) ); ?></span>
							<?php endif; ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>

					</header><!-- .entry-header -->

					<?php if ( is_search() ) : ?>

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->

					<?php else : ?>
						<?php if( has_post_thumbnail() ) : ?>

					<div class="entry-thumbnail">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'thumb', array( 'class' => 'thumb', 'alt' => get_the_title(), 'title' => get_the_title() ) );?></a>
					</div>
					
						<?php endif; ?>

					<div class="entry-content">

						<?php excerpt_content(700); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'hana' ), 'after' => '</div>' ) ); ?>
					
					</div><!-- .entry-content -->

					<?php endif; ?>

					<footer class="entry-meta clearfix">
						<div class="pull-left">

					<?php if ( 'post' == get_post_type() ) : ?>
						
						<?php
							$categories_list = get_the_category_list( __( ', ', 'hana' ) );
							if ( $categories_list  ) : ?>

							<span class="cat-links">
								<?php printf( __( 'In %1$s', 'hana' ), $categories_list ); ?>
							</span>

							<?php endif; ?>

						<?php
							$tags_list = get_the_tag_list( '', __( ', ', 'hana' ) );
							if ( $tags_list ) :	?>

							<span class="tags-links">
								<span class="tag-icon"></span>
								<?php printf( __( '%1$s', 'hana' ), $tags_list ); ?>
							</span>

							<?php endif; // End if $tags_list ?>

					<?php endif; ?>
						</div>

						<div class="pull-right">
							<span class="permalink">
								<?php printf( __( '<a href="%1$s" title="%2$s"></a>', 'hana' ), esc_url( get_permalink() ), 'Permalink to '.the_title_attribute( 'echo=0' ).'' ); ?>
							</span>
						</div>

					</footer><!-- .entry-meta -->

				</article><!-- #post-## -->