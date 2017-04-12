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
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<?php echo do_shortcode('[contact-form-7 id="112" title="Contact form 1"]'); ?>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6"></div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
