<?php
/**
 * Customer Reset Password email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php
/**
 * WETC Mod
 */
$WCOption  = get_option( 'woocommerce_customer_reset_password_settings' );
$emailText = 'Someone requested that the password be reset for the following account:
			
Username: {username}

If this was a mistake, just ignore this email and nothing will happen.

To reset your password, visit the following address:

{password_reset_link}';

if ( $WCOption && $WCOption['email_text'] ) {
	$emailText = $WCOption['email_text'];
}

$emailText = str_replace( '{username}', $user_login, $emailText );
$emailText = str_replace( '{password_reset_link}', '<a style="color: #437DCC" class="link" href="' . esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => rawurlencode( $user_login ) ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ) .'">' . _e( 'Click here to reset your password', 'woocommerce' ) .'</a>', $emailText );
?>

<p><?php _e( $emailText, 'woocommerce' ); ?></p>

<p></p>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
