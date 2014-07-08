<?php 
if ( ! function_exists( 'myblog_setup' ) ) :

function myblog_setup() {

	/*
	 * Make Myblog available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 */
	load_theme_textdomain( 'myblog', get_template_directory() . '/languages' );

	/*
	* Available Menu
	*/	
	register_nav_menus( array(
		'menu'=>'Menu Superior',
	));
	
	/*
	* Available Thumbnails and Sizes
	*/
	add_theme_support( 'post-thumbnails' );
	add_image_size('slider_thumbs', 470, 300, true);
	add_image_size('list_articles_thumbs', 450, 370, true);
	
	/*
	* Available Sidebar
	*/
	register_sidebar( array(
		'name'=>'Sidebar',
		'before_widget'=>'<section class="widget">',
		'after_widget'=>'</section>',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',
	));
	
	register_sidebar( array(
		'name'=>'Footer',
		'before_widget'=>'<section class="widget">',
		'after_widget'=>'</section>',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',
	));
	
}
endif; // myblog_setup
add_action( 'after_setup_theme', 'myblog_setup' );
?>