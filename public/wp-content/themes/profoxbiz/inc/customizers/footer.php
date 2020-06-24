<?php 
$wp_customize->add_section( 'profoxbiz_footer_layout' , array(
	'title' => __('Footer layout', 'profoxbiz'),
	'panel' => 'profoxbiz_theme_option'
) );

$wp_customize->add_setting(
	'profoxbiz_copyright',
	array(
		'default' => 'Copyright 2020',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_copyright',
	array(
		'label'     => esc_html__( 'Copy right', 'profoxbiz' ),
		'section'   => 'profoxbiz_footer_layout',
		'type'      => 'text',
	)
); 
// footer background color
$wp_customize->add_setting( 'profoxbiz_footer_background_color', array(
	'default' => '#6cad11',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_footer_background_color', array(
	'label' => __('Footer background color', 'profoxbiz'),
	'section' => 'profoxbiz_footer_layout',	
)));

// footer color
$wp_customize->add_setting( 'profoxbiz_footer_content_color', array(
	'default' => '#5f5f5f',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_footer_content_color', array(
	'label' => __('Footer Color', 'profoxbiz'),
	'section' => 'profoxbiz_footer_layout',	
)));

$wp_customize->add_setting( 'profoxbiz_footer_title_color', array(
	'default' => '#fff',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_footer_title_color', array(
	'label' => __('Footer Title Color', 'profoxbiz'),
	'section' => 'profoxbiz_footer_layout',	
)));