<?php
/**
 *
Template Name: Full Width Page
 *
 * @package Hana
 * @since Hana 1.0
 */

get_header(); ?>

			<div id="content" class="site-content span12" role="main">
				
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
