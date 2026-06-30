<?php
/**
 * Title: Sidebar
 * Slug: cosmetics-stores/sidebar
 * Categories: cosmetics-stores, sidebar
 */
?>

<!-- wp:group {"className":" sidebar-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"bottom":"50px"}},"border":{"radius":"20px"}},"backgroundColor":"primary","fontFamily":"inter","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-box has-primary-background-color has-background has-inter-font-family" style="border-radius:20px;margin-bottom:50px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"sidebar-heading","style":{"spacing":{"padding":{"top":"7px","bottom":"7px","left":"8px","right":"8px"}},"border":{"radius":"15px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-heading has-border-color has-primary-border-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:15px;padding-top:7px;padding-right:8px;padding-bottom:7px;padding-left:8px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"letterSpacing":"1px"}},"fontFamily":"days-one"} -->
<h4 class="wp-block-heading has-text-align-center has-days-one-font-family" style="letter-spacing:1px"><?php esc_html_e('Search','cosmetics-stores'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"backgroundColor":"primary","fontFamily":"inter"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":" sidebar-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"bottom":"50px"}},"border":{"radius":"20px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-box has-primary-background-color has-background" style="border-radius:20px;margin-bottom:50px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"sidebar-heading","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}},"border":{"radius":"15px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-heading has-border-color has-primary-border-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:15px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"letterSpacing":"1px"}},"fontFamily":"days-one"} -->
<h4 class="wp-block-heading has-text-align-center has-days-one-font-family" style="letter-spacing:1px"><?php esc_html_e('Archives','cosmetics-stores'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:archives {"className":"sidebar-meta-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"inter"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":" sidebar-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"bottom":"50px"}},"border":{"radius":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-box has-base-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:20px;margin-bottom:50px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"sidebar-heading","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}},"border":{"radius":"15px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-heading has-border-color has-primary-border-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:15px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"letterSpacing":"1px"}},"fontFamily":"days-one"} -->
<h4 class="wp-block-heading has-text-align-center has-days-one-font-family" style="letter-spacing:1px"><?php esc_html_e('Popular Post','cosmetics-stores'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":20,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontFamily":"inter","borderColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-base-border-color has-contrast-color has-text-color has-link-color has-inter-font-family" style="border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

<!-- wp:post-title {"level":6,"isLink":true,"className":"sidebar-post-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

<!-- wp:post-excerpt {"excerptLength":10,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"className":" sidebar-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"bottom":"50px"}},"border":{"radius":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-box has-base-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:10px;margin-bottom:50px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"sidebar-heading","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}},"border":{"radius":"15px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-heading has-border-color has-primary-border-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:15px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"letterSpacing":"1px"}},"fontFamily":"days-one"} -->
<h4 class="wp-block-heading has-text-align-center has-days-one-font-family" style="letter-spacing:1px"><?php esc_html_e('Categories','cosmetics-stores'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:categories {"showOnlyTopLevel":true,"className":"sidebar-meta-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"inter"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":" sidebar-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"bottom":"50px"}},"border":{"radius":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-box has-base-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:20px;margin-bottom:50px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"sidebar-heading","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}},"border":{"radius":"15px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-heading has-border-color has-primary-border-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:15px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"letterSpacing":"1px"}},"fontFamily":"days-one"} -->
<h4 class="wp-block-heading has-text-align-center has-days-one-font-family" style="letter-spacing:1px"><?php esc_html_e('Tags','cosmetics-stores'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:tag-cloud {"className":"is-style-outline","fontFamily":"inter"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":" sidebar-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"bottom":"50px"}},"border":{"radius":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-box has-base-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:20px;margin-bottom:50px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"sidebar-heading","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}},"border":{"radius":"15px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","fontFamily":"inter","borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group sidebar-heading has-border-color has-primary-border-color has-base-color has-contrast-background-color has-text-color has-background has-link-color has-inter-font-family" style="border-width:1px;border-radius:15px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"letterSpacing":"1px"}}} -->
<h4 class="wp-block-heading has-text-align-center" style="letter-spacing:1px"><?php esc_html_e('Follow Us On','cosmetics-stores'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:social-links {"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->