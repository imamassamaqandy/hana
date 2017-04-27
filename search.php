<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Hana
 * @since Hana 1.0
 */

get_header(); ?>

			<div id="content" class="site-content span8" role="main">

				<?php if ( have_posts() ) : ?>

					<article>

						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'hana' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

					</article>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'search' ); ?>

					<?php endwhile; ?>

					<?php hana_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'search' ); ?>

				<?php endif; ?>

<?php get_footer(); ?>