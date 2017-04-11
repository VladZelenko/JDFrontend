<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JDFrontend
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">
			<div class="header-sidebar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-9 col-lg-9">
							<?php get_search_form(); ?>
						</div>
						<div class="col-sm-12 col-md-3 col-lg-3">
							<?php if ( is_active_sidebar( 'sidebar-header-1' ) ) : ?>
								<div id=f ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )"primary" role="complementary">
									<?php dynamic_sidebar( 'sidebar-header-1' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="flexbox">
					<h1 class="logo">
						<a href="#">
							<span class="accent-color">JD</span> Frontend
						</a>
					</h1>
					<nav class="top-nav accent-color">
						<a href="#" class="open-btn" id="open-btn-nav" onclick="openNav()">
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</a>
						<div id="nav" class="overlay">
							<a href="#" class="close-btn" onclick="closeNav()">&times;</a>
							<?php
							if( has_nav_menu('menu-1') ){
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'container' => false,
									'menu_class' => 'nav-list'
									));
							}
							?>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<div id="content" class="site-content">
