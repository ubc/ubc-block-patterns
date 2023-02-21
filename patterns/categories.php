<?php
/**
 * Register any block pattern categories that we require.
 *
 * @package UBCBlockPatterns
 */

// A specific category for the patterns generated for the Pathways Site.
register_block_pattern_category(
	'fom-pathways',
	array( 'label' => __( 'UBC FoM Pathways', 'ubc-block-patterns' ) ),
);
