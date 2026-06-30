<?php

/**
 * Plugin Name: Sticky Content Block
 * Description: Stick element to top when reached at top.
 * Version: 2.0.0
 * Author: bPlugins
 * Author URI: https://bplugins.com
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: sticky-menu
 */
// Prevent direct access
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( function_exists( 'smb_fs' ) ) {
    smb_fs()->set_basename( false, __FILE__ );
} else {
    define( 'STICKY_CONTENT_PRO', file_exists( dirname( __FILE__ ) . '/freemius/start.php' ) );
    define( 'SMB_DIR_PATH', plugin_dir_path( __FILE__ ) );
    define( 'SMB_DIR_URL', plugin_dir_url( __FILE__ ) );
    define( 'SMB_VERSION', '2.0.0' );
    if ( !function_exists( 'smb_fs' ) ) {
        function smb_fs() {
            global $smb_fs;
            if ( !isset( $smb_fs ) ) {
                // Include Freemius SDK
                if ( STICKY_CONTENT_PRO ) {
                    require_once dirname( __FILE__ ) . '/freemius/start.php';
                } else {
                    require_once dirname( __FILE__ ) . '/freemius-lite/start.php';
                }
                $apbConfig = array(
                    'id'                  => '21019',
                    'slug'                => 'sticky-menu-block',
                    'type'                => 'plugin',
                    'public_key'          => 'pk_3476589b8a3f4f7302274ae5e0e0f',
                    'is_premium'          => false,
                    'premium_suffix'      => 'Pro',
                    'has_premium_version' => true,
                    'has_addons'          => false,
                    'has_paid_plans'      => true,
                    'menu'                => array(
                        'slug'       => 'sticky-content-dashboard',
                        'first-path' => 'admin.php?page=sticky-content-dashboard#/welcome',
                        'support'    => false,
                    ),
                );
                $smb_fs = ( STICKY_CONTENT_PRO ? fs_dynamic_init( $apbConfig ) : fs_lite_dynamic_init( $apbConfig ) );
            }
            return $smb_fs;
        }

        // Initialize Freemius
        smb_fs();
        do_action( 'smb_fs_loaded' );
    }
    // Helper function to check premium
    function smbIsPremium() {
        return ( STICKY_CONTENT_PRO ? smb_fs()->can_use_premium_code() : false );
    }

    require_once SMB_DIR_PATH . '/includes/ShortCode.php';
    require_once SMB_DIR_PATH . '/includes/ProAdminMenu.php';
    if ( STICKY_CONTENT_PRO ) {
        require_once SMB_DIR_PATH . 'includes/LicenseActivation.php';
    }
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-smbStickyContent.php';
    // Initialize main plugin
    new SMBStickyContent();
}