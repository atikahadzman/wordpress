<?php
/**
 * Titan Notice Handler
 */

defined( 'ABSPATH' ) || exit;

define('COSMETICS_STORES_FREE_URL',__('https://www.titanthemes.net/products/cosmetics-stores','cosmetics-stores'));
define('COSMETICS_STORES_PREMIUM_DOCUMENTATION',__('https://preview.titanthemes.net/documentation/cosmetics-stores-pro/','cosmetics-stores'));
define('COSMETICS_STORES_SUPPORT',__('https://wordpress.org/support/theme/cosmetics-stores/','cosmetics-stores'));
define('COSMETICS_STORES_REVIEW',__('https://wordpress.org/support/theme/cosmetics-stores/reviews/','cosmetics-stores'));
define('COSMETICS_STORES_BUY_NOW',__('https://www.titanthemes.net/products/cosmetics-wordpress-theme','cosmetics-stores'));
define('COSMETICS_STORES_DOC_URL',__('https://preview.titanthemes.net/documentation/cosmetics-stores-free/','cosmetics-stores'));
define('COSMETICS_STORES_LIVE_DEMO',__('https://preview.titanthemes.net/cosmetics-stores-pro/','cosmetics-stores'));
define('COSMETICS_STORES_BUNDLE',__('https://www.titanthemes.net/products/wordpress-theme-bundle','cosmetics-stores'));

/**
 * Admin Hook
 */
function cosmetics_stores_admin_menu_page() {
    $cosmetics_stores_theme = wp_get_theme( get_template() );

    add_theme_page(
        $cosmetics_stores_theme->display( 'Name' ),
        $cosmetics_stores_theme->display( 'Name' ),
        'manage_options',
        'cosmetics-stores',
        'cosmetics_stores_do_admin_page'
    );
}
add_action( 'admin_menu', 'cosmetics_stores_admin_menu_page' );

/**
 * Enqueue getting started styles and scripts
 */
function titan_widgets_backend_enqueue() {
    wp_enqueue_style(
        'titan-getting-started',
        get_template_directory_uri() . '/about-theme/about-theme.css'
    );

    // Enqueue your admin notice JS
    wp_enqueue_script(
        'titan-admin-notice',
        get_template_directory_uri() . '/about-theme/admin-notice-script.js',
        array('jquery'), // dependencies
        '1.0',
        true
    );

    // Pass PHP data to JS
    wp_localize_script(
        'titan-admin-notice',
        'cosmetics_stores',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('cosmetics_stores_nonce'),
        )
    );
}
add_action( 'admin_enqueue_scripts', 'titan_widgets_backend_enqueue' );


/**
 * Class Titan_Notice_Handler
 */
class Titan_Notice_Handler {

    public static $nonce;

    /**
     * Empty Constructor
     */
    public function __construct() {
        // Activation notice
        add_action( 'switch_theme', array( $this, 'flush_dismiss_status' ) );
        add_action( 'admin_init', array( $this, 'getting_started_notice_dismissed' ) );
        add_action( 'admin_notices', array( $this, 'titan_theme_info_welcome_admin_notice' ), 3 );
        add_action( 'wp_ajax_cosmetics_stores_dismissable_notice', array( $this, 'ajax_dismiss_notice' ) );
        add_action( 'wp_ajax_titan_getting_started', array( $this, 'titan_getting_started' ) );
    }

