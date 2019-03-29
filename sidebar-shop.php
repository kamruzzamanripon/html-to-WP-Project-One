<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dizital
 */



if ( ! is_active_sidebar( 'shop' ) ) {
return;
}
?>

<div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
    <aside id="secondary" class="widget-area">
		<?php dynamic_sidebar( 'shop' ); ?>
    </aside><!-- #secondary -->
</div>
