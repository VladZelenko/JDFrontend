<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JDFrontend
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-4 col-lg-4">
				<?php if ( is_active_sidebar( 'sidebar-footer-1' ) ) : ?>
					<div id=f ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )"primary" role="complementary">
						<?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="col-sm-12 col-md-4 col-lg-4 flexbox">
				<?php if ( is_active_sidebar( 'sidebar-footer-2' ) ) : ?>
					<div id=f ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )"primary" role="complementary">
						<?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
					</div>
				<?php endif; ?>
				<span class="copy"><?php echo get_theme_mod('copyright'); ?></span>
			</div>

			<div class="col-sm-12 col-md-4 col-lg-4">
				<?php if ( is_active_sidebar( 'sidebar-footer-3' ) ) : ?>
					<div id=f ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )"primary" role="complementary">
						<?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
					</div>
				<?php endif; ?>
			</div>

		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
