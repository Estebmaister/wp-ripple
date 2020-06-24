<?php
// Body
	$profoxbiz_body_font_size = get_theme_mod('profoxbiz_body_font_size', '');
	$profoxbiz_body_color = get_theme_mod('profoxbiz_body_color', '');
	$profoxbiz_body_line_height = get_theme_mod('profoxbiz_body_line_height', '');

	// H tag
	$profoxbiz_heading_font_family = get_theme_mod('profoxbiz_heading_font_family', '');
	$profoxbiz_h1_font_size = get_theme_mod('profoxbiz_h1_font_size', '');
	$profoxbiz_h2_font_size = get_theme_mod('profoxbiz_h2_font_size', '');
	$profoxbiz_h3_font_size = get_theme_mod('profoxbiz_h3_font_size', '');
	$profoxbiz_h4_font_size = get_theme_mod('profoxbiz_h4_font_size', '');
	$profoxbiz_h5_font_size = get_theme_mod('profoxbiz_h5_font_size', '');
	$profoxbiz_h6_font_size = get_theme_mod('profoxbiz_h6_font_size', '');	
	$profoxbiz_h_tag_line_height = get_theme_mod('profoxbiz_h_tag_line_height', '');
	$profoxbiz_h_tag_color = get_theme_mod('profoxbiz_h_tag_color', '');

	// Anchor
	$profoxbiz_anchor_color = get_theme_mod('profoxbiz_anchor_color', '');
	$profoxbiz_anchor_hover_color = get_theme_mod('profoxbiz_anchor_hover_color', '');
	
	// slider title font
	$profoxbiz_slider_content_font_size = get_theme_mod('profoxbiz_slider_content_font_size', '');
	$profoxbiz_slider_title_font_size = get_theme_mod('profoxbiz_slider_title_font_size', '');

	$profoxbiz_footer_background_color = get_theme_mod('profoxbiz_footer_background_color', '');
	$profoxbiz_footer_content_color = get_theme_mod('profoxbiz_footer_content_color', '');

	// Theme color
	$profoxbiz_primary_theme_color = get_theme_mod('profoxbiz_primary_theme_color', '');

	// button color
	$profoxbiz_primary_btn_text_color = get_theme_mod('profoxbiz_primary_btn_text_color', '');

	$profoxbiz_primary_btn_hover_color = get_theme_mod('profoxbiz_primary_btn_hover_color', '');


	// introduction section background
	$profoxbiz_intro_section_bg = get_theme_mod('profoxbiz_intro_section_bg', '');

	// services section background
	$profoxbiz_services_section_bg = get_theme_mod('profoxbiz_services_section_bg', '');

	// portfolio section background
	$profoxbiz_portfolio_section_bg = get_theme_mod('profoxbiz_portfolio_section_bg', '');

	// feature section background
	$profoxbiz_feature_section_bg = get_theme_mod('profoxbiz_feature_section_bg', '');

	// team section background
	$profoxbiz_team_section_bg = get_theme_mod('profoxbiz_team_section_bg', '');

	// latest post section background
	$profoxbiz_latest_post_section_bg = get_theme_mod('profoxbiz_latest_post_section_bg', '');

	// testimonial section background
	$profoxbiz_testimonial_section_bg = get_theme_mod('profoxbiz_testimonial_section_bg', '');


	// footer color
	$profoxbiz_footer_background_color = get_theme_mod('profoxbiz_footer_background_color', '');
	$profoxbiz_footer_content_color = get_theme_mod('profoxbiz_footer_content_color', '');
	$profoxbiz_footer_title_color = get_theme_mod('profoxbiz_footer_title_color','');

?>


