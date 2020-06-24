<?php

 //select sanitization function
if ( ! function_exists( 'profoxbiz_sanitize_select' ) ) :
	function profoxbiz_sanitize_select( $input, $setting ){
		$input = sanitize_key($input);
		$choices = $setting->manager->get_control( $setting->id )->choices;
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
endif;

 //checkbox sanitization function
function profoxbiz_sanitize_checkbox( $input ){
	return ( isset( $input ) ? true : false );
}