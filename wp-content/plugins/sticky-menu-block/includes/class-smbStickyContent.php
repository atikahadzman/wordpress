<?php

if (!class_exists("SMBStickyContent")) {

    class SMBStickyContent {

        public function __construct() {
            add_action('plugins_loaded', [__CLASS__, 'load_dependencies']);
        }

        static function load_dependencies() {
            require_once SMB_DIR_PATH . 'includes/functions.php'; // For All Nessesary Functions
            require_once SMB_DIR_PATH . 'smb-block.php';
        }

    }

}
