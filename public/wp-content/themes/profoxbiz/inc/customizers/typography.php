<?php
// Typography
$wp_customize->add_section( 'profoxbiz_typography' , array(
	'title' => __('Typography', 'profoxbiz'),
	'panel' => 'profoxbiz_theme_option'
) );


// body
$wp_customize->add_setting( 'profoxbiz_body_font_size',
	array(
		'default'			=> '0.875rem ',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_body_font_size',
	array(
		'label'           => __( 'Body font size ', 'profoxbiz' ),
		'section'         => 'profoxbiz_typography',
		'type'            => 'text'
	)
);


$wp_customize->add_setting( 'profoxbiz_body_line_height',
	array(
		'default'			=> '1.5',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_body_line_height',
	array(
		'label'           => __( 'Body line height ', 'profoxbiz' ),
		'section'         => 'profoxbiz_typography',
		'type'            => 'text'
	)
);

$wp_customize->add_setting( 'profoxbiz_body_color', array(
	'default' => '#5f5f5f',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_body_color', array(
	'label' => __('Body Color', 'profoxbiz'),
	'section' => 'profoxbiz_typography',	
)));


// H tag

$wp_customize->add_setting( 'profoxbiz_h1_font_size',
	array(
		'default'			=> '1.75rem',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_h1_font_size',
	array(
		'label'           => __( 'H1 font size ', 'profoxbiz' ),
		'section'         => 'profoxbiz_typography',
		'type'            => 'text'
	)
); 

$wp_customize->add_setting( 'profoxbiz_h2_font_size',
	array(
		'default'			=> '1.5rem',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_h2_font_size',
	array(
		'label'           => __( 'H2 font size ', 'profoxbiz' ),
		'section'         => 'profoxbiz_typography',
		'type'            => 'text'
	)
);

$wp_customize->add_setting( 'profoxbiz_h3_font_size',
	array(
		'default'			=> '1.25rem',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_h3_font_size',
	array(
		'label'           => __( 'H3 font size ', 'profoxbiz' ),
		'section'         => 'profoxbiz_typography',
		'type'            => 'text'
	)
);

$wp_customize->add_setting( 'profoxbiz_h4_font_size',
	array(
		'default'			=> '1.125rem',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_h4_font_size',
	array(
		'label'           => __( 'H4 font size ', 'profoxbiz' ),
		'section'         => 'profoxbiz_typography',
		'type'            => 'text'
	)
);

$wp_customize->add_setting( 'profoxbiz_h5_font_size',
	array(
		'default'			=> '1rem ',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_h5_font_size',
	array(
		'label'           => __( 'H5 font size ', 'profoxbiz' ),
		'section'         => 'profoxbiz_typography',
		'type'            => 'text'
	)
);

$wp_customize->add_setting( 'profoxbiz_h6_font_size',
	array(
		'default'			=> '0.875rem',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_h6_font_size',
	array(
		'label'           => __( 'H6 font size ', 'profoxbiz' ),
		'section'         => 'profoxbiz_typography',
		'type'            => 'text'
	)
);



$wp_customize->add_setting( 'profoxbiz_h_tag_line_height',
	array(
		'default'			=> '1.2',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_h_tag_line_height',
	array(
		'label'           => __( 'H tag line height ', 'profoxbiz' ),
		'section'         => 'profoxbiz_typography',
		'type'            => 'text'
	)
);

// H tag color
$wp_customize->add_setting( 'profoxbiz_h_tag_color', array(
	'default' => '#222222',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_h_tag_color', array(
	'label' => __('H tag Color', 'profoxbiz'),
	'section' => 'profoxbiz_typography',	
)));

