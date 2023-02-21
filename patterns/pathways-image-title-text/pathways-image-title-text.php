<?php
/**
 * A pattern which contains a landscape image, with a title below it, and a paragraph of text below that.
 * The title has a specific block style specific to the Pathways site (a short underline).
 * The image and the paragraph text are links.
 *
 * ________________________
 * |                       |
 * |                       |
 * |       IMAGE           |
 * |                       |
 * |                       |
 * ________________________
 *
 * HEADING TEXT
 * ____
 *
 * Some paragraph text here
 * that likely spans a few
 * lines.
 *
 * @package UBCBlockPatterns
 */

$markup = '
<!-- wp:group {"className":"pathways-image-title-text","layout":{"type":"constrained"}} -->
<div class="wp-block-group pathways-image-title-text"><!-- wp:image -->
<figure class="wp-block-image"><a href="/"><img alt=""/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"is-style-pathways-narrow-line-under", "level":3} -->
<h3 class="is-style-pathways-narrow-line-under">Alzheimer\'s Disease</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="/">How lab-grown \'mini-brains\' could reveal the inner workings of dementia – and point to a cure.</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
';

register_block_pattern(
	'ubc/pathways/pathways-image-title-text',
	array(
		'title'          => __( 'Image with a title and text', 'ubc-block-patterns' ),
		'description'    => _x( 'A landscape image, with a title below it, and a paragraph of text below that. The title has a specific block style specific to the Pathways site (a short underline). The image and the paragraph text are links.', 'Block pattern description', 'ubc-block-patterns' ),
		'content'        => $markup,
		'categories'     => array( 'fom-pathways' ),
		'keywords'       => array( 'pathways', 'image title text' ),
		'viewportWidth' => 267
	)
);
