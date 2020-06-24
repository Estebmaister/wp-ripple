<?php
// Theme color
$wp_customize->add_section( 'profoxbiz_color' , array(
	'title' => __('Theme color', 'profoxbiz'),
	'panel' => 'profoxbiz_theme_option'
) );

// Anchor color
$wp_customize->add_setting( 'profoxbiz_anchor_color', array(
	'default' => '#5f5f5f',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_anchor_color', array(
	'label' => __('Anchor Color', 'profoxbiz'),
	'section' => 'profoxbiz_color',	
)));


$wp_customize->add_setting( 'profoxbiz_primary_theme_color', array(
	'default' => '#6cad11',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_primary_theme_color', array(
	'label' => __('Theme/button color', 'profoxbiz'),
	'section' => 'profoxbiz_color',	
)));

$wp_customize->add_setting( 'profoxbiz_primary_btn_text_color', array(
	'default' => '#fff',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_primary_btn_text_color', array(
	'label' => __('Button text color', 'profoxbiz'),
	'section' => 'profoxbiz_color',	
)));

$wp_customize->add_setting( 'profoxbiz_primary_btn_hover_color', array(
	'default' => '#5e960f',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_primary_btn_hover_color', array(
	'label' => __('Button hover background color', 'profoxbiz'),
	'section' => 'profoxbiz_color',	
)));