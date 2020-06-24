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

$wp_customize->add_section( 'profoxbiz_testimonial_section' , array(
	'title' => __('Testimonial', 'profoxbiz'),
	'panel' => 'profoxbiz_front_page'
) );


// Show section 
$wp_customize->add_setting(
	'profoxbiz_testimonial_section_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_testimonial_section_show',
	array(
		'label'     => esc_html__( 'Show testimonial section', 'profoxbiz' ),
		'section'   => 'profoxbiz_testimonial_section',
		'type'      => 'checkbox',
	)
); 

// section title
$wp_customize->add_setting(
	'profoxbiz_testimonial_title',
	array(
		'default' => 'What Our Client Say',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_testimonial_title',
	array(
		'label'     => esc_html__( 'Testimonial section title', 'profoxbiz' ),
		'section'   => 'profoxbiz_testimonial_section',
		'type'      => 'text',
	)
); 


// section description
$wp_customize->add_setting(
	'profoxbiz_testimonial_description',
	array(
		'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_testimonial_description',
	array(
		'label'     => esc_html__( 'Testimonial section caption', 'profoxbiz' ),
		'section'   => 'profoxbiz_testimonial_section',
		'type'      => 'text',
	)
); 

$wp_customize->add_setting(
	'profoxbiz_testimonial_cat',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_testimonial_cat',
	array(
		'label' => __( 'Choose testimonial category', 'profoxbiz' ),
		'section' => 'profoxbiz_testimonial_section',
		'type' => 'select',
		'choices' => $option_categories	
	)
);


// background color
$wp_customize->add_setting( 'profoxbiz_testimonial_section_bg', array(
	'default' => '#fff',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_testimonial_section_bg', array(
	'label' => __('Testimonial section background', 'profoxbiz'),
	'section' => 'profoxbiz_testimonial_section',	
)));