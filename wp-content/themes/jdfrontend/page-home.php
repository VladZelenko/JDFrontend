<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JDFrontend
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container brief-info">
			<div class="row">
				<div class="col-sm-12 col-md-3 col-lg-3">
					<?php echo get_theme_mod(''); ?>
				</div>
				<div class="col-sm-12 col-md-7 col-lg-7">
				
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2">
					<a href="#" class="primary-btn accent-color">
						<?php echo get_theme_mod(''); ?>
					</a>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
