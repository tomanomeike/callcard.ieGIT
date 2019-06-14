<?php
/*
* Plugin Name: Flash Footer Editor
* Plugin URI: https://sangams.com.np/remove-footer-credit-flash-theme-themegrill/
* Description: A simple plugin to remove and modify Flash (ThemeGrill) Theme footer credit text.
* Version: 2.2
* Author: Sangam Shrestha
* Author URI:  https://sangams.com.np
*/


defined('ABSPATH') or die('No script kiddies please!');


if (! function_exists('flash_custom_credits')) {
	
	add_action('init','remove_default_flash_credits');
	function remove_default_flash_credits(){		
		remove_action('flash_copyright_area','flash_footer_copyright');
	}
	
	add_filter('flash_copyright_area', 'flash_custom_credits');
	function flash_custom_credits(){
		$credit_value ='<div class="copyright"><span class="copyright-text">Copyright &copy; ' . date('Y') . ' <a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '.</span></a> ' .get_option('flash_custom_credits'). '</span></div>';
		echo $credit_value;
	}
	
}



if (! function_exists('flash_custom_options')) {
	
	add_action('customize_register', 'flash_custom_options', 100, 1);
	function flash_custom_options( $wp_customize ) {
		
		$wp_customize->add_section('flash_footer_options', array(
		'capabitity' => 'edit_theme_options',
		//'priority' => 0,
		'title' => __('Footer', 'flash')
		));
	  
		$wp_customize->add_setting( 'flash_custom_credits' , array(
		'default'     => '<br/>Configure in Appearance => Customize => Footer',
		'transport'   => 'refresh',
		'capability' => 'edit_theme_options',
		'type'        => 'option',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'flash_custom_credits', array(
		'label'        => __( 'Footer Text', 'flash' ),
		'section' => 'flash_footer_options',
		'settings'   => 'flash_custom_credits',
		) ) );
	}
	
}
?>
