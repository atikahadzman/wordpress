<?php

    if ( !defined( 'ABSPATH' ) ) { exit; }
class SMB_Shortcode {
    private $post_type = 'smb';
    	public function __construct() {
		add_shortcode( 'smb', [$this, 'onAddShortcode'] );
		add_action( 'admin_enqueue_scripts', [$this, 'adminEnqueueScripts'] );
		add_action( 'init', [$this, 'onInit'] );
		add_filter( 'manage_smb_posts_columns', [$this, 'manageSMBPostsColumns'], 10 );
		add_action( 'manage_smb_posts_custom_column', [$this, 'manageSMBPostsCustomColumns'], 10, 2 );
		add_action( 'use_block_editor_for_post', [$this, 'useBlockEditorForPost'], 999, 2 );
	}

	function onInit(){


		register_post_type( 'smb', [
			'labels'				=> [
				'name'			=> __( 'ShortCodes', 'sticky-menu' ),
				'singular_name'	=> __( 'ShortCode', 'sticky-menu' ),
				'add_new'		=> __( 'Add New', 'sticky-menu' ),
				'add_new_item'	=> __( 'Add New ShortCode', 'sticky-menu' ),
				'edit_item'		=> __( 'Edit ShortCode', 'sticky-menu' ),
				'new_item'		=> __( 'New ShortCode', 'sticky-menu' ),
				'view_item'		=> __( 'View ShortCode', 'sticky-menu' ),
				'search_items'	=> __( 'Search ShortCodes', 'sticky-menu' ),
				'not_found'		=> __( 'Sorry, we couldn\'t find the ShortCode you are looking for.', 'sticky-menu' )
			],
			'public'				=> false,
			'show_ui'				=> true,
			'show_in_rest'			=> true,
			'publicly_queryable'	=> false,
			'show_in_menu'			=> 'sticky-content-dashboard',
			'exclude_from_search'	=> true,
			'menu_position'			=> 14,
			'has_archive'			=> false,
			'hierarchical'			=> false,
			'capability_type'		=> 'page',
			'rewrite'				=> [ 'slug' => 'apb' ],
			'supports'				=> [ 'title', 'editor' ],
			'template' => [ [ 'smb/sticky' ] ],
			'template_lock'			=> "all",
		] );
	}
	
	function onAddShortcode( $atts ) {
		$post_id = $atts['id'];
		$post = get_post( $post_id );

		if ( !$post ) {
			return '';
		}

		if ( post_password_required( $post ) ) {
			return get_the_password_form( $post );
		}

		switch ( $post->post_status ) {
			case 'publish':
				return $this->displayContent( $post );

			case 'private':
				if ( current_user_can( 'read_private_posts' ) ) {
					return $this->displayContent( $post );
				}
				return '';

			case 'draft':
			case 'pending':
			case 'future':
				if ( current_user_can( 'edit_post', $post_id ) ) {
					return $this->displayContent( $post );
				}
				return '';

			default:
				return '';
		}
	}

	function displayContent( $post ) {
    $content = apply_filters( 'the_content', $post->post_content );
    return $content;
}

	function manageSMBPostsColumns( $defaults ) {
		unset( $defaults['date'] );
		$defaults['shortcode'] = 'ShortCode';
		$defaults['date'] = 'Date';
		return $defaults;
	}

	function manageSMBPostsCustomColumns( $column_name, $post_ID ) {
		if ( $column_name == 'shortcode' ) {
			echo '<div class="bPlAdminShortcode" id="bPlAdminShortcode-' . esc_attr( $post_ID ) . '">
				<input value="[smb id=' . esc_attr( $post_ID ) . ']" onclick="copyBPlAdminShortcode(\'' . esc_attr( $post_ID ) . '\')">
				<span class="tooltip">' . esc_html__( 'Copy To Clipboard', 'advanced-post-block' ) . '</span>
			</div>';
		}
	}

	function useBlockEditorForPost( $use, $post ){
		if ( is_object( $post ) && isset( $post->post_type ) && $this->post_type === $post->post_type ) {
			return true;
		}
		return $use;
	}
    	function adminEnqueueScripts( $hook ){
		// if( 'edit.php' === $hook || 'post.php' === $hook ){
			wp_enqueue_style( 'smb-admin-post', SMB_DIR_URL . 'build/admin-post.css', [], SMB_VERSION );
			wp_enqueue_script( 'smb-admin-post', SMB_DIR_URL . 'build/admin-post.js', [], SMB_VERSION, true );
			wp_set_script_translations( 'smb-admin-post', 'advanced-post-block', SMB_DIR_PATH . 'languages' );
		// }
	}

}
new SMB_Shortcode();