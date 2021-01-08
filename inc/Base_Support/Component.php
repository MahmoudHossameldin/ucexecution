<?php
/**
 * WP_Rig\WP_Rig\Base_Support\Component class
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig\Base_Support;

use WP_Rig\WP_Rig\Component_Interface;
use WP_Rig\WP_Rig\Templating_Component_Interface;
use function add_action;
use function add_filter;
use function add_theme_support;
use function is_singular;
use function pings_open;
use function esc_url;
use function get_bloginfo;
use function wp_scripts;
use function wp_get_theme;
use function get_template;

/**
 * Class for adding basic theme support, most of which is mandatory to be implemented by all themes.
 *
 * Exposes template tags:
 * * `uc_execution()->get_version()`
 * * `uc_execution()->get_asset_version( string $filepath )`
 */
class Component implements Component_Interface, Templating_Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'base_support';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', [ $this, 'action_essential_theme_support' ] );
		add_action( 'wp_head', [ $this, 'action_add_pingback_header' ] );
		add_filter( 'body_class', [ $this, 'filter_body_classes_add_hfeed' ] );
		add_filter( 'embed_defaults', [ $this, 'filter_embed_dimensions' ] );
		add_filter( 'theme_scandir_exclusions', [ $this, 'filter_scandir_exclusions_for_optional_templates' ] );
		add_filter( 'script_loader_tag', [ $this, 'filter_script_loader_tag' ], 10, 2 );
		add_filter( 'excerpt_length', [ $this, 'filter_custom_excerpt_length' ], 999 );
		add_filter( 'excerpt_more', [ $this, 'filter_excerpt_more' ] );
		add_filter( 'comment_form_default_fields', [$this, 'filter_unset_url_field'] );
		add_filter( 'comment_form_default_fields', [$this, 'filter_edit_cookies_field'], 20 );
		add_filter( 'get_comment_date', [$this, 'filter_change_comment_date_format'], 10, 3 );
	}

	/**
	 * Gets template tags to expose as methods on the Template_Tags class instance, accessible through `uc_execution()`.
	 *
	 * @return array Associative array of $method_name => $callback_info pairs. Each $callback_info must either be
	 *               a callable or an array with key 'callable'. This approach is used to reserve the possibility of
	 *               adding support for further arguments in the future.
	 */
	public function template_tags() : array {
		return [
			'get_version'       => [ $this, 'get_version' ],
			'get_asset_version' => [ $this, 'get_asset_version' ],
		];
	}

	/**
	 * Adds theme support for essential features.
	 */
	public function action_essential_theme_support() {
		// Add default RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Ensure WordPress manages the document title.
		add_theme_support( 'title-tag' );

		// Ensure WordPress theme features render in HTML5 markup.
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			]
		);

		// Add support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}

	/**
	 * Adds a pingback url auto-discovery header for singularly identifiable articles.
	 */
	public function action_add_pingback_header() {
		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
		}
	}

	/**
	 * Adds a 'hfeed' class to the array of body classes for non-singular pages.
	 *
	 * @param array $classes Classes for the body element.
	 * @return array Filtered body classes.
	 */
	public function filter_body_classes_add_hfeed( array $classes ) : array {
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
			$classes[] = 'archive-view';
		}

		return $classes;
	}

	/**
	 * Sets the embed width in pixels, based on the theme's design and stylesheet.
	 *
	 * @param array $dimensions An array of embed width and height values in pixels (in that order).
	 * @return array Filtered dimensions array.
	 */
	public function filter_embed_dimensions( array $dimensions ) : array {
		$dimensions['width'] = 720;
		return $dimensions;
	}

	/**
	 * Excludes any directory named 'optional' from being scanned for theme template files.
	 *
	 * @link https://developer.wordpress.org/reference/hooks/theme_scandir_exclusions/
	 *
	 * @param array $exclusions the default directories to exclude.
	 * @return array Filtered exclusions.
	 */
	public function filter_scandir_exclusions_for_optional_templates( array $exclusions ) : array {
		return array_merge(
			$exclusions,
			[ 'optional' ]
		);
	}

	/**
	 * Adds async/defer attributes to enqueued / registered scripts.
	 *
	 * If #12009 lands in WordPress, this function can no-op since it would be handled in core.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12009
	 *
	 * @param string $tag    The script tag.
	 * @param string $handle The script handle.
	 * @return string Script HTML string.
	 */
	public function filter_script_loader_tag( string $tag, string $handle ) : string {

		foreach ( [ 'async', 'defer' ] as $attr ) {
			if ( ! wp_scripts()->get_data( $handle, $attr ) ) {
				continue;
			}

			// Prevent adding attribute when already added in #12009.
			if ( ! preg_match( ":\s$attr(=|>|\s):", $tag ) ) {
				$tag = preg_replace( ':(?=></script>):', " $attr", $tag, 1 );
			}

			// Only allow async or defer, not both.
			break;
		}

		return $tag;
	}

	/**
	 * Gets the theme version.
	 *
	 * @return string Theme version number.
	 */
	public function get_version() : string {
		static $theme_version = null;

		if ( null === $theme_version ) {
			$theme_version = wp_get_theme( get_template() )->get( 'Version' );
		}

		return $theme_version;
	}

	/**
	 * Gets the version for a given asset.
	 *
	 * Returns filemtime when WP_DEBUG is true, otherwise the theme version.
	 *
	 * @param string $filepath Asset file path.
	 * @return string Asset version number.
	 */
	public function get_asset_version( string $filepath ) : string {
		if ( WP_DEBUG ) {
			return (string) filemtime( $filepath );
		}

		return $this->get_version();
	}

	/**
	 * Sets excerpt length
	 */
	public function filter_custom_excerpt_length( $length ) {
		return 35;
	}

	/**
	 * Excerpt more
	 */
	public function filter_excerpt_more(){
		return;
	}

	/**
	 * Remove website field from comments form
	 */
	public function filter_unset_url_field($fields){
		if(isset($fields['url']))
		   unset($fields['url']);
		   return $fields;
	}

	/**
	 * Edit cookies field in comments form
	 */
	public function filter_edit_cookies_field( $fields ) {
		$commenter = wp_get_current_commenter();

		$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

		$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
						 '<label for="wp-comment-cookies-consent">'.__('Save and follow up by email', 'textdomain').'</label></p>';
		return $fields;
	}

	/**
	 * Change date format in comments
	 */
	public function filter_change_comment_date_format($date, $d, $comment) {
		return sprintf( _x( '%s ago', '%s = comment human-readable time ago', 'uc-execution' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) );
	}


	/**
	 *  Remove comment time
	 */
	public function filter_remove_comment_time($date, $d, $comment) {
		if ( !is_admin() ) {
				return;
		} else {
				return $date;
		}
	}
}
