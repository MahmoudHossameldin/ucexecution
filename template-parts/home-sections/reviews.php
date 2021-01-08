<?php
/**
 * Template part for displaying the reviews section on the homepage
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

$reviewsloop = new WP_Query( array( 'post_type' => 'review', 'posts_per_page' => 3 ) ); ?>

<section class="reviews">
	<div class="section-container">
		<?php
		while ( $reviewsloop->have_posts() ) : $reviewsloop->the_post(); ?>

			<div class="review animation--up">

				<?php
				if (get_field('review_video')){ ?>

					<div class="review__video">
						<?php echo the_field('review_video'); ?>
					</div>

				<?php } ?>

				<div class="review__body"><?php the_content(); ?></div>


				<div class="reviewer">

					<?php

					$reviewer_photo = get_field('reviewer_photo');
					$reviewer_logo = get_field('reviewer_logo');
					$size = 'small'; // (Custom image size set for reviews)


					if( $reviewer_photo ) { ?>

						<div class="photo-container">
							<?php echo '<img class="reviewer__photo" src="' . esc_url($reviewer_photo['url']) .'" alt="' . esc_attr($reviewer_photo['alt']) .'" />'; ?>
						</div>
					<?php }?>

					<div class="reviewer__bio">
						<span class="reviewer__name"><?php $reviewer_photo ? the_title() : _e('By: ', 'uc-execution') . the_title(); ?></span>

						<?php
						if (get_field('reviewer_role')){ ?>

							<span class="reviewer__role">
								<?php echo the_field('reviewer_role'); ?>
							</span>

						<?php } ?>
					</div>

					<?php if( $reviewer_logo ) { ?>

						<div class="logo-container">
							<?php echo '<img class="reviewer__logo" src="' . esc_url($reviewer_logo['url']) .'" alt="' . esc_attr($reviewer_logo['alt']) .'" />'; ?>
						</div>

					<?php } ?>

				</div>

			</div>

		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</section>
<?php
