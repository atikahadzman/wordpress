<?php

if(!class_exists( 'SMBPlugin' ) ){
	class SMBPlugin{
		function __construct(){
			add_action( 'enqueue_block_assets', [$this, 'enqueueBlockAssets'] );
			add_action( 'init', [$this, 'onInit'] );
			add_action( 'enqueue_block_editor_assets', [$this, 'smbEnqueueBlockEditorAssets'] );
			add_action( 'wp_enqueue_scripts', [$this, 'smbEnqueueBlockEditorAssets'] );
			add_filter( 'default_title', [$this, 'defaultTitle'], 10, 2 );
			add_filter( 'default_content', [$this, 'defaultContent'], 10, 2 );
		}

		function enqueueBlockAssets(){
			wp_register_script( 'stickyAnything', SMB_DIR_URL . 'public/js/jq-sticky-anything.min.js', [ 'jquery' ], '2.0.1' );
		}

		function onInit() {
			register_block_type( __DIR__ . '/build' );
		}
	function smbEnqueueBlockEditorAssets(){
    $handle = 'smb-sticky-menu-block-editor-script';
    wp_add_inline_script(
                'smb-sticky-editor-script',
                'const smbbpipecheck = ' . wp_json_encode(smbIsPremium()) . ';',
                'before'
            );
             wp_add_inline_script(
                'smb-sticky-view-script',
                'const smbbpipecheck = ' . wp_json_encode(smbIsPremium()) . ';',
                'before'
            );
  
}
	function defaultTitle( $title, $post ) {
			if ( 'page' === $post->post_type && isset( $_GET['title'] ) ) {
				return sanitize_text_field( wp_unslash( $_GET['title'] ) );
			}
			return $title;
		}

		function defaultContent( $content, $post ) {
			if ( 'page' === $post->post_type && isset( $_GET['content'] ) ) {
				return wp_unslash( $_GET['content'] );
			}
			return $content;
		}


	}
	new SMBPlugin;
}