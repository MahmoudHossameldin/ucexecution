<?php
/**
 * Template part for displaying a post's footer
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

?>
<footer class="entry-footer">

	<?php
	if ( /*! is_search() & ! is_archive() & ! is_home()*/ is_single() ) {
		get_template_part( 'template-parts/content/entry_taxonomies', get_post_type() );

		// Show post author.
		get_template_part( 'template-parts/content/post-author' );

		get_template_part( 'template-parts/content/entry_actions', get_post_type() );
	}?>

</footer><!-- .entry-footer -->
