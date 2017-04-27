<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=page div and all content after
 *
 * @package Hana
 * @since Hana 1.0
 */
?>

			</div><!-- #content -->

		<?php get_sidebar(); ?>

		</div><!-- #main -->

		<footer id="footer" class="site-footer span12" role="contentinfo">

			<div class="site-info span7">

				<?php printf( __( '&#169 %1$s <a href="%2$s" title="%3$s" rel="home">%4$s</a>', 'hana' ), date( 'Y'), esc_url( home_url( '/' ) ), esc_attr( get_bloginfo( 'name' ) ), esc_attr( get_bloginfo( 'name' ) ) ); ?>
					
			</div><!-- .site-info -->

			<div class="site-credits span5">

				<?php printf( __( 'Theme by <a href="%1$s" title="%2$s" rel="designer">%3$s</a>.', 'hana' ), 'http://imamherlambang.net', 'Imam Herlambang', 'Imam Herlambang' ); ?>

			</div>

		</footer><!-- #footer -->

	</div><!-- .row -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>