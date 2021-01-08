<?php
/**
 * Template part for displaying the your-vision section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<section class="vision observe-underline">
	<div class="section-container section-content-right vision__section-container">
		<div class="vision__left">

			<div class="vision__photos">
				<img src="<?php echo GET_TEMP_DIR_URI . '/assets/images/mohamed.jpg' ?>" alt="Mohamed" class="photo">
				<img src="<?php echo GET_TEMP_DIR_URI . '/assets/images/Mahmoud.jpg' ?>" alt="Mahmoud" class="photo">
				<img src="<?php echo GET_TEMP_DIR_URI . '/assets/images/mostafa.jpg' ?>" alt="Mostafa" class="photo">
			</div>

			<div class="button-container">
				<button class="vision__button">
					<a href="/contact-us" class="vision__link"><?php _e('Contact us', 'uc-execution'); ?></a>
				</button>
			</div>

		</div>

		<div class="vision__grid grid-content-styles">
			<h2 class="home-section-header vision__header"><?php _e('We believe in your vision and will treat your business as our own', 'uc-execution'); ?></h2>
			<p class="home-section-subheader vision__subheader"><?php sprintf( _e( 'We\'re more like a <strong>partner to you</strong>, treat you like a priority instead of just a number, take a very proactive approach, put thoughtfulness into each task and follow a <strong>formal and organized process</strong>.', 'uc-execution') ); ?></p>
			<ul class="vision__ul">
				<li class="vision__li"><?php sprintf( _e( 'We are a small, young in spirit team of <strong>entrepreneurs with a vision,</strong> ethos, and work ethics', 'uc-execution') ); ?></li>
				<li class="vision__li"><?php sprintf( _e( 'Add our Intellectual <strong>contribution to the product</strong> itself based on our own experience both as business people and as web experts', 'uc-execution') ); ?></li>
				<li class="vision__li"><?php sprintf( _e( 'We work on something that is really interesting to us, something we believe in', 'uc-execution') ); ?></li>
				<li class="vision__li"><?php sprintf( _e( 'Find our rhythm quickly, <strong>translate business goals</strong> into user interface concepts and turn your imagination into reality', 'uc-execution') ); ?></li>
				<li class="vision__li"><?php sprintf( _e( 'We understand <strong>your business value</strong>, will bring the concept to the table, and simplify the work on the little details', 'uc-execution') ); ?></li>
				<li class="vision__li"><?php sprintf( _e( 'Consider the big picture while working to help define your product from <strong>all possible angles</strong> and different perspectives', 'uc-execution') ); ?></li>
				<li class="vision__li"><?php sprintf( _e( 'Solve your toughest problems, some of which <strong>you aren\'t even aware</strong> of.', 'uc-execution') ); ?></li>
				<li class="vision__li"><?php sprintf( _e( 'Every design choice we make is <strong>based on science</strong> and has a purpose', 'uc-execution') ); ?></li>
				<li class="vision__li"><?php sprintf( _e( 'Never compromise on your vision or quality standards', 'uc-execution') ); ?></li>
			</ul>
		</div>


	</div>
</section>
