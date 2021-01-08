<?php
/**
 * Template part for displaying a post's header
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>

<header class="entry-header">
	<?php
	get_template_part( 'template-parts/content/entry_title', get_post_type() );

	if (is_singular() && function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();

	if ( ! is_search() & ! is_archive() & ! is_home() ) {
		get_template_part( 'template-parts/content/entry_meta', get_post_type() );
	}

	get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
	?>
</header><!-- .entry-header -->
