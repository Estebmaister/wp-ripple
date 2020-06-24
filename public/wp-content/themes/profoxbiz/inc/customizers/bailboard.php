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

// bailboard slider
$wp_customize->add_section( 'profoxbiz_bailboard_slider_section' , array(
	'title' => __('Banner', 'profoxbiz'),
	'panel' => 'profoxbiz_front_page'
) );

$wp_customize->add_setting('profoxbiz_bailboard_section_show',array(
	'default' => true,
	'sanitize_callback'	=> 'sanitize_text_field'
));
$wp_customize->add_control('profoxbiz_bailboard_section_show',array(
	'type' => 'checkbox',
	'label' => __('Show slider section','profoxbiz'),
	'section' => 'profoxbiz_bailboard_slider_section',
));
/** Select Category */
$wp_customize->add_setting(
	'profoxbiz_slider_cat',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_slider_cat',
	array(
		'label' => __( 'Choose Slider Category', 'profoxbiz' ),
		'section' => 'profoxbiz_bailboard_slider_section',
		'type' => 'select',
		'choices' => $option_categories	
	)
);


/** button **/
$wp_customize->add_setting( 'profoxbiz_bailboard_button',
	array(
		'default'			=> 'Read more',
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'profoxbiz_bailboard_button',
	array(
		'label'           => __( 'Slider button text ', 'profoxbiz' ),
		'section'         => 'profoxbiz_bailboard_slider_section',
		'type'            => 'text'
	)
); 


/** content align **/
$wp_customize->add_setting(
	'profoxbiz_slider_content_align',
	array(
		'default' => 'content_left',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_slider_content_align',
	array(
		'label' => __( 'Slider content align', 'profoxbiz' ),
		'section' => 'profoxbiz_bailboard_slider_section',
		'type' => 'select',
		'choices'   => array(
			'content_left'   => esc_html__( 'Slider content left', 'profoxbiz' ),
			'content_center'   => esc_html__( 'Slider content center', 'profoxbiz' ),
			'content_right' => esc_html__( 'Slider content right', 'profoxbiz' ),				
		),
	)
);

/** Slider title font size **/
$wp_customize->add_setting(
	'profoxbiz_slider_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_slider_title_font_size',
	array(
		'label' => __( 'Slider title font size', 'profoxbiz' ),
		'section' => 'profoxbiz_bailboard_slider_section',
		'type' => 'text',	
	)
);

/** Slider content font size **/
$wp_customize->add_setting(
	'profoxbiz_slider_content_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_slider_content_font_size',
	array(
		'label' => __( 'Slider content font size', 'profoxbiz' ),
		'section' => 'profoxbiz_bailboard_slider_section',
		'type' => 'text',	
	)
);

