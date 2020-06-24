<?php
// Header
$wp_customize->add_section( 'profoxbiz_header_option' , array(
	'title' => __('Header Layout Option', 'profoxbiz'),
	'panel' => 'profoxbiz_theme_option'
) );


$wp_customize->add_setting(
	'profoxbiz_heading_layout_option',
	array(
		'default' => 'header_one',
		'sanitize_callback' => 'profoxbiz_sanitize_select',
	)
);

$wp_customize->add_control(
	'profoxbiz_heading_layout_option',
	array(
		'label'     => esc_html__( 'Select Header Layout', 'profoxbiz' ),
		'section'   => 'profoxbiz_header_option',
		'type'      => 'select',
		'choices'   => array(
			'header_one'   => esc_html__( 'Header Layout One', 'profoxbiz' ),
			'header_two'   => esc_html__( 'Header Layout Two', 'profoxbiz' ),
			'header_three'   => esc_html__( 'Header Layout Three', 'profoxbiz' ),
			'header_four'   => esc_html__( 'Header Layout Four', 'profoxbiz' ),
		),
	)
);