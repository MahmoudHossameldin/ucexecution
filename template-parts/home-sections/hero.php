<?php
/**
 * Template part for displaying the hero section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>

<section class="hero observe-underline">
	<div class="hero-section-container">
		<h1 class="hero__title"><?php sprintf( _e('<span class="underline underline-text">Build your website</span> using <span class="underline underline-text">2050\'s technology</span>, <span class="underline underline-text">research</span>, digital <span class="underline underline-text">psychology</span>, and <span class="underline underline-text">dominate</span> your fiercely competitive market.', 'uc-execution') ); ?></h1>
		<div class="hero__content-container">
			<div class="hero__right hero__animation">
				<?php echo do_shortcode ('[bodymovin anim_id="673" align="left"]'); ?>
			</div>

			<div class="hero__left">
				<div class="hero__ctas">
					<button class="btn hero__btn hero__tell"><?php _e( 'Tell Me More', 'uc-execution' ); ?> </button>
					<button class="btn hero__btn hero__contact">
						<a href="/contact-us" class="hero__link hero__contact--link"><?php _e( 'Contact us', 'uc-execution' ); ?></a>
					</button>
				</div>

				<p class="hero__paragraph"><?php sprintf( _e('After launching your website, we\'ll help with everything you have to do to grow, expand and shine <span class="underline underline-text">above the competition</span>.', 'uc-execution') ); ?></p>
			</div>
		</div>
	</div>
</section>
