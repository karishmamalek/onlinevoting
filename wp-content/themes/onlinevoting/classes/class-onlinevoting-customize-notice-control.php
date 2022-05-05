<?php
/**
 * Customize API: Online_Voting_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage Online_Voting
 * @since Online Voting 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Online Voting 1.0
 *
 * @see WP_Customize_Control
 */
class Online_Voting_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Online Voting 1.0
	 *
	 * @var string
	 */
	public $type = 'onlinevoting-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since Online Voting 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'onlinevoting' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/onlinevoting/#dark-mode-support', 'onlinevoting' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'onlinevoting' ); ?>
			</a></p>
		</div>
		<?php
	}
}
