<?php
/**
 * Template part for displaying the footer info
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
	<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link();
	}
	?>
	<span class="sep"> | </span>

	<a class="footer__sitemap" href="/sitemap_index.xml"><?php _e('Sitemap', 'uc-execution'); ?></a>

	<span class="sep"> | </span>

	<a class="footer__contact" href="/contact-us"><?php _e('Contact us', 'uc-execution'); ?></a>

	<span class="sep"> | </span>

	<?php $year = date('Y'); ?>
	<span class="footer__copyright"><?php printf( esc_html__('&copy; %d UC Execution.', 'uc-execution'), $year ); ?></span>


</div><!-- .site-info -->
