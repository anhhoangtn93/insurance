<?php 
defined( 'ABSPATH' ) || exit;
require( INSURANCE_CONST['plugin_dir'] . 'admin/admin.php' );
require( INSURANCE_CONST['plugin_dir']. 'admin/insurance-form-builder.php' );
require( INSURANCE_CONST['plugin_dir']. 'includes/enqueue.php' );
if ( class_exists( 'IFW_INSURANCE_ADMIN' ) ) {
	new IFW_INSURANCE_ADMIN();
}
if ( class_exists( 'IFW_INSURANCE_INSURANCE_FORM_BUILDER' ) ) {
	new IFW_INSURANCE_INSURANCE_FORM_BUILDER();
}
if ( class_exists( 'IFW_INSURANCE_ENQUEUE' ) ) {
	new IFW_INSURANCE_ENQUEUE();
}

// require( TPG_TYRO_PAYMENT_GATEWAY_PLUGIN_DIR . 'admin/setting-page.php' );
// require( TPG_TYRO_PAYMENT_GATEWAY_PLUGIN_DIR . 'admin/tyro-checkout-description-fields.php' );
// error_log('tyro-checkout-description-fields.php đã được chạy.');
// if ( class_exists( 'TPG_TYRO_PAYMENT_GATEWAY_REGISTER' ) ) {
// 	new TPG_TYRO_PAYMENT_GATEWAY_REGISTER();
// }
// if ( class_exists( 'TPG_TYRO_PAYMENT_GATEWAY_SETTING' ) ) {
// 	new TPG_TYRO_PAYMENT_GATEWAY_SETTING();
// }
?>