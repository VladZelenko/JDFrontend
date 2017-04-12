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
		$query = new WP_Query( array('post_type' => 'home-contact', 'posts_per_page' => 1 ) );
		if ($query->have_posts()):?>
		<section class="brief-info">
			<div class="container">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="row">
						<div class="col-md-3 col-lg-3">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="col-md-7 col-lg-7">
							<?php the_content(); ?>
						</div>
						<div class="col-md-2 col-lg-2">
							<a href="#" class="contact-btn">Contact Me</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
	<?php endif; wp_reset_postdata(); ?>


	<section class="posrtfolio-list">
		<div class="container">
			<div class="row">
				<ul class="portfolio-filter">
					<li data-filter="">All</li>
					<li data-filter="">Landing page</li>
					<li data-filter="">Blogs</li>
				</ul>

				<?php wp_list_categories( $args ); ?>
				<?php
				$query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 100));
				while($query->have_posts()) : $query->the_post();
				?>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<?php the_post_thumbnail(); ?>
					<a href="<?php the_permalink(); ?>" class="home-post-title"><?php the_title(); ?></a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();