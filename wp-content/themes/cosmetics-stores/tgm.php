<?php

require get_template_directory() . '/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function cosmetics_stores_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'      => esc_html__( 'WooCommerce', 'cosmetics-stores' ),
			'slug'      => 'woocommerce',
			'source'           => '',
			'required'  => false,
			'force_activation' => false,
		),
		array(
			'name'      => esc_html__( 'YITH WooCommerce Wishlist', 'cosmetics-stores' ),
			'slug'      => 'yith-woocommerce-wishlist',
			'source'           => '',
			'required'  => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'cosmetics_stores_register_recommended_plugins' );