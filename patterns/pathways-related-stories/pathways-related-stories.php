<?php
/**
 * A pattern which contains a a stylized title (with a wide underline) followed by 3 columns. Each column contains
 * an image, a heading (stylized with a narrow underline) and a linked paragraph.
 *
 *                                  RELATED STORIES
 *                          ----------------------------------
 * 
 * ________________________     ________________________     ________________________
 * |                       |    |                       |    |                       |
 * |                       |    |                       |    |                       |
 * |       IMAGE           |    |                       |    |                       |
 * |                       |    |                       |    |                       |
 * |                       |    |                       |    |                       |
 * ________________________     ________________________     ________________________
 *
 * HEADING TEXT                 HEADING TEXT                 HEADING TEXT
 * ____                         ____                         ____
 *
 * Some paragraph text here     Some other text here,        And some even shorter text
 * that likely spans a few      shorter maybe
 * lines.
 *
 * @package UBCBlockPatterns
 */

$markup = '
<!-- wp:group {"className":"related-stories","layout":{"type":"constrained"}} -->
<div class="wp-block-group related-stories"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"4px"}},"className":"is-style-pathways-wide-line-under"} -->
<h2 class="has-text-align-center is-style-pathways-wide-line-under" style="letter-spacing:4px;text-transform:uppercase">Related Stories</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"className":"size-full"} -->
<figure class="wp-block-image size-full"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"is-style-pathways-narrow-line-under"} -->
<h3 class="is-style-pathways-narrow-line-under">Feature Story</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.96em"}},"textColor":"ubc-blue"} -->
<p class="has-ubc-blue-color has-text-color" style="font-size:0.96em"><a href=""><strong>How a million doses in a single test tube can save the world</strong></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"className":"size-full"} -->
<figure class="wp-block-image size-full"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"is-style-pathways-narrow-line-under"} -->
<h3 class="is-style-pathways-narrow-line-under">Feature Story</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ubc-blue"} -->
<p class="has-ubc-blue-color has-text-color"><strong><a href="">Hope, accelerated.</a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"className":"size-full"} -->
<figure class="wp-block-image size-full"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"is-style-pathways-narrow-line-under"} -->
<h3 class="is-style-pathways-narrow-line-under">Feature Story</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ubc-blue"} -->
<p class="has-ubc-blue-color has-text-color"><strong><a href="">Improving cardiovascular health for people with spinal cord injuries</a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
';

register_block_pattern(
	'ubc/pathways/pathways-related-stories',
	array(
		'title'          => __( 'Related Stories 3-columns', 'ubc-block-patterns' ),
		'description'    => _x( 'A stylized title and 3 columns each with a heading, an image, and some linked text.', 'Block pattern description', 'ubc-block-patterns' ),
		'content'        => $markup,
		'categories'     => array( 'fom-pathways' ),
		'keywords'       => array( 'pathways', 'related stories' ),
	)
);
