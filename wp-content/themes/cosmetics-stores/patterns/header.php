<?php
/**
 * Title: Header
 * Slug: cosmetics-stores/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"className":"header-box-upper header-section","style":{"spacing":{"padding":{"left":"0","right":"0"},"margin":{"top":"0px","bottom":"0"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|contrast","width":"2px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group header-box-upper header-section" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;border-left-style:none;border-left-width:0px;margin-top:0px;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"className":"header-top","style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"left":"0px","right":"0px","top":"10px","bottom":"10px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-top has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0;padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:group {"className":"header-inner-top","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group header-inner-top"><!-- wp:paragraph {"align":"center","className":"topbar-text1","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"}},"textColor":"base"} -->
<p class="has-text-align-center topbar-text1 has-base-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:300"><?php esc_html_e('Free Shipping on Orders Over 500 kr','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"topbar-text2","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"capitalize","fontSize":"14px","fontStyle":"normal","fontWeight":"300"}},"textColor":"base"} -->
<p class="has-text-align-center topbar-text2 has-base-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:300;text-transform:capitalize"><?php esc_html_e('exclusive member rewards','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"topbar-text3","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"capitalize","fontSize":"14px","fontStyle":"normal","fontWeight":"300"}},"textColor":"base"} -->
<p class="has-text-align-center topbar-text3 has-base-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:300;text-transform:capitalize"><?php esc_html_e('authentic norwegian store','cosmetics-stores'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-middle","style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"left":"0px","right":"0px","top":"10px","bottom":"10px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-middle" style="margin-top:0px;margin-bottom:0;padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:columns {"verticalAlignment":"center","className":"header-middle-inner","style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"bottom":"0px","top":"0px","left":"0px","right":"0px"},"blockGap":{"top":"15px","left":"15px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center header-middle-inner" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-logo"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:25%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"27px","textTransform":"capitalize"}},"textColor":"heading-color"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"header-search"} -->
<div class="wp-block-column is-vertically-aligned-center header-search" style="flex-basis:50%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search for products, brands...","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"},"style":{"typography":{"fontSize":"16px"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}},"namespace":"woocommerce/product-search"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-right-btns"} -->
<div class="wp-block-column is-vertically-aligned-center header-right-btns" style="flex-basis:25%"><!-- wp:group {"className":"header-right-in-btns","style":{"spacing":{"blockGap":"25px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group header-right-in-btns"><!-- wp:buttons {"className":"wishlist-btn"} -->
<div class="wp-block-buttons wishlist-btn"><!-- wp:button {"style":{"color":{"background":"#00000000"},"typography":{"fontSize":"15px","textTransform":"capitalize"},"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-custom-font-size wp-element-button" href="#" style="background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:15px;text-transform:capitalize"><i class="fa-regular fa-heart"></i><?php esc_html_e('wishlist','cosmetics-stores'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/customer-account {"iconClass":"wc-block-customer-account__account-icon","className":"account-btn","style":{"typography":{"fontSize":"15px"}}} /-->

<!-- wp:woocommerce/cart-link {"className":"cart-btn","style":{"typography":{"fontSize":"15px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-bottom","style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"left":"0px","right":"0px","top":"14px","bottom":"14px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"15px","bottomRight":"15px"},"width":"0px","style":"none"}},"layout":{"type":"default"}} -->
<div class="wp-block-group header-bottom" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;margin-top:0px;margin-bottom:0;padding-top:14px;padding-right:0px;padding-bottom:14px;padding-left:0px"><!-- wp:navigation {"textColor":"heading-color","overlayTextColor":"contrast","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} --><!-- wp:navigation-link {"label":"New Arrivals","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Skincare","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Makeup","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Haircare","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"K-Beauty","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Brands","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Gift Sets","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Sale","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->