<?php
/**
 * Template part for displaying the strategy section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<section class="strategy observe-section observe-underline">
	<div class="section-container section-content-left strategy__section-container">

		<div class="beyond__grid strategy-content-styles">
				<h2 class="home-section-header strategy__header"><?php _e('Empower your business strategy', 'uc-execution'); ?></h2>
				<p class="home-section-subheader strategy__subheader"><?php sprintf( _e( 'We\'re not only working on delivering outstanding websites but also suggesting <strong>workflow improvements</strong>, helpful tools, and unique solutions for your business that will empower your marketing strategy.', 'uc-execution') ); ?></p>
				<ul class="strategy__ul">
					<li class="strategy__li"><?php _e('Ask you practical and critical questions', 'uc-execution'); ?></li>
					<li class="strategy__li"><?php sprintf( _e('Dive deeply <strong>into your goals</strong> and business strategy', 'uc-execution') ); ?></li>
					<li class="strategy__li"><?php _e('Conduct the process for the product\'s vision from beginning to end', 'uc-execution'); ?></li>
					<li class="strategy__li"><?php _e('Get to understand your business meticulously and completely from the inside.', 'uc-execution'); ?></li>
					<li class="strategy__li"><?php sprintf( _e( 'Follow <strong>a process</strong> that gives you the ability to launch new, industry-leading features and marketing initiatives', 'uc-execution') ); ?></li>
					<li class="strategy__li"><?php sprintf( _e( 'Provide <strong>strategic suggestions</strong><strong> and recommendations</strong> you hadn\'t considered before or realized you needed', 'uc-execution') ); ?></li>
					<li class="strategy__li"><?php _e('Tell you what we think might be good or useful so you could make more informed decisions', 'uc-execution'); ?></li>
					<li class="strategy__li"><?php _e('Help you get the best out of your digital marketing, branding, SEO, email marketing, and demand and lead generation strategies', 'uc-execution'); ?></li>
				</ul>
		</div>

		<div class="img strategy__animation animation-right">
			<?php echo do_shortcode ('[bodymovin anim_id="675" autoplay_viewport="true" autostop_viewport="true" align="left"]'); ?>
		</div>
	</div>
</section>
