<?php
/**
 * Title: Products Section
 * Slug: cosmetics-stores/product-section
 * Categories: product-section
 * Block Types: core/template-part/product-section
 */
?>

<?php if ( class_exists( 'WooCommerce' ) && wc_get_products( array( 'status' => 'publish') ) ) : ?>

<!-- wp:group {"className":"product-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div id="product-section" class="wp-block-group product-section" style="margin-top:0px;margin-bottom:0px;padding-right:0px;padding-left:0px"><!-- wp:group {"className":"product-head-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group product-head-box"><!-- wp:heading {"textAlign":"center","className":"product-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"30px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color"} -->
<h2 class="wp-block-heading has-text-align-center product-sec-title has-heading-color-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('some of our favorites.','cosmetics-stores'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"product-sec-btn"} -->
<div class="wp-block-buttons product-sec-btn"><!-- wp:button {"backgroundColor":"base","textColor":"heading-color","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"5px","bottom":"5px"}},"typography":{"fontSize":"15px","textTransform":"uppercase"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontFamily":"oswald"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-color-color has-base-background-color has-text-color has-background has-link-color has-oswald-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px;font-size:15px;text-transform:uppercase"><?php esc_html_e('view all','cosmetics-stores'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-boxes","layout":{"type":"default"}} -->
<div class="wp-block-group product-boxes"><!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-7 days"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template {"className":"product-out-box"} -->
<!-- wp:group {"className":"product-img-box","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"360px","className":"product-img","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
<!-- wp:woocommerce/product-sale-badge {"align":"left","className":"product-sale-tag","textColor":"base","fontFamily":"barlow-condensed","style":{"color":{"background":"#2d3241"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500","letterSpacing":"3px"}}} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"product-cart","backgroundColor":"button bg","fontSize":"small","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"},"margin":{"top":"0px"}},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","isLink":true,"className":"product-title","style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"lineHeight":"1.4","fontSize":"24px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":12,"textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"14px"}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","className":"product-price","fontFamily":"roboto-flex","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"className":"product-rating"} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php else : ?>

<!-- wp:group {"className":"product-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div id="product-section" class="wp-block-group product-section" style="margin-top:0px;margin-bottom:0px;padding-right:0px;padding-left:0px"><!-- wp:group {"className":"product-head-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group product-head-box"><!-- wp:heading {"textAlign":"center","className":"product-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"30px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color"} -->
<h2 class="wp-block-heading has-text-align-center product-sec-title has-heading-color-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('some of our favorites.','cosmetics-stores'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"product-sec-btn"} -->
<div class="wp-block-buttons product-sec-btn"><!-- wp:button {"backgroundColor":"base","textColor":"heading-color","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"5px","bottom":"5px"}},"typography":{"fontSize":"15px","textTransform":"uppercase"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontFamily":"oswald"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-color-color has-base-background-color has-text-color has-background has-link-color has-oswald-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px;font-size:15px;text-transform:uppercase"><?php esc_html_e('view all','cosmetics-stores'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-boxes","layout":{"type":"default"}} -->
<div class="wp-block-group product-boxes"><!-- wp:columns {"className":"product-out-box"} -->
<div class="wp-block-columns product-out-box"><!-- wp:column {"className":"product-main-box"} -->
<div class="wp-block-column product-main-box"><!-- wp:group {"className":"product-img-box","style":{"dimensions":{"minHeight":"360px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box" style="min-height:360px"><!-- wp:image {"id":87,"width":"auto","height":"360px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/product-img1.png" alt="" class="wp-image-87" style="width:auto;height:360px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"product-sale-tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"3px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"14px","right":"14px"},"margin":{"top":"0px"}}},"backgroundColor":"primary","textColor":"base","fontFamily":"barlow-condensed"} -->
<p class="product-sale-tag has-base-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family" style="margin-top:0px;padding-top:4px;padding-right:14px;padding-bottom:4px;padding-left:14px;font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('sale','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-cart"} -->
<div class="wp-block-buttons product-cart"><!-- wp:button {"backgroundColor":"button bg","style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-button-bg-background-color has-background wp-element-button" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><img class="wp-image-75" style="width: 46px;" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/cart-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"product-wishlist"} -->
<div class="wp-block-buttons product-wishlist"><!-- wp:button {"style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}},"color":{"background":"#f2f4f6"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;background-color:#f2f4f6;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><img class="wp-image-7" style="width: 47px;" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/wishlist-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"product-title","style":{"typography":{"fontSize":"24px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"12px"}}}} -->
<h3 class="wp-block-heading product-title" style="margin-top:12px;font-size:24px;font-style:normal;font-weight:500;text-transform:capitalize"><a href="#"><?php esc_html_e('product title','cosmetics-stores'); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"12px"}}},"textColor":"heading-color"} -->
<p class="has-heading-color-color has-text-color has-link-color" style="margin-top:12px;font-size:14px"><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"product-price","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="product-price" style="margin-top:12px;font-size:18px;font-style:normal;font-weight:500"><del><?php esc_html_e('$43.29','cosmetics-stores'); ?></del><?php esc_html_e(' $33.29','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":80,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"8px"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-top:8px"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/rating-img.png" alt="" class="wp-image-80" style="width:auto;height:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-main-box"} -->
<div class="wp-block-column product-main-box"><!-- wp:group {"className":"product-img-box","style":{"dimensions":{"minHeight":"360px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box" style="min-height:360px"><!-- wp:image {"id":100,"width":"auto","height":"360px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/product-img2.png" alt="" class="wp-image-100" style="width:auto;height:360px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"product-sale-tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"3px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"14px","right":"14px"},"margin":{"top":"0px"}}},"backgroundColor":"primary","textColor":"base","fontFamily":"barlow-condensed"} -->
<p class="product-sale-tag has-base-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family" style="margin-top:0px;padding-top:4px;padding-right:14px;padding-bottom:4px;padding-left:14px;font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('sale','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-cart"} -->
<div class="wp-block-buttons product-cart"><!-- wp:button {"backgroundColor":"button bg","style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-button-bg-background-color has-background wp-element-button" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><img class="wp-image-75" style="width: 46px;" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/cart-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"product-wishlist"} -->
<div class="wp-block-buttons product-wishlist"><!-- wp:button {"style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}},"color":{"background":"#f2f4f6"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;background-color:#f2f4f6;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><img class="wp-image-7" style="width: 47px;" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/wishlist-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"product-title","style":{"typography":{"fontSize":"24px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"12px"}}}} -->
<h3 class="wp-block-heading product-title" style="margin-top:12px;font-size:24px;font-style:normal;font-weight:500;text-transform:capitalize"><a href="#"><?php esc_html_e('product title','cosmetics-stores'); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"12px"}}},"textColor":"heading-color"} -->
<p class="has-heading-color-color has-text-color has-link-color" style="margin-top:12px;font-size:14px"><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"product-price","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="product-price" style="margin-top:12px;font-size:18px;font-style:normal;font-weight:500"><del><?php esc_html_e('$43.29','cosmetics-stores'); ?></del><?php esc_html_e(' $33.29','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":80,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"8px"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-top:8px"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/rating-img.png" alt="" class="wp-image-80" style="width:auto;height:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-main-box"} -->
<div class="wp-block-column product-main-box"><!-- wp:group {"className":"product-img-box","style":{"dimensions":{"minHeight":"360px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box" style="min-height:360px"><!-- wp:image {"id":101,"width":"auto","height":"360px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/product-img3.png" alt="" class="wp-image-101" style="width:auto;height:360px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"product-sale-tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"3px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"14px","right":"14px"},"margin":{"top":"0px"}}},"backgroundColor":"primary","textColor":"base","fontFamily":"barlow-condensed"} -->
<p class="product-sale-tag has-base-color has-primary-background-color has-text-color has-background has-link-color has-barlow-condensed-font-family" style="margin-top:0px;padding-top:4px;padding-right:14px;padding-bottom:4px;padding-left:14px;font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('sale','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-cart"} -->
<div class="wp-block-buttons product-cart"><!-- wp:button {"backgroundColor":"button bg","style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-button-bg-background-color has-background wp-element-button" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><img class="wp-image-75" style="width: 46px;" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/cart-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"product-wishlist"} -->
<div class="wp-block-buttons product-wishlist"><!-- wp:button {"style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}},"spacing":{"padding":{"left":"5px","right":"5px","top":"5px","bottom":"5px"}},"color":{"background":"#f2f4f6"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;background-color:#f2f4f6;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><img class="wp-image-7" style="width: 47px;" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/wishlist-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"product-title","style":{"typography":{"fontSize":"24px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"12px"}}}} -->
<h3 class="wp-block-heading product-title" style="margin-top:12px;font-size:24px;font-style:normal;font-weight:500;text-transform:capitalize"><a href="#"><?php esc_html_e('product title','cosmetics-stores'); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"12px"}}},"textColor":"heading-color"} -->
<p class="has-heading-color-color has-text-color has-link-color" style="margin-top:12px;font-size:14px"><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"product-price","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="product-price" style="margin-top:12px;font-size:18px;font-style:normal;font-weight:500"><del><?php esc_html_e('$43.29','cosmetics-stores'); ?></del><?php esc_html_e(' $33.29','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":80,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"8px"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-top:8px"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/rating-img.png" alt="" class="wp-image-80" style="width:auto;height:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php endif; ?>