<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
		if (function_exists('register_nav_menus')) {
		register_nav_menus(
			array('main_nav' => 'Main Nav Menu')
		
		);
		}
		
		// FLEXSLIDER

function anaximander_flexslider() {
	if (!is_admin()) {

		// Enqueue FlexSlider JavaScript
		wp_register_script('jquery_flexslider', get_template_directory_uri(). '/js/jquery.flexslider-min.js', array('jquery') );
		wp_enqueue_script('jquery_flexslider');

		// Enqueue FlexSlider Stylesheet		
		wp_register_style( 'flexslider-style', get_template_directory_uri() . '/css/flexslider.css', 'all' );
		wp_enqueue_style( 'flexslider-style' );
		
		// FlexSlider custom settings		
		add_action('wp_footer', 'anaximander_flexslider_settings');
		
		function anaximander_flexslider_settings() { ?>			
			<script>
				jQuery(document).ready(function($){

					$('.flexslider').flexslider();
				});
			</script>
		<?php 
		}

	}
}

add_action('init', 'anaximander_flexslider');


		
		
?>