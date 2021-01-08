<?php
/**
 * Template part for displaying the beyond section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<section class="beyond observe-section observe-underline">
	<div class="section-container section-content-right beyond__section-container">
		<img src="<?php echo GET_TEMP_DIR_URI . '/assets/images/analytics.png' ?>" class="img beyond__img animation--left" alt="Create a website beyond standards.">
		<div class="beyond__grid grid-content-styles animation--right">
			<h2 class="home-section-header beyond__header"> <?php _e( 'Get a solution above and beyond just building a functional website', 'uc-execution'); ?></h2>
			<p class="home-section-subheader beyond__subheader"><?php sprintf( _e( 'You will have a website that reflects your skills, spirit, and company culture aligned with your <strong>aggressive </strong><strong>marketing</strong><strong> and sales</strong> goals:', 'uc-execution') ); ?></p>
			<ul class="beyond__ul">
				<li class="beyond__li"><?php _e( 'Brand awareness', 'uc-execution'); ?></li>
				<li class="beyond__li"><?php _e( 'Profitability and engagement', 'uc-execution'); ?></li>
				<li class="beyond__li"><?php _e( 'Traffic and SEO', 'uc-execution'); ?></li>
			</ul>
			<p class="beyond__paragraph"><?php sprintf( _e( 'We have a <strong>digital marketing component</strong> at the forefront of our mind and will make sure your priorities and strategies are arranged and effective.', 'uc-execution') ); ?></p>
			<p class="beyond__paragraph"><?php sprintf( _e( 'We will push the envelope to take you <strong>where you want to be</strong> with your online presence even if you\'re faced with a challenge to keep up with the bigger competitors in your space.', 'uc-execution') ); ?></p>
		</div>
	</div>

</section>
