<?php 

// latest post section
$wp_customize->add_section( 'profoxbiz_latest_post_section' , array(
	'title' => __('Latest Post', 'profoxbiz'),
	'panel' => 'profoxbiz_front_page'
) );

// Show section 
$wp_customize->add_setting(
	'profoxbiz_latest_post_section_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_latest_post_section_show',
	array(
		'label'     => esc_html__( 'Latest post section show', 'profoxbiz' ),
		'section'   => 'profoxbiz_latest_post_section',
		'type'      => 'checkbox',
	)
); 


// section title
$wp_customize->add_setting(
	'profoxbiz_latest_post_title',
	array(
		'default' => 'Our Latest Post',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_latest_post_title',
	array(
		'label'     => esc_html__( 'Latest post section title', 'profoxbiz' ),
		'section'   => 'profoxbiz_latest_post_section',
		'type'      => 'text',
	)
); 


// section description
$wp_customize->add_setting(
	'profoxbiz_latest_post_description',
	array(
		'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_latest_post_description',
	array(
		'label'     => esc_html__( 'Latest post section caption', 'profoxbiz' ),
		'section'   => 'profoxbiz_latest_post_section',
		'type'      => 'text',
	)
); 



// background color
$wp_customize->add_setting( 'profoxbiz_latest_post_section_bg', array(
	'default' => '#fff',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_latest_post_section_bg', array(
	'label' => __('Latest post section background', 'profoxbiz'),
	'section' => 'profoxbiz_latest_post_section',	
)));