<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
				<div class="col-sm-12 col-md-9 col-lg-9">
					<?php
					if ( have_posts() ) : ?>

					<?php	while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
				<?php
				the_posts_navigation( array(
					'next_text'          => 'Назад',
					'prev_text'          => 'Вперед',
					'screen_reader_text' => ' ',
					)); ?>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3">
					<?php get_sidebar(); ?>
				</div>

			</div>
		</div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
