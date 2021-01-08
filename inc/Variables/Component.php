<?php
/**
 * WP_Rig\WP_Rig\Custom_Logo\Component class
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig\Variables;

use WP_Rig\WP_Rig\Component_Interface;


/**
 * Class for redefining paths and URIs to work on local environment and live website without any future edits.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'variables';
	}

	/**
	 * Redefines the paths and URIs.
	 */
	public function initialize() {
		if ( ! defined( 'GET_TEMP_DIR_URI' ) ) {
			if ($_SERVER['SERVER_NAME'] == 'uc-ex.local' ){
				define( 'GET_TEMP_DIR_URI', 'https://localhost:8181/wp-content/themes/wprig' );
			}else{
				define( 'GET_TEMP_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
			}

		}
	}

}