    /**
     * Display an admin notice linking to the about page
     */
    public function titan_theme_info_welcome_admin_notice() {
        $current_screen = get_current_screen();
        $cosmetics_stores_theme = wp_get_theme();

        if ( is_admin() && ! get_user_meta( get_current_user_id(), 'gs_notice_dismissed' ) && $current_screen->base !== 'appearance_page_cosmetics-stores' ) {
            echo '<div class="updated notice notice-success is-dismissible notice-get-started-class admin-notice" data-notice="getting_started_notice">';
            echo '<div class="admin-notice-content">';
            echo '<p><strong>' . sprintf( esc_html__( 'Welcome! Thank you for choosing %1$s.', 'cosmetics-stores' ), esc_html( $cosmetics_stores_theme->get( 'Name' ) ) ) . '</strong></p>';
            echo '<p class="plugin-notice">' . esc_html__( 'Thank you for choosing this theme. Use the Get Started guide to quickly set up and personalize your website.', 'cosmetics-stores' ) . '</p>';
            echo '<div class="titan-buttons">';
            echo '<p><a href="' . esc_url( admin_url( 'themes.php?page=cosmetics-stores' ) ) . '" class="titan-install-plugins button button-primary">' . sprintf( esc_html__( 'Get started with %s', 'cosmetics-stores' ), esc_html( $cosmetics_stores_theme->get( 'Name' ) ) ) . '</a></p>';
            echo '<p><a href="' . esc_url( COSMETICS_STORES_BUY_NOW ) . '" class="button button-secondary" target="_blank">' . esc_html__( 'GO FOR PREMIUM', 'cosmetics-stores' ) . '</a></p>';
            echo '<p><a href="' . esc_url( COSMETICS_STORES_BUNDLE ) . '" class="button button-bundle" target="_blank">' . esc_html__( 'GET BUNDLE', 'cosmetics-stores' ) . '</a></p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="admin-notice-image">';
            echo '<a href="' . esc_url( COSMETICS_STORES_BUNDLE ) . '" target="_blank" rel="noopener noreferrer">
                    <img class="notice_img" target="_blank" width="100%" src="' . esc_url( get_template_directory_uri() . '/assets/images/notice.png' ) . '" />
                </a>';
            echo '</div>';
            echo '<a href="#" class="getting-started-notice-dismiss">Dismiss</a>';
            echo '</div>';
        }
    }

    public function getting_started_notice_dismissed() {
        if ( isset( $_GET['gs-notice-dismissed'] ) ) {
            add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
        }
    }

    public function flush_dismiss_status() {
        delete_user_meta( get_current_user_id(), 'gs_notice_dismissed' );
    }

    public function ajax_dismiss_notice() {
        if ( isset( $_POST['type'] ) && $_POST['type'] === 'getting_started_notice' ) {
            add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
        }
        wp_die();
    }

}

