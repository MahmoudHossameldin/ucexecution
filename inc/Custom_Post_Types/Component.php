<?php
/**
 * WP_Rig\WP_Rig\Custom_Logo\Component class
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig\Custom_Post_Types;

use WP_Rig\WP_Rig\Component_Interface;
use function add_action;
use function register_post_type;

/**
 * Class for adding custom post types.
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
		return 'custom_post_types';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'init', [ $this, 'action_register_custom_post_types' ] );
	}

	/**
	 * Registers the custom post types.
	 */
	public function action_register_custom_post_types() {
		$labels = array(
			'name'                  => _x( 'Reviews', 'Post type general name', 'wprig' ),
			'singular_name'         => _x( 'Review', 'Post type singular name', 'wprig' ),
			'menu_name'             => _x( 'Reviews', 'Admin Menu text', 'wprig' ),
			'name_admin_bar'        => _x( 'Review', 'Add New on Toolbar', 'wprig' ),
			'add_new_item'          => __( 'Add New Review', 'wprig' ),
			'new_item'              => __( 'New Review', 'wprig' ),
			'edit_item'             => __( 'Edit Review', 'wprig' ),
			'view_item'             => __( 'View Review', 'wprig' ),
			'all_items'             => __( 'All Reviews', 'wprig' ),
			'parent_item_colon'     => __( 'Parent Reviews:', 'wprig' ),
			'not_found'             => __( 'No reviews found.', 'wprig' ),
			'not_found_in_trash'    => __( 'No reviews found in Trash.', 'wprig' ),
			'archives'              => _x( 'Review archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wprig' ),
			'insert_into_item'      => _x( 'Insert into review', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wprig' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this review', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wprig' ),
			'filter_items_list'     => _x( 'Filter reviews list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wprig' ),
			'items_list_navigation' => _x( 'Reviews list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wprig' ),
			'items_list'            => _x( 'Reviews list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wprig' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'rewrite'            => array( 'slug' => 'review' ),
			'has_archive'        => true,
			'menu_icon'			 => 'dashicons-star-filled',
			'supports'			 => ['title', 'editor', 'custom-fields'],
		);
		register_post_type( 'review', $args );
	}
}
