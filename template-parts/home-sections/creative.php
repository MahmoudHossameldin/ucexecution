<?php
/**
 * Template part for displaying the brain section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<section class="creative observe-underline">

	<div class="section-container section-content-left creative__section-container">
		<div class="creative__grid grid-content-styles">
			<h2 class="home-section-header creative__header"><?php _e('Get a creative and intuitive solution aimed at increasing conversions and engagement', 'uc-execution') ?></h2>
			<ul class="creative__ul">
				<li class="creative__li"><?php sprintf( _e( 'Modern, <strong>stunning</strong> and clean design', 'uc-execution') ); ?></li>
				<li class="creative__li"><?php sprintf( _e( 'Emotional, research and psychology based <strong>content and storytelling</strong> that increase loyalty and massively accelerate your sales', 'uc-execution') ); ?></li>
				<li class="creative__li"><?php sprintf( _e( 'Easy to navigate responsive with a standardized view on any browser or device', 'uc-execution') ); ?></li>
				<li class="creative__li"><?php sprintf( _e( 'Funnel-like information architecture educating the users', 'uc-execution') ); ?></li>
				<li class="creative__li"><?php sprintf( _e( '100% <strong>manageable backend</strong> to connect, add, edit, or remove anything or service', 'uc-execution') ); ?></li>
				<li class="creative__li"><?php sprintf( _e( 'Trustworthy and reliable website', 'uc-execution') ); ?></li>
			</ul>
			<p class="creative__paragraph"><?php sprintf( _e( 'You will get a <strong>data-driven</strong> design, highly functional and <strong>very fast</strong> website using performant coding practices explained here (others don\'t even know about) and <strong>psychological frameworks</strong> to influence user actions.', 'uc-execution') ); ?></p>
		</div>

		<img src="<?php echo GET_TEMP_DIR_URI . '/assets/images/brain.png' ?>" class="img creative__img" alt="Build a website that motivates your users to take action.">

	</div>

</section>
