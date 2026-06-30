<?php
/**
 * Title: Blogs
 * Slug: cosmetics-stores/blogs
 * Categories: blogs
 * Block Types: core/template-part/blogs
 */

?>

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"blogs-section","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blogs-section" style="padding-right:0px;padding-left:0px"><!-- wp:group {"className":"blogs-head-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group blogs-head-box"><!-- wp:heading {"textAlign":"center","className":"blog-sec-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"30px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color"} -->
<h2 class="wp-block-heading has-text-align-center blog-sec-title has-heading-color-color has-text-color has-link-color" style="font-size:30px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('blog','cosmetics-stores'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"blog-sec-btn"} -->
<div class="wp-block-buttons blog-sec-btn"><!-- wp:button {"backgroundColor":"base","textColor":"heading-color","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"5px","bottom":"5px"}},"typography":{"fontSize":"15px","textTransform":"uppercase"},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"fontFamily":"oswald"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-color-color has-base-background-color has-text-color has-background has-link-color has-oswald-font-family has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px;font-size:15px;text-transform:uppercase"><?php esc_html_e('view all','cosmetics-stores'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"className":"blogs-btm-box"} -->
<div class="wp-block-query blogs-btm-box"><!-- wp:post-template {"className":"blog-boxes","style":{"typography":{"fontSize":"15px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"wide","className":"blog-img-box","style":{"dimensions":{"minHeight":"300px"},"color":{"background":"#aeaeae"},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide blog-img-box has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#aeaeae;min-height:300px"><!-- wp:post-featured-image {"isLink":true,"sizeSlug":"full","align":"wide","className":"blog-sec-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-bottom:0px"><!-- wp:post-date {"datetime":"2026-05-11T04:48:11.976Z","style":{"color":{"text":"#494a48"},"elements":{"link":{"color":{"text":"#494a48"}}}}} /-->

<!-- wp:post-author {"showAvatar":false,"style":{"color":{"text":"#494a48"},"elements":{"link":{"color":{"text":"#494a48"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"blog-sec-title","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"15px","bottom":"15px"}}},"textColor":"contrast"} /-->

<!-- wp:post-excerpt {"moreText":"continue reading","excerptLength":15,"className":"blog-sec-desc","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"#494a48"}}},"color":{"text":"#494a48"}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->