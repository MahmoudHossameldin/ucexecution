<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

if ( ! uc_execution()->is_primary_sidebar_active() ) {
	return;
}

uc_execution()->print_styles( 'uc-execution-sidebar', 'uc-execution-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<?php uc_execution()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
