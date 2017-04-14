<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JDFrontend
 */

?>
<div class="blog-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<header>
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<ul class="post-info">
				<li>
					<a href="<?php get_posts(); ?>" class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('F j Y'); ?></a>
				</li>
				<li>
					<i class="fa fa-clock-o" aria-hidden="true"></i><?php the_time('G:i'); ?>
				</li>
			</ul>
		</header>
		<?php the_excerpt(); ?>
		<footer>
		</footer>
	</article>
</div>