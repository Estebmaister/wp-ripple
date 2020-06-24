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

$wp_customize->add_section( 'profoxbiz_portfolio_section' , array(
	'title' => __('Portfolio', 'profoxbiz'),
	'panel' => 'profoxbiz_front_page'
) );


// Show section
$wp_customize->add_setting(
	'profoxbiz_portfolio_section_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_portfolio_section_show',
	array(
		'label'     => esc_html__( 'Portfolio section show', 'profoxbiz' ),
		'section'   => 'profoxbiz_portfolio_section',
		'type'      => 'checkbox',
	)
); 

// section title
$wp_customize->add_setting(
	'profoxbiz_portfolio_title',
	array(
		'default' => 'Our Portfolio',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_portfolio_title',
	array(
		'label'     => esc_html__( 'Portfolio section title', 'profoxbiz' ),
		'section'   => 'profoxbiz_portfolio_section',
		'type'      => 'text',
	)
); 


// section description
$wp_customize->add_setting(
	'profoxbiz_portfolio_description',
	array(
		'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_portfolio_description',
	array(
		'label'     => esc_html__( 'Portfolio section caption', 'profoxbiz' ),
		'section'   => 'profoxbiz_portfolio_section',
		'type'      => 'text',
	)
); 

$wp_customize->add_setting(
	'profoxbiz_portfolio_cat',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_portfolio_cat',
	array(
		'label' => __( 'Choose portfolio category', 'profoxbiz' ),
		'section' => 'profoxbiz_portfolio_section',
		'type' => 'select',
		'choices' => $option_categories	
	)
);


// background color
$wp_customize->add_setting( 'profoxbiz_portfolio_section_bg', array(
	'default' => '#fff',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_portfolio_section_bg', array(
	'label' => __('Portfolio section background', 'profoxbiz'),
	'section' => 'profoxbiz_portfolio_section',	
)));