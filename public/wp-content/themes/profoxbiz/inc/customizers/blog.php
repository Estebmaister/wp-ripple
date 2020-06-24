<?php 
// Blog
$wp_customize->add_section( 'profoxbiz_blog_option' , array(
	'title' => __('Blog Layout Option', 'profoxbiz'),
	'panel' => 'profoxbiz_theme_option'
) );


// Date
$wp_customize->add_setting(
	'profoxbiz_blog_post_date_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_blog_post_date_show',
	array(
		'label'     => esc_html__( 'Blog post date show', 'profoxbiz' ),
		'section'   => 'profoxbiz_blog_option',
		'type'      => 'checkbox'
	)
);

// Author
$wp_customize->add_setting(
	'profoxbiz_blog_post_author_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'profoxbiz_blog_post_author_show',
	array(
		'label'     => esc_html__( 'Blog post author show', 'profoxbiz' ),
		'section'   => 'profoxbiz_blog_option',
		'type'      => 'checkbox'
	)
);

// excerpt
$wp_customize->add_setting(
	'profoxbiz_blog_post_excerpt_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'profoxbiz_blog_post_excerpt_show',
	array(
		'label'     => esc_html__( 'Blog post excerpt show', 'profoxbiz' ),
		'section'   => 'profoxbiz_blog_option',
		'type'      => 'checkbox'		
	)
);

// Thumbnail
$wp_customize->add_setting(
	'profoxbiz_blog_post_thumbnail_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'profoxbiz_blog_post_thumbnail_show',
	array(
		'label'     => esc_html__( 'Blog post thumbnail show', 'profoxbiz' ),
		'section'   => 'profoxbiz_blog_option',
		'type'      => 'checkbox'		
	)
);

// Category
$wp_customize->add_setting(
	'profoxbiz_blog_post_category_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'profoxbiz_blog_post_category_show',
	array(
		'label'     => esc_html__( 'Blog post category show', 'profoxbiz' ),
		'section'   => 'profoxbiz_blog_option',
		'type'      => 'checkbox'	
	)
);

// Tag

$wp_customize->add_setting(
	'profoxbiz_blog_post_tag_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'profoxbiz_blog_post_tag_show',
	array(
		'label'     => esc_html__( 'Blog post tag show', 'profoxbiz' ),
		'section'   => 'profoxbiz_blog_option',
		'type'      => 'checkbox'		
	)
);
// Comment
$wp_customize->add_setting(
	'profoxbiz_blog_post_comment_show',
	array(
		'default' => true,
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'profoxbiz_blog_post_comment_show',
	array(
		'label'     => esc_html__( 'Blog post comment show', 'profoxbiz' ),
		'section'   => 'profoxbiz_blog_option',
		'type'      => 'checkbox'		
	)
);

