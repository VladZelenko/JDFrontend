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
		<?php the_post_thumbnail(); ?>
		<header>
			<h2 class="title"><?php the_title(); ?></h2>
			<ul class="post-info">
				<li>
					<i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('F j Y'); ?>
				</li>
				<li>
					<i class="fa fa-clock-o" aria-hidden="true"></i><?php the_time('G:i'); ?>
				</li>
			</ul>
		</header>
		<?php the_content(); ?>
		<footer>
			<span class="author"><?php the_author(); ?></span>
		</footer>
	</article>
</div>