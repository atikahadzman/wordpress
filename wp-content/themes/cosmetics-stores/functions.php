<?php
/**
 * Cosmetics Stores functions
 */

if ( ! function_exists( 'cosmetics_stores_setup' ) ) :
function cosmetics_stores_setup() {
    load_theme_textdomain( 'cosmetics-stores', get_template_directory() . '/languages' );

	/**
	* About Theme Function
	*/
	require get_theme_file_path( '/about-theme/about-theme.php' );
}
endif; 
add_action( 'after_setup_theme', 'cosmetics_stores_setup' );

//Admin css
	add_editor_style( array( 'assets/css/admin.css' ) );

if ( ! function_exists( 'cosmetics_stores_styles' ) ) :
	function cosmetics_stores_styles() {
		// Register theme stylesheet.
		wp_register_style('cosmetics-stores-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);
		
		wp_enqueue_style( 'fontawesome-style', 
			get_template_directory_uri() .'/assets/fontawesome/css/all.css', 
			array(), 
			wp_get_theme()->get('Version') 
		);

		wp_enqueue_script('cosmetics-stores-js', 
			get_template_directory_uri() . '/assets/js/effects.js',
			array('jquery'), 
			wp_get_theme()->get('Version'),
			true 
		);

		wp_enqueue_style( 'scroll-to-top-style',
			get_template_directory_uri() . '/assets/css/scroll-to-top.css',
			array(),
			wp_get_theme()->get('Version')
		);

		wp_enqueue_script( 'scroll-to-top-js',
			get_template_directory_uri() . '/assets/js/scroll-to-top.js',
			array(),
			wp_get_theme()->get('Version'),
			true
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'cosmetics-stores-style' );

		wp_style_add_data( 'cosmetics-stores-style', 'rtl', 'replace' );

	}
endif;
add_action( 'wp_enqueue_scripts', 'cosmetics_stores_styles' );

/**
 * TGM FILE
 */
require get_theme_file_path( '/tgm.php' );

/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer.php';