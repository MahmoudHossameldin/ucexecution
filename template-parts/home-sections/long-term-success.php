<?php
/**
 * Template part for displaying the long-term section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<section class="long-term observe-section observe-underline">
	<div class="section-container section-content-left long-term__section-container">
		<div class="long-term__grid grid-content-styles">
			<h2 class="home-section-header long-term__header"><?php _e('We are dedicated and committed to your long-term success', 'uc-execution'); ?></h2>
			<p class="home-section-subheader long-term__subheader"><?php sprintf( _e( 'Our goal is to build a high-quality product that 100% will exceed <strong>your expectations</strong>, expand your portfolio of business, keep your phones ringing 24/7, build you a complementary and <strong>universal brand image</strong>, and be proud to show off.', 'uc-execution') ); ?></p>
			<p class="long-term__paragraph"><?php sprintf( _e( 'After your website launch we will discuss the best path forward and support you <strong>every step of the way</strong> with everything that feeds your business growth:', 'uc-execution') ); ?></p>
			<ul class="long-term__ul">
				<li class="long-term__li"><?php _e('Website maintenance, updates and support', 'uc-execution'); ?></li>
				<li class="long-term__li"><?php _e('Analytics & data reporting', 'uc-execution'); ?></li>
			</ul>
			<p class="long-term__paragraph"><?php sprintf( _e( 'Because we want the product <strong>to be successfull</strong> when it goes to market, if you\'d like we\'ll go the extra mile with you on:', 'uc-execution') ); ?></p>
			<ul class="long-term__ul">
				<li class="long-term__li"><?php _e('Google SEO & Content creation', 'uc-execution'); ?></li>
				<li class="long-term__li"><?php _e('CRO & A/B testing', 'uc-execution'); ?></li>
				<li class="long-term__li"><?php _e('Paid ads', 'uc-execution'); ?></li>
				<li class="long-term__li"><?php _e('Marketing, sales and lead generation campaigns', 'uc-execution'); ?></li>
			</ul>
		</div>
		<div class="img long-term__animation animation-right">
			<?php echo do_shortcode ('[bodymovin anim_id="673" loop="true" autoplay_viewport="true" autostop_viewport="true" align="left"]'); ?>
		</div>
	</div>

</section>
