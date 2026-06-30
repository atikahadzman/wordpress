<?php


if ( !defined( 'ABSPATH' ) ) { exit; } 

class SMBproAdminMenu {
	public function __construct() {
		add_action( 'admin_menu', [ $this, 'adminMenu' ] );
		add_action( 'admin_enqueue_scripts', [$this, 'adminEnqueueScripts'] );
		add_action( 'wp_ajax_smbSaveUninstallOption', [$this, 'smbSaveUninstallOption'] );
	}

	
	public function adminMenu(){
					$icon = "
					<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 388.266 388.266' fill='currentColor' color='rgba(240, 246, 252, .6)'>
					<path d='M388.172,55.218L116.189,1.089l-0.654-0.128L26.397,1.125L0,1.089v386.216h388.266V64.598L388.172,55.218z 
					M319.291,144.434C293.78,121.517,213.527,66.745,159.834,30.772l206.154,42.069C361.865,90.479,350.016,126.11,319.291,144.434z 
					M321.917,166.114c21.45-10.299,36.072-26.548,45.986-43.079v243.904H20.362V21.497l4.5-0.011l84.381,0.112 
					c67.822,44.747,184.602,123.856,200.608,142.056l5.089,5.787L321.917,166.114z'/>
					</svg>
					";

	
		add_menu_page(
			__('Sticky Content- bPlugins', 'sticky-menu'),
			__('Sticky Content', 'sticky-menu'),
			'manage_options',
			'sticky-content-dashboard',
			'',
			'data:image/svg+xml;base64,' . base64_encode( $icon ),
			20
		);
		add_submenu_page(
			'sticky-content-dashboard',
			__('Help And Demo - bPlugins', 'sticky-menu'),
			__('Help And Demo', 'sticky-menu'),
			'manage_options',
			'sticky-content-dashboard',
			[$this, 'renderDashboardPage'],
			1
		);
	
	} 


	public function renderDashboardPage(){ ?>
	
			<div
			id='smb_sticky_content_menu'
			data-info='<?php echo esc_attr( wp_json_encode( [
				'version' => SMB_VERSION,
				'isPremium' => smbIsPremium(),
				'hasPro' => STICKY_CONTENT_PRO,
				'licenseActiveNonce' => wp_create_nonce('bplLicenseActive'),
				'nonce' => wp_create_nonce( 'tsbCreatePage' ),
				'adminUrl' => admin_url(),
				'deleteDataOnUninstall' => (bool) get_option( 'smbDeleteDataOnUninstall', false ),
				'uninstallNonce' => wp_create_nonce( 'smb_save_uninstall_option' ),
			] ) ); ?>'
		></div>

	<?php }

	// Persist the dashboard "delete data on uninstall" toggle.
	// Contract matches bpl-tools/Admin/Settings: reads $_POST['nonce'] and $_POST['enabled'].
	public function smbSaveUninstallOption() {
		$nonce = sanitize_text_field( wp_unslash( $_POST['nonce'] ?? '' ) );

		if ( ! wp_verify_nonce( $nonce, 'smb_save_uninstall_option' ) ) {
			wp_send_json_error( [ 'message' => __( 'Invalid security token.', 'sticky-menu' ) ], 403 );
		}

		if ( ! current_user_can( 'manage_options' ) ) {
			wp_send_json_error( [ 'message' => __( 'You do not have permission to perform this action.', 'sticky-menu' ) ], 403 );
		}

		$raw_enabled = isset( $_POST['enabled'] ) ? sanitize_text_field( wp_unslash( $_POST['enabled'] ) ) : '';
		$enabled     = ( 'true' === $raw_enabled || '1' === $raw_enabled );

		update_option( 'smbDeleteDataOnUninstall', $enabled );

		wp_send_json_success( [
			'enabled' => $enabled,
			'message' => $enabled
				? __( 'Data deletion enabled.', 'sticky-menu' )
				: __( 'Data will be preserved on uninstall.', 'sticky-menu' ),
		] );
	}

	function adminEnqueueScripts( $hook ) {
		// if( strpos( $hook, 'sticky-content-dashboard' ) ){
			wp_enqueue_style( 'smb-admin-dashboard', SMB_DIR_URL . 'build/admin-dashboard.css', [], SMB_VERSION );
			wp_enqueue_script( 'smb-admin-dashboard', SMB_DIR_URL . 'build/admin-dashboard.js', [ 'react', 'react-dom','wp-util' ], SMB_VERSION, true );
			wp_set_script_translations( 'smb-admin-dashboard', 'click-to-copy', SMB_DIR_PATH . 'languages' );
				
		// }
	}
}
new SMBproAdminMenu();
