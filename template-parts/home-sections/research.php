<?php
/**
 * Template part for displaying the research & analyses section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<section class="process observe-section observe-underline animation--up">
	<div class="section-container section-content-left process__section-container">
		<div class="process__grid grid-content-styles">
			<h2 class="home-section-header process__header"><?php _e('Research & analyses to get it right from the beginning', 'uc-execution'); ?></h2>
			<ul class="process__ul">
				<li class="process__li"><?php _e('Mind, journey, empathy maps', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Creating user personas', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('User research & interviews', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Usability & user testing', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Content research', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Competitor research', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Usability testing', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Keyword research', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Information architecture', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Market & industry research', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Accessibility testing', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Heuristic analysis', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Copywriting and proofreading', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Storytelling and psychology', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Qualitative analysis', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Quantitative analysis', 'uc-execution'); ?></li>
				<li class="process__li"><?php _e('Motivation and friction points', 'uc-execution'); ?></li>
			</ul>
			<p class="process__paragraph"><?php sprintf( _e( 'We will take care of <strong>all the possible scenarios</strong> that all type of users can generate.', 'uc-execution') ); ?></p>
		</div>
		<img src="<?php echo GET_TEMP_DIR_URI . '/assets/images/process.png' ?>" class="img process__img" alt="Create a website beyond standards.">
	</div>
</section>
