<?php
/**
 * Template part for displaying the your-own-team section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<section class="team observe-section observe-underline">

	<div class="section-container section-content-left team__section-container">
		<div class="img strategy__animation animation-left">
			<?php echo do_shortcode ('[bodymovin anim_id="674" autoplay_viewport="true" autostop_viewport="true" align="left"]'); ?>
		</div>

		<div class="team__grid grid-content-styles">
			<h2 class="home-section-header team__header"><?php _e('You will feel that we are part of your own team', 'uc-execution'); ?></h2>
			<ul class="team__ul">
				<li class="team__li"><?php sprintf( _e( 'We will be super responsive, <strong>efficiently communicate</strong> and build the experience on trust', 'uc-execution') ); ?></li>
				<li class="team__li"><?php sprintf( _e( 'Understand that a lot of your time is required to accomplish what you need to do to be successful', 'uc-execution') ); ?></li>
				<li class="team__li"><?php sprintf( _e( 'Automatically provide you with <strong>scheduled reports</strong>', 'uc-execution') ); ?></li>
				<li class="team__li"><?php sprintf( _e( 'Open to <strong>your preferred</strong> project management systems and collaboration tools', 'uc-execution') ); ?></li>
				<li class="team__li"><?php sprintf( _e( 'Break down the requirements into functionalities', 'uc-execution') ); ?></li>
				<li class="team__li"><?php sprintf( _e( 'We have an involved, <strong>personal approach to projects</strong> so you can contact Mahmoud directly without feeling you\'re lost in a shuffle', 'uc-execution') ); ?></li>
				<li class="team__li"><?php sprintf( _e( 'Attentively and proactively listen to your requirements and adhere to the outlined timelines', 'uc-execution') ); ?></li>
			</ul>
			<p class="team__paragraph"><?php sprintf( _e( 'We will communicate with <strong>your schedule</strong> and overcome our time zone differences <strong>without bothering you</strong> waking up at night or early morning to be on stand-ups with us.', 'uc-execution') ); ?></p>
			<div>
				<button class="team__button">
					<a href="/contact-us" class="team__link"><?php _e('Contact us', 'uc-execution'); ?></a>
				</button>
			</div>
		</div>
	</div>


</section>
