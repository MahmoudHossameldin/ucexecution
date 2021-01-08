<?php
/**
 * The sidebar containing the footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

if ( ! uc_execution()->is_footer_widgets_active() ) {
	return;
}

uc_execution()->print_styles( 'uc-execution-footer-widgets', 'uc-execution-widgets' );

?>
<aside id="footer-widgets" class="footer-widgets-area widget-area">
	<?php uc_execution()->display_footer_widgets(); ?>
</aside><!-- #secondary -->
