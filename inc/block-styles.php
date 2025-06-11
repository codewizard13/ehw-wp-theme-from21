<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since From21 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since From21 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'from21-columns-overlap',
				'label' => esc_html__( 'Overlap', 'from21' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'from21-border',
				'label' => esc_html__( 'Borders', 'from21' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'from21-border',
				'label' => esc_html__( 'Borders', 'from21' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'from21-border',
				'label' => esc_html__( 'Borders', 'from21' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'from21-image-frame',
				'label' => esc_html__( 'Frame', 'from21' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'from21-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'from21' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'from21-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'from21' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'from21-border',
				'label' => esc_html__( 'Borders', 'from21' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'from21-separator-thick',
				'label' => esc_html__( 'Thick', 'from21' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'from21-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'from21' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
