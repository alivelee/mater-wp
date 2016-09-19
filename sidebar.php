<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mater-wp
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php if(dynamic_sidebar( 'sidebar-1' )): ?>
		<h3>Sidebar Setup</h3>
		<p>Please add widgets via the main area!</p>
	<?php endif; ?>
</aside><!-- #secondary -->
