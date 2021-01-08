<?php
/**
 * Template part for displaying the page header of the currently displayed page
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

if ( is_404() ) {
	?>
	<header class="page-header">
		<h1 class="page-title">
			<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'uc-execution' ); ?>
		</h1>
	</header><!-- .page-header -->
	<?php
} elseif ( is_home() && ! have_posts() ) {
	?>
	<header class="page-header">
		<h1 class="page-title">
			<?php esc_html_e( 'Nothing Found', 'uc-execution' ); ?>
		</h1>
	</header><!-- .page-header -->
	<?php
} elseif ( is_home() && ! is_front_page() ) { /* The blog page */
	?>
	<header class="page-header">
		<h1 class="page-title">
			<?php /* single_post_title(); */
				_e('All things business growth', 'uc-execution');
			?>
		</h1>
		<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
	</header><!-- .page-header -->
	<!--<h1 class="page-title">All things business growth</h1>-->

	<?php
} elseif ( is_search() ) {
	?>
	<header class="page-header">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: search query */
				esc_html__( 'Search Results for: %s', 'uc-execution' ),
				'<span>' . get_search_query() . '</span>'
			);
			?>
		</h1>
	</header><!-- .page-header -->
	<?php
} elseif ( is_archive() ) {
	?>
	<header class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->
	<?php
}
