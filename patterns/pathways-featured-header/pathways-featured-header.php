<?php
/**
 * A pattern for the header on the feature stories and the opinion page.
 * 2 columns, 60:40 split
 * Image in the left column. Title and intro/lede in the right.
 * The right column is vertically centred.
 *
 * ________________________
 * |                       |
 * |                       |
 * |                       |   Opinion
 * |                       |   -------
 * |                       |   Some long title here
 * |                       |   probably on a
 * |        IMAGE          |   few lines like this.
 * |                       |
 * |                       |   And some intro text here
 * |                       |   also on multiple lines
 * |                       |
 * |                       |
 * ________________________   
 *
 * @package UBCBlockPatterns
 */

$markup = '
<!-- wp:group {"className":"ubc-clf-full","layout":{"type":"constrained"}} -->
<div class="wp-block-group ubc-clf-full"><!-- wp:group {"className":"opinion-header    ","layout":{"type":"constrained"}} -->
<div class="wp-block-group opinion-header"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="https://dummyimage.com/664x550" alt=""/><figcaption class="wp-element-caption">Some Person</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","className":"opinion-lede"} -->
<div class="wp-block-column opinion-lede" style="flex-basis:40%"><!-- wp:group {"className":"","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-pathways-narrow-line-under"} -->
<p class="is-style-pathways-narrow-line-under">Opinion</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1>Seizing B.C.\'s biomedical innovation opportunity</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>With greater collaboration and strategic investments, British Columbia and Canada can become global leaders, says&nbsp;<strong>Greg D’Avignon, President and CEO of the B.C. Business Council</strong>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
';

register_block_pattern(
	'ubc/pathways/pathways-featured-header',
	array(
		'title'          => __( 'Featured Header', 'ubc-block-patterns' ),
		'description'    => _x( '2 columns, large image one one side, and a title and intro on the other.', 'Block pattern description', 'ubc-block-patterns' ),
		'content'        => $markup,
		'categories'     => array( 'fom-pathways' ),
		'keywords'       => array( 'pathways', 'featured opinion header' )
	)
);
