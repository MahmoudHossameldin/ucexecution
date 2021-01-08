<?php
/**
 * Template part for displaying the Mahmoud section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<section class="mahmoud">
	<div class="section-container mahmoud__section-container">
		<img src="<?php echo GET_TEMP_DIR_URI . '/assets/images/Mahmoud.jpg' ?>" class="mahmoud__photo animation--left" alt="Mahmoud Hossameldin is the founder of UC Execution">
		<p class="mahmoud__bio"><?php _e( 'Mahmoud is the founder of UC Execution, he is a young entrepreneur and passionate team leader, he worked as a web developer since he was 19, started his own blog, learnt digital marketing, SEO, and CRO to grow his business. He shares the value of the end game you\'re seeking.', 'uc-execution' ); ?></p>
		<div class="mahmoud__cta">
			<button class="mahmoud__btn animation--right">
				<a href="/contact-us" class="mahmoud__link"><?php _e( 'Talk to Mahmoud', 'uc-execution' ); ?></a>
			</button>
		</div>

	</div>
</section>
