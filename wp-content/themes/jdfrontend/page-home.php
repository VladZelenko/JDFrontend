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
					<?php echo get_theme_mod(''); ?>dasd
				</div>
				<div class="col-sm-12 col-md-7 col-lg-7">
					Name:  Albert Alex
					Phone:  +80 356 22 5688
					Email Address: info@domain.com
					Studio Address: Studio 36 Jump road Street, New York ACT 1955.
				</div>
				<div class="col-sm-12 col-md-2 col-lg-2">
					<a href="#" class="primary-btn accent-color">
						<?php echo get_theme_mod(''); ?>asdas
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<ul class="portfolio-filter">
					<li data-filter="">All</li>
					<li data-filter="">Landing page</li>
					<li data-filter="">Blogs</li>
				</ul>
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
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();