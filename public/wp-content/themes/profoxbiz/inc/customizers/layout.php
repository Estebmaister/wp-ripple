<?php

// Page Layout
$wp_customize->add_section( 'profoxbiz_page_option' , array(
	'title' => __('Page Layout Option', 'profoxbiz'),
	'panel' => 'profoxbiz_theme_option'
) );

// Single post
$wp_customize->add_setting(
	'profoxbiz_single_page_layout_option',
	array(
		'default' => 'right',
		'sanitize_callback' => 'profoxbiz_sanitize_select',
	)
);

$wp_customize->add_control(
	'profoxbiz_single_page_layout_option',
	array(
		'label'     => esc_html__( 'Select Single Page Layout', 'profoxbiz' ),
		'section'   => 'profoxbiz_page_option',
		'type'      => 'select',
		'choices'   => array(
			'left'   => esc_html__( 'Left Sidebar', 'profoxbiz' ),
			'right'   => esc_html__( 'Right Sidebar', 'profoxbiz' ),
			'none'   => esc_html__( 'No Sidebar', 'profoxbiz' ),			
		),
	)
);

// Archive
$wp_customize->add_setting(
	'profoxbiz_archive_page_layout_option',
	array(
		'default' => 'right',
		'sanitize_callback' => 'profoxbiz_sanitize_select',
	)
);

$wp_customize->add_control(
	'profoxbiz_archive_page_layout_option',
	array(
		'label'     => esc_html__( 'Select Archive Page Layout', 'profoxbiz' ),
		'section'   => 'profoxbiz_page_option',
		'type'      => 'select',
		'choices'   => array(
			'left'   => esc_html__( 'Left Sidebar', 'profoxbiz' ),
			'right'   => esc_html__( 'Right Sidebar', 'profoxbiz' ),
			'none'   => esc_html__( 'No Sidebar', 'profoxbiz' ),			
		),
	)
);