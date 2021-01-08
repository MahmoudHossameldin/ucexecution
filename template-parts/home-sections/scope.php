<?php
/**
 * Template part for displaying the no vision or scope section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<section class="scope observe-section observe-underline">
	<div class="section-container section-content-right scope__section-container">
		<img src="<?php echo GET_TEMP_DIR_URI . '/assets/images/scope.png' ?>" class="img scope__img animation--left" alt="Create a website beyond standards.">
		<div class="beyond__grid grid-content-styles animation--right">
			<h2 class="home-section-header scope__header"><?php _e('No clear vision or a fully planned scope? No problem', 'uc-execution'); ?></h2>
			<p class="home-section-subheader scope__subheader"><?php sprintf( _e( 'Just communicate your goals and priorities, <strong>we will</strong> be involved end to end, <strong>create a strategy</strong> around what should be on the website.', 'uc-execution') ); ?></p>
			<ul class="scope__ul">
				<li class="scope__li"><?php sprintf( _e( 'You don\'t need to be spoon-feeding us, we <strong>can help you</strong> find the starting point', 'uc-execution') ); ?></li>
				<li class="scope__li"><?php sprintf( _e( 'We understand the start-up world and how to work with <strong>clients who have </strong><strong>fewer resources</strong> and experience', 'uc-execution') ); ?></li>
			</ul>
			<p class="scope__paragraph"><?php sprintf( _e( 'We <strong>have a vision for your work</strong> beyond what you tell us to do thanks to a powerful process we follow.', 'uc-execution') ); ?></p>
		</div>
	</div>
</section>
