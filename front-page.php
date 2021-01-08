<?php

/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

get_header();

uc_execution()->print_styles('uc-execution-content', 'uc-execution-homepage');


?>
<main id="primary" class="site-main">
<?php

	/* Displaying the 11 homepage sections in order */
	get_template_part('template-parts/home-sections/hero');
	get_template_part('template-parts/home-sections/solution');
	get_template_part('template-parts/home-sections/research');
	get_template_part('template-parts/home-sections/mahmoud');
	get_template_part('template-parts/home-sections/reviews');
	get_template_part('template-parts/home-sections/creative');
	get_template_part('template-parts/home-sections/scope');
	get_template_part('template-parts/home-sections/long-term-success');
	get_template_part('template-parts/home-sections/your-own-team');
	get_template_part('template-parts/home-sections/strategy');
	get_template_part('template-parts/home-sections/your-vision');
	get_template_part('template-parts/home-sections/articles');



	/*
	https://edit.lottiefiles.com/?src=https%3A%2F%2Fassets7.lottiefiles.com%2Fpackages%2Flf20_tsteoveh.json
	https://edit.lottiefiles.com/?src=https%3A%2F%2Fassets7.lottiefiles.com%2Ftemp%2Flf20_5ZxC6E.json

	*/

?>
</main><!-- #primary -->
<?php
get_footer();
