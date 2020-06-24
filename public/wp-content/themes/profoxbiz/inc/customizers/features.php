<?php 
/* Option list of all post */
$args = array(
	'post_type'=> 'post',
	'orderby'    => 'ID',
	'post_status' => 'publish',
	'order'    => 'DESC',
	'posts_per_page' => 6,
	'ignore_sticky_posts' => 1,
); 
$option_posts = array();
$feature_lists = get_posts( $args );
$option_posts[''] = __( 'Choose post', 'profoxbiz' );
foreach( $feature_lists as $post_feature ){
	$option_posts[$post_feature->ID] = $post_feature->post_title;
}

// feature section
$wp_customize->add_section( 'profoxbiz_feature_section' , array(
	'title' => __('Features', 'profoxbiz'),
	'panel' => 'profoxbiz_front_page'
) );

$wp_customize->add_setting('profoxbiz_feature_section_show',array(
   'default' => true,
   'sanitize_callback'	=> 'sanitize_text_field'
));
$wp_customize->add_control('profoxbiz_feature_section_show',array(
   'type' => 'checkbox',
   'label' => __('Feature section show','profoxbiz'),
   'section' => 'profoxbiz_feature_section',
));

// Hide feature section icon
$wp_customize->add_setting(
	'profoxbiz_feature_icon_show',
	array(
		'default' => 'true',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_feature_icon_show',
	array(
		'label'     => esc_html__( 'Feature icon show', 'profoxbiz' ),
		'section'   => 'profoxbiz_feature_section',
		'type'      => 'checkbox',
	)
); 

// section title
$wp_customize->add_setting(
	'profoxbiz_feature_title',
	array(
		'default' => 'Features',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_feature_title',
	array(
		'label'     => esc_html__( 'Feature section title', 'profoxbiz' ),
		'section'   => 'profoxbiz_feature_section',
		'type'      => 'text',
	)
); 


// section description
$wp_customize->add_setting(
	'profoxbiz_feature_description',
	array(
		'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	)
);

$wp_customize->add_control(
	'profoxbiz_feature_description',
	array(
		'label'     => esc_html__( 'Feature section caption', 'profoxbiz' ),
		'section'   => 'profoxbiz_feature_section',
		'type'      => 'text',
	)
); 

for( $i=1; $i<=6; $i++){  
	$wp_customize->add_setting(
		'profoxbiz_feature_icon_'.$i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',

		)
	);

	$wp_customize->add_control(
		'profoxbiz_feature_icon_'.$i,
		array(
			'label'   => __( 'Feature icon ', 'profoxbiz' ) .$i ,
			'description'     => sprintf( __( 'Please find Font-awesome icons %1$shere%2$s', 'profoxbiz' ), '<a href="' . esc_url( 'https://fontawesome.com/v4.7.0/cheatsheet/' ) . '" target="_blank">', '</a>' ),
			'section' => 'profoxbiz_feature_section',
			'type'    => 'text',
		));

// featured category
	$wp_customize->add_setting(
		'profoxbiz_feature_post_'.$i,
		array(
			'default' => '',
			'sanitize_callback' => 'profoxbiz_sanitize_select',
		));

	$wp_customize->add_control(
		'profoxbiz_feature_post_'.$i,
		array(
			'label' => __( 'Select featured post ', 'profoxbiz' ) .$i ,
			'section' => 'profoxbiz_feature_section',
			'type' => 'select',
			'choices' => $option_posts
		)); 
}

// background color
$wp_customize->add_setting( 'profoxbiz_feature_section_bg', array(
	'default' => '#fff',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'profoxbiz_feature_section_bg', array(
	'label' => __('Feature section background', 'profoxbiz'),
	'section' => 'profoxbiz_feature_section',	
)));