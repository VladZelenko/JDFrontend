<?php
/**
 * JDFrontend Theme Customizer
 *
 * @package JDFrontend
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jdfrontend_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	//+++++++++++++++++++++++++++++++++++++++++GENERAL SETTINGS THEME+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	//
	//
	//header menu font color
	$wp_customize->add_setting('header_menu_font', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_menu_font', array(
		'label'      => __( 'Menu font color', 'jdfrontend' ),
		'section'    => 'colors',
		'settings'   => 'header_menu_font',
		'priority'	 => 1,
		)));
	//header menu font color - end

	//Header menu font color hover
	$wp_customize->add_setting('menu_font_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_font_hover', array(
		'label'      => __( 'Menu font color hover', 'jdfrontend' ),
		'section'    => 'colors',
		'settings'   => 'menu_font_hover',
		'priority'	 => 2,
		)));
	//Header menu font color hover - end

	//Background header-menu
	$wp_customize->add_setting('bg_menu', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_menu', array(
		'label'      => __( 'Header background menu', 'jdfrontend' ),
		'section'    => 'colors',
		'settings'   => 'bg_menu',
		'priority'	 => 3,
		)));
	//Background header-menu - end
	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	$wp_customize->add_panel( 'blog_panel', array(
		'title' => 'Blog post page', //название панели
		'priority' => 10,
		));

}
add_action( 'customize_register', 'jdfrontend_customize_register' );

function mytheme_customize_css()
{
	?>
	<style type="text/css">
		.nav-list li a {color: <?php echo get_theme_mod('header_menu_font'); ?>;}
		.nav-list li a:hover {color: <?php echo get_theme_mod('menu_font_hover'); ?>;}
		.top-nav {background-color: <?php echo get_theme_mod('bg_menu'); ?>;}
	</style>
	<?php
}
add_action( 'wp_head', 'mytheme_customize_css');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jdfrontend_customize_preview_js() {
	wp_enqueue_script( 'jdfrontend_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'jdfrontend_customize_preview_js' );
