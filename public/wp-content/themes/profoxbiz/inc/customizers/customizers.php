<?php 

$wp_customize->add_panel( 'profoxbiz_theme_option', array(
	'title' => __( 'Theme Option', 'profoxbiz' ),
	'priority' => 10,
) );
$wp_customize->add_panel( 'profoxbiz_front_page', array(
	'title' => __( 'Front Page', 'profoxbiz' ),
	'priority' => 20,
) );
include get_template_directory() . '/inc/customizers/typography.php';
include get_template_directory() . '/inc/customizers/header.php';
include get_template_directory() . '/inc/customizers/bailboard.php';
include get_template_directory() . '/inc/customizers/color.php';
include get_template_directory() . '/inc/customizers/layout.php';	
include get_template_directory() . '/inc/customizers/blog.php';
include get_template_directory() . '/inc/customizers/sanitize.php';
include get_template_directory() . '/inc/customizers/footer.php';
include get_template_directory() . '/inc/customizers/services.php';
include get_template_directory() . '/inc/customizers/portfolio.php';
include get_template_directory() . '/inc/customizers/features.php';
include get_template_directory() . '/inc/customizers/team.php';
include get_template_directory() . '/inc/customizers/latest-post.php';
include get_template_directory() . '/inc/customizers/testimonial.php';