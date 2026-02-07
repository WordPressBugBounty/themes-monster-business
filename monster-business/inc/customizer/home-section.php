<?php
/**
 * Home Page Options.
 *
 * @package Monster Business
 */

$default = monster_business_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'monster-business' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/
require get_template_directory() . '/inc/customizer/home-sections/slider.php';
require get_template_directory() . '/inc/customizer/home-sections/services.php';
require get_template_directory() . '/inc/customizer/home-sections/courses.php';
require get_template_directory() . '/inc/customizer/home-sections/gallery.php';
require get_template_directory() . '/inc/customizer/home-sections/cta.php';
require get_template_directory() . '/inc/customizer/home-sections/blog.php';