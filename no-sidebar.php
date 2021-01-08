<?php
/**
 * Template Name: No Sidebar
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

get_header();

uc_execution()->print_styles('uc-execution-content');

?>
<main id="primary" class="site-main">
	<?php
	if (have_posts()) {

		get_template_part('template-parts/content/page_header');

		while (have_posts()) {
			the_post();

			get_template_part('template-parts/content/entry', get_post_type());
		}

		if (!is_singular()) {
			get_template_part('template-parts/content/pagination');
		}
	} else {
		get_template_part('template-parts/content/error');
	}
	?>
</main><!-- #primary -->
<?php
get_footer();
