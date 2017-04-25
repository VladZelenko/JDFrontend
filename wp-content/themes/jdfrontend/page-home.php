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
					<div class="row contacts-section">
						<div class="col-sm-4 col-md-3 col-lg-3 contact-imgbox">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="col-sm-8 col-md-7 col-lg-7 contact-contentbox">
							<?php the_content(); ?>
						</div>
						<div class="col-sm-12 col-md-2 col-lg-2 button-box">
							<a href="http://jdfrontend/index.php/contact-us/" class="contact-btn accent-color">Contact Me</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
	<?php endif; wp_reset_postdata(); ?>


	<section class="posrtfolio-list">
		<div class="container">
			<div class="row">

				<?php
				$query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 100));
				while($query->have_posts()) : $query->the_post();
				?>
				<div class="col-sm-12 col-md-6 col-lg-4 portfolio-item">
					<div class="img-box">
						<?php the_post_thumbnail(); ?>
						<div class="overlay">
							<h3 class="title">Love Conquers All</h3>
							<ul>
								<li><a href="<?php the_permalink(); ?>" class="overlay-btn">1</a></li>
								<li><a href="#" class="overlay-btn">2</a></li>
							</ul>
						</div>
					</div>
				</div>


			<?php endwhile; ?>
		</div>
	</div>
</section>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();