<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Online_Voting
 * @since Online Voting 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Online Voting 1.0
	 *
	 * @return void
	 */
	function onlinevoting_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'onlinevoting-columns-overlap',
				'label' => esc_html__( 'Overlap', 'onlinevoting' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'onlinevoting-border',
				'label' => esc_html__( 'Borders', 'onlinevoting' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'onlinevoting-border',
				'label' => esc_html__( 'Borders', 'onlinevoting' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'onlinevoting-border',
				'label' => esc_html__( 'Borders', 'onlinevoting' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'onlinevoting-image-frame',
				'label' => esc_html__( 'Frame', 'onlinevoting' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'onlinevoting-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'onlinevoting' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'onlinevoting-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'onlinevoting' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'onlinevoting-border',
				'label' => esc_html__( 'Borders', 'onlinevoting' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'onlinevoting-separator-thick',
				'label' => esc_html__( 'Thick', 'onlinevoting' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'onlinevoting-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'onlinevoting' ),
			)
		);
	}
	add_action( 'init', 'onlinevoting_register_block_styles' );
}
