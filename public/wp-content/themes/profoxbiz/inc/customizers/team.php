<?php
/* Option list of all categories */
$args = array(
	'type'                     => 'post',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'hide_empty'               => 1,
	'hierarchical'             => 1,
	'taxonomy'                 => 'category'
); 
$option_categories = array();
$category_lists = get_categories( $args );
$option_categories[''] = __( 'Choose Category', 'profoxbiz' );
foreach( $category_lists as $category ){
	$option_categories[$category->term_id] = $category->name;
}

$wp_customize->add_section( 'profoxbiz_team_section' , array(
	'title' => __('Team', 'profoxbiz'),
	'panel' => 'profoxbiz_front_page'
) );

// show section
$wp_customize->add_setting('profoxbiz_team_section_show',array(
   'default' => true,
   'sanitize_callback'	=> 'sanitize_text_field'
));
$wp_customize->add_control('profoxbiz_team_section_show',array(
   'type' => 'checkbox',
   'label' => __('Team section show','profoxbiz'),
   'section' => 'profoxbiz_team_section',
));

// section title
$wp_customize->add_setting(
	'profoxbiz_team_title',
	array(
		'default' => 'Meet Our Team',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_team_title',
	array(
		'label'     => esc_html__( 'Team section title', 'profoxbiz' ),
		'section'   => 'profoxbiz_team_section',
		'type'      => 'text',
	)
); 


// section description
$wp_customize->add_setting(
	'profoxbiz_team_description',
	array(
		'default' => 'Vehicula nostrud feugiat dis lobortis sapiente ullam',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_team_description',
	array(
		'label'     => esc_html__( 'Team section caption', 'profoxbiz' ),
		'section'   => 'profoxbiz_team_section',
		'type'      => 'text',
	)
); 

$wp_customize->add_setting(
	'profoxbiz_team_cat',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_team_cat',
	array(
		'label' => __( 'Choose team category', 'profoxbiz' ),
		'section' => 'profoxbiz_team_section',
		'type' => 'select',
		'choices' => $option_categories	
	)
);


// background color
$wp_customize->add_setting( 'profoxbiz_team_section_bg', array(
	'default' => '#fff',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_team_section_bg', array(
	'label' => __('Team section background', 'profoxbiz'),
	'section' => 'profoxbiz_team_section',	
)));