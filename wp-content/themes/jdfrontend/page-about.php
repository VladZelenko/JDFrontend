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

		<?php
		$query = new WP_Query( array('post_type' => 'about-me', 'posts_per_page' => 1 ) );
		if ($query->have_posts()):?>
		<section class="about-me">
			<div class="container">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="row">
						<?php the_post_thumbnail(); ?>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php the_title(); ?>
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
	<?php endif; wp_reset_postdata(); ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
