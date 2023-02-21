<?php
/**
 * A call to action which contains a stylized title (narrow line under), some text
 * and 2 buttons - one outline and one filled
 *
 * @package UBCBlockPatterns
 */

$markup = '
<!-- wp:group {"className":"never-miss-an-issue","layout":{"type":"constrained"}} -->
<div class="wp-block-group never-miss-an-issue"><!-- wp:separator {"className":"is-style-pathways-wide-tertiary"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-pathways-wide-tertiary"/>
<!-- /wp:separator -->

<!-- wp:heading {"style":{"typography":{"textTransform":"capitalize","fontSize":"1.6em"}},"textColor":"ubc-blue","className":"is-style-pathways-narrow-line-under"} -->
<h2 class="is-style-pathways-narrow-line-under has-ubc-blue-color has-text-color" style="font-size:1.6em;text-transform:capitalize"><strong>Never miss an issue of Pathways</strong></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Pathways — the UBC Faculty of Medicine’s digital magazine — features stories about cutting-edge health education, breakthrough research, and biomedical innovations that are making a difference in British Columbia and around the world. Discover the impact of our people and programs.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"vertical"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":75,"align":"center","className":"is-style-ubc-primary-bg"} -->
<div class="wp-block-button aligncenter has-custom-width wp-block-button__width-75 is-style-ubc-primary-bg"><a class="wp-block-button__link wp-element-button">Subscribe</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":75,"className":"is-style-ubc-white-bg"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-75 is-style-ubc-white-bg"><a class="wp-block-button__link wp-element-button">Explore The Archive</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
';

register_block_pattern(
	'ubc/pathways/pathways-never-miss-an-issue',
	array(
		'title'          => __( 'Title, text, 2 buttons', 'ubc-block-patterns' ),
		'description'    => _x( 'A call to action with a title, some text, and two buttons.', 'Block pattern description', 'ubc-block-patterns' ),
		'content'        => $markup,
		'categories'     => array( 'fom-pathways' ),
		'keywords'       => array( 'pathways', 'never miss an issue' ),
		'viewportWidth' => 267
	)
);
