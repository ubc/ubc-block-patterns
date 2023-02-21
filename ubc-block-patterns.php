<?php

/**
 * UBC Block Patterns
 *
 * @package     UBCBlockPatterns
 * @author      Richard Tape
 * @copyright   2023 Richard Tape
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: UBC Block Patterns
 * Plugin URI:  https://ctlt.ubc.ca/
 * Description: Provides block patterns - a starting point to create content.
 * Version:     1.0.0
 * Author:      Richard Tape
 * Author URI:  https://ctlt.ubc.ca/
 * Text Domain: ubc-block-patterns
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Register our block pattern categories.
require 'patterns/categories.php';

// Register specific patterns.
require 'patterns/pathways-image-title-text/pathways-image-title-text.php';
require 'patterns/pathways-related-stories/pathways-related-stories.php';
require 'patterns/pathways-never-miss-an-issue/pathways-never-miss-an-issue.php';


/**
 * Register and Enqueue the CSS for the different patterns.
 *
 * @return void
 *
 * @package UBCBlockPatterns
 */
function enqueue_block_assets__ubc_block_patterns() {
	wp_enqueue_style(
		'ubc-block-patterns',
		plugins_url( 'css/style.css', __FILE__ )
	);
}//end enqueue_block_assets__ubc_block_patterns()

add_action( 'enqueue_block_assets', 'enqueue_block_assets__ubc_block_patterns' );
