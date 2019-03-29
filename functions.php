<?php
/**
 * dizital functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dizital
 */

//wordpress initial setting
require get_template_directory() . '/inc/default-wp-setting.php';

//List of scripts file
require get_template_directory() . '/inc/scripts-file.php';

//Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

//Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

//Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}






//Load CS Framework
require get_template_directory() . '/lib/csf/cs-framework.php';
require get_template_directory() . '/lib/csf/cs-framework-path.php';

//CS file and metabox files
require get_template_directory() . '/inc/metabox-files.php';

//Essential function
require get_template_directory() . '/inc/essential-function.php';

//Kirki
require get_template_directory() . '/lib/customizer/class-kirki-installer-section.php';
require get_template_directory() . '/lib/customizer/kirki-main-section.php';

//Require Pluging list
require get_template_directory() . '/inc/require-plugin-list.php';

//Advance Search from
require get_template_directory() . '/wp-advanced-search/wpas.php';
require get_template_directory() . '/inc/advance-search-from.php';




//Demo Data import function
function dizital_import_files() {
	return array(
		array(
			'import_file_name'             => 'Demo Page data',
			'categories'                   => array( 'Category 1', 'Category 2' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-data/dizital_demo.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-data/dizital-widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-data/dizital-export.dat',

			'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
			'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
		)
	);
}
add_filter( 'pt-ocdi/import_files', 'dizital_import_files' );




