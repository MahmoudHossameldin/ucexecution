<?php
/**
 * Template part for displaying the articles section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

/* <!-- ===============   Date configs   =============== --> */
$time_string = '';
$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf(
		$time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	/*$time_string = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';*/

?>






<!-- ===============   End Date configs   =============== -->







<!-- ===============   Start section   =============== -->
<section class="articles observe-section observe-underline">
	<div class="section-container articles__section-container">
		<!-- ===============   Section header   =============== -->
		<h2 class="articles__header">Our latest published articles</h2>


		<!-- === Loop the posts === -->
		<?php
		$articles = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );

		while ( $articles->have_posts() ) : $articles->the_post(); ?>

		<div class="article">


			<!-- ===============   The thumbnail   =============== -->
			<?php
			if ( has_post_thumbnail() ) {
			?>
			<div class="article__img-container">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('uc-execution-home', ['class' => 'article__thumbnail']); ?></a>
			</div>


			<?php
			}
			?>

				<div class="article__data">

					<!-- ===============   The categories   =============== -->
					<?php
					$categories_list = get_the_category_list( esc_html__( ', ', 'uc-execution' ) );
						if ( $categories_list ) {
							/* translators: 1: list of categories. */
							printf( '<span class="article__cats cat-links">' . esc_html__( '%1$s', 'uc-execution' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						}
					?>


					<!-- ===============   The Title   =============== -->
					<a href="<?php the_permalink(); ?>"><h3 class="article__title"><?php the_title(); ?></h3></a>




					<!-- ===============   Date   =============== -->

					<?php
					if ( ! empty( $time_string ) ) { ?>

						<span class="article__date posted-on">
							<?php
							printf(
								/* translators: %s: post date */
								esc_html_x( '%s', 'post date', 'uc-execution' ),
								$time_string // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							);
							?>
						</span>
						<?php
					}
					?>
				</div>
		</div>



		<?php
		endwhile;
		wp_reset_postdata();
		?>

	</div>
</section>