new Titan_Notice_Handler();

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function cosmetics_stores_do_admin_page() { 
    $cosmetics_stores_theme = wp_get_theme(); ?>
    <div class="cosmetics-stores-themeinfo-page--wrapper">
        <div class="free&pro">
            <div id="cosmetics-stores-admin-about-page-1">
                <div class="theme-detail">
                   <div class="cosmetics-stores-admin-card-header-1">
                    <div class="cosmetics-stores-header-left">
                        <h2>
                            <?php echo esc_html( $cosmetics_stores_theme->Name ); ?> <span><?php echo esc_html($cosmetics_stores_theme['Version']);?></span>
                        </h2>
                        <p>
                            <?php
                            echo wp_kses_post( apply_filters( 'titan_theme_description', esc_html( $cosmetics_stores_theme->get( 'Description' ) ) ) );
                        ?>
                        </p>
                    </div>
                    <div class="cosmetics-stores-header-right">
                        <div class="cosmetics-stores-pro-button">
                            <a href="<?php echo esc_url( COSMETICS_STORES_BUY_NOW ); ?>" class="cosmetics-stores-button button-primary" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'UPGRADE TO PREMIUM', 'cosmetics-stores' ); ?>
                            </a>
                        </div>
                    </div>
                </div>   
                </div>   
                <div class="cosmetics-stores-features">
                    <div class="cosmetics-stores-features-box">
                        <h3><?php esc_html_e( 'PREMIUM DEMONSTRATION', 'cosmetics-stores' ); ?></h3>
                        <p><?php esc_html_e( 'Effortlessly create and customize your website by arranging text, images, and other elements using the Gutenberg editor, making web design easy and accessible for all skill levels.', 'cosmetics-stores' ); ?></p>
                        <a href="<?php echo esc_url( COSMETICS_STORES_LIVE_DEMO ); ?>" class="cosmetics-stores-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DEMONSTRATION', 'cosmetics-stores' ); ?>
                            </a>
                    </div>
                    <div class="cosmetics-stores-features-box">
                        <h3><?php esc_html_e( 'REVIEWS', 'cosmetics-stores' ); ?></h3>
                        <p><?php esc_html_e( 'We would be happy to hear your thoughts and value your evaluation.', 'cosmetics-stores' ); ?></p>
                        <a href="<?php echo esc_url( COSMETICS_STORES_REVIEW ); ?>" class="cosmetics-stores-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'REVIEWS', 'cosmetics-stores' ); ?>
                            </a>
                    </div>
                    <div class="cosmetics-stores-features-box">
                        <h3><?php esc_html_e( '24/7 SUPPORT', 'cosmetics-stores' ); ?></h3>
                        <p><?php esc_html_e( 'Please do not hesitate to contact us at support if you need help installing our lite theme. We are prepared to assist you!', 'cosmetics-stores' ); ?></p>
                        <a href="<?php echo esc_url( COSMETICS_STORES_SUPPORT ); ?>" class="cosmetics-stores-button button-secondary-1" target="_blank" rel="noreferrer">
                            <?php esc_html_e( 'SUPPORT', 'cosmetics-stores' ); ?>
                        </a>
                    </div>
                    <div class="cosmetics-stores-features-box">
                        <h3><?php esc_html_e( 'THEME INSTRUCTION', 'cosmetics-stores' ); ?></h3>
                        <p><?php esc_html_e( 'If you need assistance configuring and setting up the theme, our tutorial is available. A fast and simple method for setting up the theme.', 'cosmetics-stores' ); ?></p>
                        <a href="<?php echo esc_url( COSMETICS_STORES_DOC_URL ); ?>" class="cosmetics-stores-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DOCUMENTATION', 'cosmetics-stores' ); ?>
                            </a>
                    </div>
                </div>   
            </div>
            <div id="cosmetics-stores-admin-about-page-2">
                <div class="cosmetics-stores-pro-button bundle">
                    <div class="bundle-content">
                        <h3 class="bundle-head"><?php esc_html_e( 'Get All Themes In Single Pack', 'cosmetics-stores' ); ?></h3>
                        <p class="bundle-para"><?php esc_html_e( 'From customization to optimization, this bundle gives you the flexibility to create stunning websites.', 'cosmetics-stores' ); ?></p>
                        <a href="<?php echo esc_url( COSMETICS_STORES_BUNDLE ); ?>" class="cosmetics-stores-button bundle" target="_blank" rel="noreferrer">
                            <?php esc_html_e( 'BUY THEME BUNDLE', 'cosmetics-stores' ); ?>
                        </a>
                    </div>
                    <div class="bundle-image">
                        <img class="img_bundle" width="100%" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bundle.png' ); ?>" alt="<?php esc_attr_e('logo', 'cosmetics-stores'); ?>">
                    </div>
                </div> 
                <div class="theme-detail">
                   <div class="cosmetics-stores-admin-card-header-1">
                        <div class="cosmetics-stores-header-left-pro"> 
                            <h2><?php esc_html_e( 'The premium version of this theme will be available for you to enhance or unlock our premium features.', 'cosmetics-stores' ); ?></h2>
                        </div>
                        <div class="cosmetics-stores-header-right-2">
                            <div class="cosmetics-stores-pro-button">
                                <a href="<?php echo esc_url( COSMETICS_STORES_BUY_NOW ); ?>" class="cosmetics-stores-button button-primary-1 buy-now" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'GO TO PREMIUM', 'cosmetics-stores' ); ?>
                                </a>
                            </div>
                            <div class="cosmetics-stores-pro-button">
                                <a href="<?php echo esc_url( COSMETICS_STORES_LIVE_DEMO ); ?>" class="cosmetics-stores-button button-primary-1 pro-demo" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'PREMIUM DEMO', 'cosmetics-stores' ); ?>
                                </a>
                            </div>
                            <div class="cosmetics-stores-pro-button">
                                <a href="<?php echo esc_url( COSMETICS_STORES_PREMIUM_DOCUMENTATION ); ?>" class="cosmetics-stores-button button-primary-1 buy-now" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'PRO DOCUMENTATION', 'cosmetics-stores' ); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cosmetics-stores-admin-card-header-2">
                        <img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $cosmetics_stores_theme->get_screenshot() ); ?>" />
                    </div>  
                </div>    
            </div>
        </div>
    </div>
<?php } ?>