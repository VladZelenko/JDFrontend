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
		<div class="container contact">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 contact-form">
					<?php echo do_shortcode('[contact-form-7 id="112" title="Contact form 1"]'); ?>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 contact-info">
					<h2 class="title"><?php echo get_theme_mod('contact_title'); ?></h2>
					<ul>
						<li>
							<a href="mailto:<?php echo get_theme_mod('email'); ?>">
								<i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_theme_mod('email'); ?>
							</a>
						</li>
						<li>
							<a href="tel:<?php echo get_theme_mod('phone'); ?>">
								<i class="fa fa-mobile" aria-hidden="true"></i><?php echo get_theme_mod('phone'); ?>
							</a>
						</li>
						<li>
							<a href="<?php echo get_theme_mod('site'); ?>" target="_blank">
								<i class="fa fa-globe" aria-hidden="true"></i><?php echo get_theme_mod('site'); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
