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
	//header
	$wp_customize->add_section( 'header_section' , array(
		'title'      => __( 'Header', 'jdfrontend' ),
		'priority'   => 3,
		));
	//header - end
	//footer  section
	$wp_customize->add_section( 'footer_section' , array(
		'title'      => __( 'Footer', 'jdfrontend' ),
		'priority'   => 4,
		));
	//footer  section - end

	//header menu font color
	$wp_customize->add_setting('header_menu_font', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_menu_font', array(
		'label'      => __( 'Menu font color', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'header_menu_font',
		'priority'	 => 1,
		)));
	//header menu font color - end

	//Header menu font color hover
	$wp_customize->add_setting('menu_font_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_font_hover', array(
		'label'      => __( 'Menu font color hover', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'menu_font_hover',
		'priority'	 => 2,
		)));
	//Header menu font color hover - end

	//Current item header menu
	$wp_customize->add_setting('current_item', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'current_item', array(
		'label'      => __( 'Current item menu', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'current_item',
		'priority'	 => 3,
		)));
	//Current item header menu - end

	//Background header-menu
	$wp_customize->add_setting('bg_menu', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_menu', array(
		'label'      => __( 'Header background-color menu', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'bg_menu',
		'priority'	 => 4,
		)));
	//Background header-menu - end

	//Background logo + header-menu
	$wp_customize->add_setting('bg_header', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_header', array(
		'label'      => __( 'Header background-color', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'bg_header',
		'priority'	 => 5,
		)));
	//Background logo + header-menu - end

	//Background footer
	$wp_customize->add_setting('bg_footer', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_footer', array(
		'label'      => __( 'Footer background-color', 'jdfrontend' ),
		'section'    => 'footer_section',
		'settings'   => 'bg_header',
		'priority'	 => 6,
		)));
	//Background footer - end

	//copyright
	$wp_customize->add_setting('copyright', array( 'default'=> ''));
	$wp_customize->add_control(
		'copyright',
		array(
			'label'    => __( 'Copyright', 'jdfrontend' ),
			'section'  => 'title_tagline',
			'settings' => 'copyright',
			'type'     => 'text',
			));
	//copyright - end


	//copyright color
	$wp_customize->add_setting('copyright_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_color', array(
		'label'      => __( 'Copyright color', 'jdfrontend' ),
		'section'    => 'footer_section',
		'settings'   => 'copyright_color',
		'priority'	 => 6,
		)));
	//copyright color - end

	//accent color
	$wp_customize->add_setting('accent_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
		'label'      => __( 'Accent color', 'jdfrontend' ),
		'section'    => 'colors',
		'settings'   => 'accent_color',
		'priority'	 => 6,
		)));
	//accent color - end

	//header title
	$wp_customize->add_setting('head_title', array( 'default'=> ''));
	$wp_customize->add_control(
		'head_title',
		array(
			'label'    => __( 'Header title', 'jdfrontend' ),
			'section'  => 'title_tagline',
			'settings' => 'head_title',
			'type'     => 'textarea',
			));
	//header title - end

	//header title color
	$wp_customize->add_setting('header_title_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_title_color', array(
		'label'      => __( 'Header title color', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'header_title_color',
		'priority'	 => 6,
		)));
	//header  title color - end


	//Background header-sidebar
	$wp_customize->add_setting('bg_header_sidebar', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_header_sidebar', array(
		'label'      => __( 'Background header sidebar', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'bg_header_sidebar',
		'priority'	 => 7,
		)));
	//Background header-sidebar - end

	//Background logotype
	$wp_customize->add_setting('bg_logotype', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_logotype', array(
		'label'      => __( 'Background logotype', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'bg_logotype',
		'priority'	 => 8,
		)));
	//Background logotype - end

	//Logotype font color
	$wp_customize->add_setting('logotype_font_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'logotype_font_color', array(
		'label'      => __( 'Logotype font color', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'logotype_font_color',
		'priority'	 => 9,
		)));
	//Logotype font color - end

	//Logotype font color
	$wp_customize->add_setting('logo_font_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'logo_font_hover', array(
		'label'      => __( 'Logotype font color hover', 'jdfrontend' ),
		'section'    => 'header_section',
		'settings'   => 'logo_font_hover',
		'priority'	 => 9,
		)));
	//Logotype font color hover - end
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
	$wp_customize->add_section( 'home_contacts' , array(
		'title'      => __( 'Contacts', 'jdfrontend' ),
		'priority'   => 2,
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_section( 'buttons' , array(
		'title'      => __( 'Buttons', 'jdfrontend' ),
		'priority'   => 3,
		'panel'			 => 'home_panel',
		));

	//Background contacts section on home page
	$wp_customize->add_setting('contacts_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contacts_bg', array(
		'label'      => __( 'Background-color', 'jdfrontend' ),
		'section'    => 'home_contacts',
		'settings'   => 'contacts_bg',
		'priority'	 => 1,
		)));
	//Background contacts section on home page - end
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
		.header-title {color: <?php echo get_theme_mod('header_title_color'); ?>;}
		.logo a {color: <?php echo get_theme_mod('logotype_font_color'); ?>;}
		.logo a:hover, .logo a:focus {color: <?php echo get_theme_mod('logo_font_hover'); ?>;}
		.current-menu-item {color: <?php echo get_theme_mod('current_item'); ?>;}
		.contacts-section {background-color: <?php echo get_theme_mod('contacts_bg'); ?>;}
		.header-sidebar {background-color: <?php echo get_theme_mod('bg_header_sidebar'); ?>;}
		.logo-part-1 {background-color: <?php echo get_theme_mod('bg_logotype'); ?>;}
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
