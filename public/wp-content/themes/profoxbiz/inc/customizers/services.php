<?php 
/* Option list of all post */
$args = array(
	'post_type'=> 'post',
	'orderby'    => 'ID',
	'post_status' => 'publish',
	'order'    => 'DESC',
	'posts_per_page' => 3,
	'ignore_sticky_posts' => 1,
); 
$option_posts = array();
$service_lists = get_posts( $args );
$option_posts[''] = __( 'Choose post', 'profoxbiz' );
foreach( $service_lists as $post_service ){
	$option_posts[$post_service->ID] = $post_service->post_title;
}

// service section
$wp_customize->add_section( 'profoxbiz_services_section' , array(
	'title' => __('Services', 'profoxbiz'),
	'panel' => 'profoxbiz_front_page'
) );

$wp_customize->add_setting('profoxbiz_services_section_show',array(
   'default' => true,
   'sanitize_callback'	=> 'sanitize_text_field'
));
$wp_customize->add_control('profoxbiz_services_section_show',array(
   'type' => 'checkbox',
   'label' => __('Service section show','profoxbiz'),
   'section' => 'profoxbiz_services_section',
));

// Hide service section icon
$wp_customize->add_setting(
	'profoxbiz_services_icon_show',
	array(
		'default' => 'true',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_services_icon_show',
	array(
		'label'     => esc_html__( 'Service icon show', 'profoxbiz' ),
		'section'   => 'profoxbiz_services_section',
		'type'      => 'checkbox',
	)
); 

// section title
$wp_customize->add_setting(
	'profoxbiz_service_title',
	array(
		'default' => 'Our Services',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_service_title',
	array(
		'label'     => esc_html__( 'Service section title', 'profoxbiz' ),
		'section'   => 'profoxbiz_services_section',
		'type'      => 'text',
	)
); 


// section description
$wp_customize->add_setting(
	'profoxbiz_service_description',
	array(
		'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_service_description',
	array(
		'label'     => esc_html__( 'Service section caption', 'profoxbiz' ),
		'section'   => 'profoxbiz_services_section',
		'type'      => 'text',
	)
); 

for( $i=1; $i<=3; $i++){  
	$wp_customize->add_setting(
		'profoxbiz_service_icon_'.$i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'profoxbiz_service_icon_'.$i,
		array(
			'label'   => __( 'Service icon ', 'profoxbiz' ) .$i ,
			'description'     => sprintf( __( 'Please find Font-awesome icons %1$shere%2$s', 'profoxbiz' ), '<a href="' . esc_url( 'https://fontawesome.com/v4.7.0/cheatsheet/' ) . '" target="_blank">', '</a>' ),
			'section' => 'profoxbiz_services_section',
			'type'    => 'text',
		));

// service category
	$wp_customize->add_setting(
		'profoxbiz_service_post_'.$i,
		array(
			'default' => '',
			'sanitize_callback' => 'profoxbiz_sanitize_select',
		));

	$wp_customize->add_control(
		'profoxbiz_service_post_'.$i,
		array(
			'label' => __( 'Select service post ', 'profoxbiz' ) .$i ,
			'section' => 'profoxbiz_services_section',
			'type' => 'select',
			'choices' => $option_posts
		)); 
}

// background color
$wp_customize->add_setting( 'profoxbiz_services_section_bg', array(
	'default' => '#fff',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_services_section_bg', array(
	'label' => __('Service section background', 'profoxbiz'),
	'section' => 'profoxbiz_services_section',	
)));