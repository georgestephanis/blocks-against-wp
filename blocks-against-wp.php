<?php

// Plugin name: Blocks Against WordPress

add_action( 'init', 'register_blocks_against_wp_card_block' );
function register_blocks_against_wp_card_block() {
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_style( 'blocks-against-wp', plugins_url( 'blocks/blocks-against-wp.css', __FILE__ ) );
	wp_register_script(
		'blocks-against-wp-editor',
		plugins_url( 'blocks/blocks-against-wp.js', __FILE__ ),
		array(
			'wp-blocks',
			'wp-components',
		)
	);

	register_block_type( 'address-block/address', array(
		'editor_script' => 'blocks-against-wp-editor',
		'style' => 'blocks-against-wp',
	) );
}

/*
 * To Do:
 *  - Flesh out Card Block UI for more visual editing.
 *  - Register Card CPT that is just a single instance of the block.
 *  - REST API endpoints that will list all defined cards and properties.
 */
