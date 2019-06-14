<?php
/**
 * Price by User Role for WooCommerce - Multipliers Section Settings
 *
 * @version 1.2.0
 * @since   1.0.0
 * @author  Tyche Softwares
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Price_By_User_Role_Settings_Multipliers' ) ) :

class Alg_WC_Price_By_User_Role_Settings_Multipliers extends Alg_WC_Price_By_User_Role_Settings_Section {

	/**
	 * Constructor.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function __construct() {
		$this->id   = 'multipliers';
		$this->desc = __( 'Multipliers', 'price-by-user-role-for-woocommerce' );
		parent::__construct();
	}

	/**
	 * get_section_settings.
	 *
	 * @version 1.2.0
	 * @since   1.0.0
	 * @todo    (maybe) `number_plus_checkbox` type
	 * @todo    (maybe) link to custom user roles tool or plugin
	 */
	function get_section_settings() {
		$settings = array(
			array(
				'title'    => __( 'Roles & Multipliers Options', 'price-by-user-role-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_price_by_user_role_multipliers_options',
			),
			array(
				'title'    => __( 'Enable multipliers', 'price-by-user-role-for-woocommerce' ),
				'desc'     => '<strong>' . __( 'Enable section', 'price-by-user-role-for-woocommerce' ) . '</strong>',
				'desc_tip' => __( 'When enabled, this will multiply all products prices by multipliers set below.', 'price-by-user-role-for-woocommerce' ),
				'type'     => 'checkbox',
				'id'       => 'alg_wc_price_by_user_role_multipliers_enabled',
				'default'  => 'yes',
			),
			array(
				'title'    => __( 'Shipping', 'price-by-user-role-for-woocommerce' ),
				'desc'     => __( 'Enable', 'price-by-user-role-for-woocommerce' ),
				'desc_tip' => __( 'When enabled, this will apply user role multipliers to shipping calculations.', 'price-by-user-role-for-woocommerce' ),
				'type'     => 'checkbox',
				'id'       => 'alg_wc_price_by_user_role_shipping_enabled',
				'default'  => 'no',
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_price_by_user_role_multipliers_options',
			),
			array(
				'title'    => __( 'Multipliers', 'price-by-user-role-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_price_by_user_role_multipliers_multipliers_options',
			),
		);
		foreach ( alg_get_user_roles() as $role_key => $role_data ) {
			$settings = array_merge( $settings, array(
				array(
					'title'             => $role_data['name'],
					'id'                => 'alg_wc_price_by_user_role_' . $role_key,
					'default'           => 1,
					'type'              => 'number',
					'custom_attributes' => array( 'step' => '0.000001', 'min'  => '0', ),
				),
				array(
					'desc'              => __( 'Make "empty price"', 'price-by-user-role-for-woocommerce' ),
					'id'                => 'alg_wc_price_by_user_role_empty_price_' . $role_key,
					'default'           => 'no',
					'type'              => 'checkbox',
				),
			) );
		}
		$settings[] = array(
			'type'         => 'sectionend',
			'id'           => 'alg_wc_price_by_user_role_multipliers_multipliers_options',
		);
		return $settings;
	}

}

endif;

return new Alg_WC_Price_By_User_Role_Settings_Multipliers();
