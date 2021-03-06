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
				<div class="row">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php the_post_thumbnail(); ?>
							<h2 class="title"><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
	<?php endif; wp_reset_postdata(); ?>


	<?php
	$query = new WP_Query( array('post_type' => 'education', 'posts_per_page' => 3 ) );
	if ($query->have_posts()):?>
	<section class="education">
		<div class="container">
			<div class="row">
			<h2 class="title"><?php echo get_theme_mod('head_title_1'); ?></h2>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<h3 class="title"><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; wp_reset_postdata(); ?>


<?php
$query = new WP_Query( array('post_type' => 'skills', 'posts_per_page' => 100 ) );
if ($query->have_posts()):?>
<section class="skills">
	<div class="container">
		<div class="row">
		<h2 class="title"><?php echo get_theme_mod('head_title_2'); ?></h2>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 skillbox">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; wp_reset_postdata(); ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