<style>
body{
		
	font-size: <?php echo esc_attr($profoxbiz_body_font_size); ?> !important;
		line-height: <?php echo esc_attr($profoxbiz_body_line_height); ?> !important;
		color: <?php echo esc_attr($profoxbiz_body_color); ?> !important;		
	}
	h1,h2,h3,h4,h5,h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a{
		line-height: <?php echo esc_attr($profoxbiz_h_tag_line_height); ?> !important;
		color: <?php echo esc_attr($profoxbiz_h_tag_color); ?> !important;		
	}
	h1{		
		font-size: <?php echo esc_attr($profoxbiz_h1_font_size); ?> !important;
	}
	h2{		
		font-size: <?php echo esc_attr($profoxbiz_h2_font_size); ?> !important;
	}
	h3{		
		font-size: <?php echo esc_attr($profoxbiz_h3_font_size); ?> !important;
	}
	h4{		
		font-size: <?php echo esc_attr($profoxbiz_h4_font_size); ?> !important;
	}
	h5{		
		font-size: <?php echo esc_attr($profoxbiz_h5_font_size); ?> !important;
	}
	h6{		
		font-size: <?php echo esc_attr($profoxbiz_h6_font_size); ?> !important;
	}
	a{
		color: <?php echo esc_attr($profoxbiz_anchor_color); ?> !important;
	}
	a:hover{
		color: <?php echo esc_attr($profoxbiz_primary_theme_color); ?> !important;
	}
	.bailboard{
		font-size: <?php echo esc_attr($profoxbiz_slider_content_font_size); ?> !important;
	}
	.bailboard  h2{
		font-size: <?php echo esc_attr($profoxbiz_slider_title_font_size); ?> !important;
	}
	.feature-icon{
		border-color: <?php echo esc_attr($profoxbiz_primary_theme_color); ?> !important;
	}
	.site-footer{
		background-color: <?php echo esc_attr($profoxbiz_footer_background_color); ?> !important;
		color: <?php echo esc_attr($profoxbiz_footer_content_color); ?> !important;
	}
	.site-footer .widget-title{
		color: <?php echo esc_attr($profoxbiz_footer_title_color); ?> !important;
	}
	.site-footer a{
		color: <?php echo esc_attr($profoxbiz_footer_content_color); ?> !important;
	}

	.intro-section{
		background-color: <?php echo esc_attr($profoxbiz_intro_section_bg); ?> !important;
	}
	.services-section{
		background-color: <?php echo esc_attr($profoxbiz_services_section_bg); ?> !important;
	}
	.portfolio-section{
		background-color: <?php echo esc_attr($profoxbiz_portfolio_section_bg); ?> !important;
	}
	.feature-section{
		background-color: <?php echo esc_attr($profoxbiz_feature_section_bg); ?> !important;
	}
	.team-section{
		background-color: <?php echo esc_attr($profoxbiz_team_section_bg); ?> !important;
	}
	.latest-post-section{
		background-color: <?php echo esc_attr($profoxbiz_latest_post_section_bg); ?> !important;
	}
	.testimonial-section{
		background-color: <?php echo esc_attr($profoxbiz_testimonial_section_bg); ?> !important;
	}

	.btn-primary,
	.nav-links a,
	#scrollToTop,
	.feature-icon:hover,
	.slick-prev:before, 
	.slick-next:before,
	.search-submit{
		background-color: <?php echo esc_attr($profoxbiz_primary_theme_color); ?> !important;
		border-color: <?php echo esc_attr($profoxbiz_primary_theme_color); ?> !important;
		color: <?php echo esc_attr($profoxbiz_primary_btn_text_color); ?> !important;
	}
	.btn-primary:hover,
	nav-links a:hover,
	#scrollToTop:hover,
	.slick-prev:hover:before, 
	.slick-next:hover:before,
	.search-submit:hover{
		background-color: <?php echo esc_attr($profoxbiz_primary_btn_hover_color); ?> !important;
		border-color: <?php echo esc_attr($profoxbiz_primary_btn_hover_color); ?> !important;
		color: <?php echo esc_attr($profoxbiz_primary_btn_text_color); ?> !important;
	}
	.page-header,
	.slicknav_nav ul{
		background-color: <?php echo esc_attr($profoxbiz_primary_theme_color); ?> !important;
	}
</style>