<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Hana
 * @since Hana 1.0
 */

get_header(); ?>

			<div id="content" class="site-content span8" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php hana_content_nav( 'nav-below' ); ?>

					<?php
						comments_template( '', true );
					?>

				<?php endwhile; ?>

<?php get_footer(); ?>