<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Nuntius
 * @since Nuntius 1.0
 */
?>

		<div id="sidebar-primary" class="sidebar aside" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			

			<?php endif; // end sidebar widget area ?>
		</div><!-- #sidebar-primary .sidebar .aside -->