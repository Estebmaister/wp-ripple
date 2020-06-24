<?php
if( !function_exists('profoxbiz_default_theme_option')) :
	function profoxbiz_default_theme_option( $options ){
		$defaults = array(
			'profoxbiz_blog_post_date_hide' => true,
		);
	}
endif;
add_action('profoxbiz_bailboard_slider_cat', 'profoxbiz_default_theme_option');