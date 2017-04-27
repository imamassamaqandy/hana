<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @package Hana
 * @since Hana 1.0
 */
?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( is_singular() ) : ?>

					<header class="entry-header">

						<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'hana' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

						<div class="entry-meta">
							<?php hana_posted_on(); ?>
						</div><!-- .entry-meta -->

					</header><!-- .entry-header -->

					<?php endif; ?>

					<div class="entry-content">

						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'hana' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'hana' ), 'after' => '</div>' ) ); ?>
					
					</div><!-- .entry-content -->

					<footer class="entry-meta clearfix">
						
						<div class="pull-left">

							<?php if ( !is_singular() ) : ?>

							<?php hana_posted_on(); ?>

							<span class="sep"> &sdot; </span>

							<?php endif; ?>

							<?php
								/* translators: used between list items, there is a space after the comma */
								$categories_list = get_the_category_list( __( ', ', 'hana' ) );
								if ( $categories_list  ) :
							?>
							<span class="cat-links">
								<?php printf( __( 'Posted in %1$s', 'hana' ), $categories_list ); ?>
							</span>
							<?php endif; // End if categories ?>

						</div>

						<div class="pull-right">
							<span class="permalink">
								<?php printf( __( '<a href="%1$s" title="%2$s"></a>', 'hana' ), esc_url( get_permalink() ), 'Permalink to '.the_title_attribute( 'echo=0' ).'' ); ?>
							</span>
						</div>

					</footer><!-- .entry-meta -->

				</article><!-- #post-## -->