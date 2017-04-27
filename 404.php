<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Hana
 * @since Hana 1.0
 */

get_header(); ?>
			
			<div id="content" class="site-content span8" role="main">
				
				<article id="post-0" class="post error404 not-found">

					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'hana' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'hana' ); ?></p>

						<?php get_search_form(); ?>

						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						<div class="widget">
							<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'hana' ); ?></h2>
							<ul>
							<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
							</ul>
						</div><!-- .widget -->

						<?php
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives.', 'hana' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
						?>

					</div><!-- .entry-content -->

				</article><!-- #post-0 .post .error404 .not-found -->

<?php get_footer(); ?>