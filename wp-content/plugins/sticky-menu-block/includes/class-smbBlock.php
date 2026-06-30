<?php

if(!class_exists( 'SMBPlugin' ) ){
	class SMBPlugin{
		function __construct(){
			add_action( 'enqueue_block_assets', [$this, 'enqueueBlockAssets'] );
			add_action( 'init', [$this, 'onInit'] );
		}

		function enqueueBlockAssets(){
			wp_register_script( 'stickyAnything', SMB_DIR_URL . 'public/js/jq-sticky-anything.min.js', [ 'jquery' ], '2.0.1' );
		}

		function onInit() {
			register_block_type( __DIR__ . '/build' );
		}
	}
	new SMBPlugin;
}
