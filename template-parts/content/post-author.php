<?php
/**
 * Template part for displaying the author
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

$post_type_obj = get_post_type_object( get_post_type() );

//only if the post supports author
if ( post_type_supports( $post_type_obj->name, 'author' ) ) {

	$avatar = get_avatar( get_the_author_meta('user_email') );
	$display_name = get_the_author_meta( 'display_name' );
	$user_description = get_the_author_meta( 'user_description' );

	if ( ! empty( $user_description ) & ! empty( $display_name ) & ! empty( $avatar ) ){
	?>
		<div class="author">
			<div class="author__avatar">
				<?php echo $avatar; ?>
			</div>
			<div class="author__bio">
				<div class="author__name">
					<strong><?php echo $display_name; ?></strong>
				</div>
				<div class="author__description">
					<p><?php echo $user_description; ?></p>
				</div>
			</div>

		</div>
	<?php
	}

}
