<?php
/**
 * Title: Banner
 * Slug: cosmetics-stores/banner
 * Categories: banner
 * Block Types: core/template-part/banner
 */
?>

<!-- wp:group {"className":"banner-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","bottom":"0px","top":"0px"},"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group banner-section" style="margin-top:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-bg.png","id":6,"isUserOverlayColor":true,"minHeight":700,"gradient":"banner-overlay","sizeSlug":"large","className":"banner-bg","layout":{"type":"constrained","contentSize":"35%"}} -->
<div class="wp-block-cover banner-bg" style="min-height:700px"><img class="wp-block-cover__image-background wp-image-6 size-large" alt="" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-bg.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-banner-overlay-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"banner-content","layout":{"type":"default"}} -->
<div class="wp-block-group banner-content"><!-- wp:paragraph {"align":"center","className":"banner-sub-title","style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"3px","fontStyle":"normal","fontWeight":"200"},"border":{"width":"1px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"35px","right":"35px"}}},"borderColor":"base"} -->
<p class="has-text-align-center banner-sub-title has-border-color has-base-border-color" style="border-width:1px;padding-top:4px;padding-right:35px;padding-bottom:4px;padding-left:35px;font-size:14px;font-style:normal;font-weight:200;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('premium beauty collection','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"banner-main-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"capitalize","fontSize":"55px"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center banner-main-title has-base-color has-text-color has-link-color" style="font-size:55px;text-transform:capitalize"><?php esc_html_e('elevate your ','cosmetics-stores'); ?><br><?php esc_html_e('everyday beauty','cosmetics-stores'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"banner-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"200"}},"textColor":"base"} -->
<p class="has-text-align-center banner-para has-base-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:200"><?php esc_html_e('Discover premium skincare, makeup, and essentials designed to enhance your natural glow.','cosmetics-stores'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btns","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons banner-btns" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":{"topLeft":"40px","topRight":"40px","bottomLeft":"40px","bottomRight":"40px"},"width":"1px"},"spacing":{"padding":{"left":"50px","right":"50px","top":"15px","bottom":"15px"}},"typography":{"fontSize":"15px","textTransform":"capitalize"}},"fontFamily":"oswald","borderColor":"base"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-border-color has-base-border-color has-oswald-font-family has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:40px;border-top-right-radius:40px;border-bottom-left-radius:40px;border-bottom-right-radius:40px;padding-top:15px;padding-right:50px;padding-bottom:15px;padding-left:50px;font-size:15px;text-transform:capitalize"><?php esc_html_e('shop now','cosmetics-stores'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":{"topLeft":"40px","topRight":"40px","bottomLeft":"40px","bottomRight":"40px"},"width":"1px"},"spacing":{"padding":{"left":"50px","right":"50px","top":"15px","bottom":"15px"}},"typography":{"fontSize":"15px","textTransform":"capitalize"},"color":{"background":"#00000000"}},"fontFamily":"oswald","borderColor":"base"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-text-color has-background has-link-color has-border-color has-base-border-color has-oswald-font-family has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:40px;border-top-right-radius:40px;border-bottom-left-radius:40px;border-bottom-right-radius:40px;background-color:#00000000;padding-top:15px;padding-right:50px;padding-bottom:15px;padding-left:50px;font-size:15px;text-transform:capitalize"><?php esc_html_e('browse collections','cosmetics-stores'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"banner-review-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group banner-review-box"><!-- wp:image {"id":28,"sizeSlug":"full","linkDestination":"none","className":"banner-review-img"} -->
<figure class="wp-block-image size-full banner-review-img"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/review-img.png" alt="" class="wp-image-28"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"banner-review-text","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"300","letterSpacing":"0.6px"}}} -->
<p class="banner-review-text" style="font-size:15px;font-style:normal;font-weight:300;letter-spacing:0.6px"><?php esc_html_e('Trusted by 10,000+ customers','cosmetics-stores'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"banner-down-arrow","layout":{"type":"default"}} -->
<div class="wp-block-group banner-down-arrow"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color"><a href="#product-section"><i class="fa-solid fa-chevron-down"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->