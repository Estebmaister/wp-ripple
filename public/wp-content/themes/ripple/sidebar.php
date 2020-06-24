<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Ripple
 */

if ( is_active_sidebar( 'ripple-sidebar-1' ) ) {
?>
<div id="secondary" class="widget-area clearfix" role="complementary">
	<?php dynamic_sidebar( 'ripple-sidebar-1' ); ?>
</div><!-- #secondary -->
<?php
}
?>
