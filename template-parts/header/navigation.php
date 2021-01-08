<?php

/**
 * Template part for displaying the header navigation menu
 *
 * @package uc_execution
 */

namespace WP_Rig\WP_Rig;

if (!uc_execution()->is_primary_nav_menu_active()) {
	return;
}

?>

<nav id="site-navigation" class="main-navigation nav--toggle-sub nav--toggle-small" aria-label="<?php esc_attr_e('Main menu', 'uc-execution'); ?>" <?php
																																				if (uc_execution()->is_amp()) {
																																				?> [class]=" siteNavigationMenu.expanded ? 'main-navigation nav--toggle-sub nav--toggle-small nav--toggled-on' : 'main-navigation nav--toggle-sub nav--toggle-small' " <?php
																																											}
																																												?>>
	<?php
	if (uc_execution()->is_amp()) {
	?>
		<amp-state id="siteNavigationMenu">
			<script type="application/json">
				{
					"expanded": false
				}
			</script>
		</amp-state>
	<?php
	}
	?>

	<button class="menu-toggle" aria-label="<?php esc_attr_e('Open menu', 'uc-execution'); ?>" aria-controls="primary-menu" aria-expanded="false" <?php
		if (uc_execution()->is_amp()) {
			?> on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )" [aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'" <?php
			}
		?>
	>
		<span class="navigation__icon">&nbsp;</span>
	</button>

	<div class="primary-menu-container">
		<?php uc_execution()->display_primary_nav_menu(['menu_id' => 'primary-menu']); ?>
	</div>
</nav><!-- #site-navigation -->
