<?php
/**
 * WP_Rig\WP_Rig\Homepage_Base\Component class
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig\Homepage_Base;

use WP_Rig\WP_Rig\Component_Interface;
use WP_Rig\WP_Rig\Templating_Component_Interface;
use function WP_Rig\WP_Rig\uc_execution;
/**
 * Class for homepage.
 *
 * Loads the javascript.
 *
 * @link https://wordpress.org/plugins/amp/
 */
class Component implements Component_Interface, Templating_Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'homepage_base';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', array( $this, 'action_enqueue_homepage_base_script' ) );
	}

	/**
	 * Gets template tags to expose as methods on the Template_Tags class instance, accessible through `uc_execution()`.
	 *
	 * @return array Associative array of $method_name => $callback_info pairs. Each $callback_info must either be
	 *               a callable or an array with key 'callable'. This approach is used to reserve the possibility of
	 *               adding support for further arguments in the future.
	 */
	public function template_tags() : array {
		return array(
			/*'display_related_posts' => array( $this, 'display_related_posts' ),*/
		);
	}


	/**
	 * Enqueues the homepage script file.
	 */
	public function action_enqueue_homepage_base_script() {

		// If the AMP plugin is active, return early.
		if ( uc_execution()->is_amp() ) {
			return;
		}

		// Enqueue the navigation script.
		if ( is_front_page() ) {
			wp_enqueue_script(
				'uc-execution-homepage',
				get_theme_file_uri( '/assets/js/homepage.min.js' ),
				array(),
				uc_execution()->get_asset_version( get_theme_file_path( '/assets/js/homepage.min.js' ) ),
				false
			);
			wp_script_add_data( 'uc-execution-homepage', 'async', true );
			wp_script_add_data( 'uc-execution-homepage', 'precache', true );
		}
	}

}
