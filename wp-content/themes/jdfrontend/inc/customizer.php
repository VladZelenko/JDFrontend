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
		'label'      => __( 'Header background-color menu', 'jdfrontend' ),
		'section'    => 'colors',
		'settings'   => 'bg_menu',
		'priority'	 => 3,
		)));
	//Background header-menu - end

	//Background logo + header-menu
	$wp_customize->add_setting('bg_header', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_header', array(
		'label'      => __( 'Header background-color', 'jdfrontend' ),
		'section'    => 'colors',
		'settings'   => 'bg_header',
		'priority'	 => 4,
		)));
	//Background logo + header-menu - end

	//Background footer
	$wp_customize->add_setting('bg_footer', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_footer', array(
		'label'      => __( 'Footer background-color', 'jdfrontend' ),
		'section'    => 'colors',
		'settings'   => 'bg_header',
		'priority'	 => 5,
		)));
	//Background footer - end

	//copyright
	$wp_customize->add_setting('copyright', array( 'default'=> ''));
	$wp_customize->add_control(
		'copyright',
		array(
			'label'    => __( 'Copyright', 'bg_footer' ),
			'section'  => 'title_tagline',
			'settings' => 'copyright',
			'type'     => 'text',
			));
	//copyright - end


	//Background footer
	$wp_customize->add_setting('copyright_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_color', array(
		'label'      => __( 'Copyright color', 'jdfrontend' ),
		'section'    => 'colors',
		'settings'   => 'copyright_color',
		'priority'	 => 6,
		)));
	//Background footer - end

	//accent color
	$wp_customize->add_setting('accent_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
		'label'      => __( 'Accent color', 'jdfrontend' ),
		'section'    => 'colors',
		'settings'   => 'accent_color',
		'priority'	 => 6,
		)));
	//accent color - end

	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

		//+++++++++++++++++++++++++++++++++++++++++HOME PAGE++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	//
	//
	$wp_customize->add_panel( 'home_panel', array(
		'title' => 'Home page',
		'priority' => 1,
		));
	$wp_customize->add_section( 'content_section' , array(
		'title'      => __( 'Title blog page', 'businessplus' ),
		'priority'   => 30,
		'panel'			 => 'blog_panel',
		));
	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

}
add_action( 'customize_register', 'jdfrontend_customize_register' );

function mytheme_customize_css()
{
	?>
	<style type="text/css">
		.accent-color {background-color: <?php echo get_theme_mod('accent_color'); ?>;}
		.nav-list li a {color: <?php echo get_theme_mod('header_menu_font'); ?>;}
		.nav-list li a:hover {color: <?php echo get_theme_mod('menu_font_hover'); ?>;}
		.top-nav {background-color: <?php echo get_theme_mod('bg_menu'); ?>;}
		.headbox-menu {background-color: <?php echo get_theme_mod('bg_header'); ?>;}
		.site-footer {background-color: <?php echo get_theme_mod('bg_footer'); ?>;}
		.site-footer .copy {color: <?php echo get_theme_mod('copyright_color'); ?>;}

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
