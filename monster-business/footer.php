<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monster Business
 */

/**
 *
 * @hooked monster_business_footer_start
 */
do_action( 'monster_business_action_before_footer' );

/**
 * Hooked - monster_business_footer_top_section -10
 * Hooked - monster_business_footer_section -20
 */
do_action( 'monster_business_action_footer' );

/**
 * Hooked - monster_business_footer_end. 
 */
do_action( 'monster_business_action_after_footer' );

wp_footer(); ?>

</body>  
</html>