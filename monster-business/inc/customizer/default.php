<?php
/**
 * Default theme options.
 *
 * @package Monster Business
 */

if ( ! function_exists( 'monster_business_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function monster_business_get_default_theme_options() {

	$defaults = array();

	$defaults['show_header_contact_info'] 	= true;
    $defaults['header_email']             	= __( 'info@creativthemes.com','monster-business' );
    $defaults['header_phone' ]            	= __( '+1-541-754-3010','monster-business' );
    $defaults['header_location' ]           = __( 'London, UK','monster-business' );
    $defaults['show_header_social_links'] 	= true;
    $defaults['header_social_links']		= array();

	// Featured Slider Section
	$defaults['disable_featured_slider']	= true;
	$defaults['number_of_sr_items']			= 3;
	$defaults['sr_content_type']			= 'sr_page';

	// Our Service Section
	$defaults['disable_service_section']	= true;
	$defaults['service_title']	   	 		= esc_html__( 'Our Services', 'monster-business' );
	$defaults['number_of_ss_column']		= 3;
	$defaults['number_of_ss_items']			= 3;
	$defaults['ss_content_type']			= 'ss_page';

	//Featured Planning Section	
	$defaults['disable_courses_section']	= true;
	$defaults['number_of_cs_column']		= 4;
	$defaults['number_of_cs_items']			= 4;
	$defaults['cs_content_type']			= 'cs_page';

	//Cta Section	
	$defaults['disable_cta_section']	   	= true;
	$defaults['background_cta_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['cta_small_description']	   	= esc_html__( 'Need More features?', 'monster-business' );
	$defaults['cta_description']	   	 	= esc_html__( 'Get Accesss To All Features of Monster', 'monster-business' );
	$defaults['cta_button_label']	   	 	= esc_html__( 'Purchase Now', 'monster-business' );
	$defaults['cta_button_url']	   	 		= '#';

	// Gallery Section
	$defaults['disable_gallery_section']	= true;
	$defaults['gallery_title']	   	 		= esc_html__( 'Amazing Projects', 'monster-business' );
	$defaults['number_of_gy_column']		= 3;
	$defaults['number_of_gy_items']			= 6;
	$defaults['gy_content_type']			= 'gy_page';

	// Blog Section
	$defaults['disable_blog_section']		= true;
	$defaults['blog_title']	   	 			= esc_html__( 'Latest News', 'monster-business' );
	$defaults['blog_category']	   			= 0; 
	$defaults['blog_number']				= 3;

	//General Section
	$defaults['readmore_text']				= esc_html__('Read More','monster-business');
	$defaults['excerpt_length']				= 40;
	$defaults['layout_options']				= 'right-sidebar';	

	//Footer section 		
	$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'monster-business' );

	// Pass through filter.
	$defaults = apply_filters( 'monster_business_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'monster_business_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function monster_business_get_option( $key ) {

		$default_options = monster_business_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;