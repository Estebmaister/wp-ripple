<?php
    /**
     * Necessary Variables
     */
    $ripple_page_lists = ripple_page_lists();
    $ripple_category_lists = ripple_category_lists();
    
    $ripple_bg_repeat = array(
        'no-repeat'  => esc_html__('No Repeat', 'ripple'),
        'repeat'     => esc_html__('Tile', 'ripple'),
        'repeat-x'   => esc_html__('Tile Horizontally', 'ripple'),
        'repeat-y'   => esc_html__('Tile Vertically', 'ripple'),
    );
        
    $ripple_bg_position = array(
        'left'       => esc_html__('Left', 'ripple'),
        'center'     => esc_html__('Center', 'ripple'),
        'right'      => esc_html__('Right', 'ripple'),
    );
    
    $ripple_bg_attachment = array(
        'fixed'      => esc_html__('Fixed', 'ripple'),
        'scroll'     => esc_html__('Scroll', 'ripple'),
    );

    $ripple_bg_size = array(
        'auto' => esc_html__('Auto', 'ripple'),
        'cover' => esc_html__('Cover', 'ripple'),
        'contain' => esc_html__('Contain', 'ripple'),
    );
    
    $ripple_menu_shows = array(
        'top' => esc_html__('Top', 'ripple'),
        'right' => esc_html__('Right', 'ripple'),
        'left' => esc_html__('Left', 'ripple'),
    );
    
    
    $ripple_section_enables = array('about', 'portfolio', 'blog', 'testimonial', 'contact');
    $ripple_section_menu_titles = array('about', 'portfolio', 'blog', 'testimonial', 'contact');
    $ripple_section_titles = array('about', 'portfolio', 'blog', 'testimonial');

    $ripple_section_categories = array('portfolio', 'blog', 'testimonial');
    $ripple_sections_bgs = array('about', 'portfolio', 'blog', 'testimonial');
    
    /**
     * Panels
     */
    $ripple_panels = array(
        'ripple_home_page_section' => array(
            'id' => 'ripple_home_page_section',
            'args' => array(
                'title' => esc_html__('Home Page Settings', 'ripple'),
                'description' => esc_html__('Configure Home Page Sections', 'ripple'),
                'priority' => 2,
            )
        ),
        'ripple_general_panel' => array(
            'id' => 'ripple_general_panel',
            'args' => array(
                'title' => esc_html__('General Setting', 'ripple'),
                'priority' => 1,
            )
        ),
    );
    
    /**
     * Sections
     */
     
    $ripple_sections = array(
        /** Slider Settings **/
        'ripple_slider_settings' => array(
            'id' => 'ripple_slider_settings',
            'args' => array(
                'title' => esc_html__('Slider Settings', 'ripple'),
                'description' => esc_html__('Configure Slider Sections', 'ripple'),
                'priority' => 1,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
            )
        ),                       
        /** General Section **/
        'ripple_menu_setting' => array(
            'id' => 'ripple_menu_setting',
            'args' => array(
                'title' => esc_html__('Menu Setting', 'ripple'),
                'description' => esc_html__('General Setting Configurations', 'ripple'),
                'priority' => 1,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'ripple_general_panel'
            )
        ),
        'ripple_breadcrumb_section' => array(
            'id' => 'ripple_breadcrumb_section',
            'args' => array(
                'title' => esc_html__('Breadcrumb Setting', 'ripple'),
                'description' => esc_html__('General Setting Configurations', 'ripple'),
                'priority' => 30,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'ripple_general_panel'
            )
        ),
        /** About Section **/
        'ripple_about_section' => array(
            'id' => 'ripple_about_section',
            'args' => array(
                'title' => esc_html__('About Section', 'ripple'),
                'description' => esc_html__('About Section Configurations', 'ripple'),
                'priority' => 10,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'ripple_home_page_section'
            )
        ),
        
        /** Portfolio/Project Section **/
        'ripple_portfolio_section' => array(
            'id' => 'ripple_portfolio_section',
            'args' => array(
                'title' => esc_html__('Portfolio/Project Section', 'ripple'),
                'description' => esc_html__('Portfolio/Project Section Configurations', 'ripple'),
                'priority' => 6,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'ripple_home_page_section'
            )
        ),
        
        /** Blog Section **/
        'ripple_blog_section' => array(
            'id' => 'ripple_blog_section',
            'args' => array(
                'title' => esc_html__('Blog Section', 'ripple'),
                'description' => esc_html__('Blog Section Configurations', 'ripple'),
                'priority' => 13,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'ripple_home_page_section'
            )
        ),
        
        /** Testimonial Section **/
        'ripple_testimonial_section' => array(
            'id' => 'ripple_testimonial_section',
            'args' => array(
                'title' => esc_html__('Testimonial Section', 'ripple'),
                'description' => esc_html__('Testimonial Section Configurations', 'ripple'),
                'priority' => 12,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'ripple_home_page_section'
            )
        ),
        
        /** Team Section **/
        'ripple_contact_section' => array(
            'id' => 'ripple_contact_section',
            'args' => array(
                'title' => esc_html__('Contact Section', 'ripple'),
                'description' => esc_html__('Contact Section Configurations', 'ripple'),
                'priority' => 18,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'ripple_home_page_section'
            )
        ),
        
        /** Blog/Archive Settings **/
        'ripple_blog_archive_section' => array(
            'id' => 'ripple_blog_archive_section',
            'args' => array(
                'title' => esc_html__('Blog/Archive Settings', 'ripple'),
                'description' => esc_html__('Blog/Archive Page Configurations', 'ripple'),
                'priority' => 14,
                'capability' => 'edit_theme_options',
            )
        ),
        /** Footer Copyright Text **/
        'ripple_footer_section' => array(
            'id' => 'ripple_footer_section',
            'args' => array(
                'title' => esc_html__('Footer Setting', 'ripple'),
                'description' => esc_html__('Blog/Archive Page Configurations', 'ripple'),
                'priority' => 5,
                'capability' => 'edit_theme_options',
                'panel' => 'ripple_general_panel'
            )
        ),
        
    );
    
    /**
     * Ripple Settings
     */
    
    /** Settings **/
/** General Setting **/
$wp_customize->add_setting(
    'ripple_disp_parallax_menu',
    array(
        'default' => 0,
        'sanitize_callback' => 'ripple_sanitize_checkbox',
    )
);
$wp_customize->add_setting(
    'ripple_footer_copy_right_text',
    array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    )
);
/** About Settings **/
    /** About Page Setting **/
    $wp_customize->add_setting(
        'ripple_about_section_page',
        array(
            'default' => 0,
            'sanitize_callback' => 'ripple_sanitize_page_select',
        )
    );
    
    /** Section Enables Settings **/
    $wp_customize->add_setting(
        'ripple_about_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );

    $wp_customize->add_setting(
        'ripple_blog_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_testimonial_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );
    
    
    
    $wp_customize->add_setting(
        'ripple_contact_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );
        
    /** Section Menu Titles Settings **/
    $wp_customize->add_setting(
        'ripple_about_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_blog_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_setting(
        'ripple_testimonial_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_contact_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
        
    /** Section Titles Settings **/
    $wp_customize->add_setting(
        'ripple_about_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'=>'postMessage'
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'=>'postMessage'
        )
    );
    
    
    $wp_customize->add_setting(
        'ripple_blog_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'=>'postMessage'
        )
    );
    
    $wp_customize->add_setting(
        'ripple_testimonial_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'=>'postMessage'
        )
    );
        
    /** Categories Settings **/
    $wp_customize->add_setting(
        'ripple_portfolio_section_category',
        array(
            'default' => 0,
            'sanitize_callback' => 'ripple_sanitize_category_select',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_blog_section_category',
        array(
            'default' => 0,
            'sanitize_callback' => 'ripple_sanitize_category_select',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_testimonial_section_category',
        array(
            'default' => 0,
            'sanitize_callback' => 'ripple_sanitize_category_select',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_blog_section_view_all',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
        
    /**
     * Section Background Settings
     */
     
    /** Section Background Color Settings **/
    $wp_customize->add_setting(
        'ripple_about_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport' => 'postMessage',
        )
    );
    
   
    $wp_customize->add_setting(
        'ripple_blog_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_testimonial_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport' => 'postMessage',
        )
    );
    
    
    
    /** Section Bg Image **/
    $wp_customize->add_setting(
        'ripple_about_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'ripple_breadcrumb_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            //'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            //'transport' => 'postMessage',
        )
    );

    $wp_customize->add_setting(
        'ripple_blog_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'ripple_testimonial_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            //'transport' => 'postMessage',
        )
    );
    
   
    /** Section Bg Repeat Settings **/
    $wp_customize->add_setting(
        'ripple_about_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'ripple_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'ripple_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
   
    
    $wp_customize->add_setting(
        'ripple_blog_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'ripple_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_testimonial_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'ripple_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    
    
    /** Section Bg Position Settings **/
    $wp_customize->add_setting(
        'ripple_about_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'ripple_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'ripple_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
   
    
    $wp_customize->add_setting(
        'ripple_blog_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'ripple_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_testimonial_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'ripple_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    
    
    /** Section BG attachment **/
    $wp_customize->add_setting(
        'ripple_about_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'ripple_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'ripple_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );

    $wp_customize->add_setting(
        'ripple_blog_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'ripple_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_testimonial_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'ripple_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );
    
   
    /** Section Background Size **/
    $wp_customize->add_setting(
        'ripple_about_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'ripple_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'ripple_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );

    $wp_customize->add_setting(
        'ripple_blog_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'ripple_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_testimonial_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'ripple_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
   
    /** Section Enable Overlay Settings **/
    $wp_customize->add_setting(
        'ripple_about_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_portfolio_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_blog_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'ripple_testimonial_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );
    
   
    
    /** Contact Section Settings **/
    
    $wp_customize->add_setting(
        'ripple_contact_section_gmap_display',
        array(
            'default' => '',
            'sanitize_callback' => 'ripple_sanitize_checkbox',
        )
    );
    
    /**
     * Feature Section (Home Page Section)
     */
     
    /** Adding Feature Section **/
    $wp_customize->add_section(
        'ripple_feature_section',
        array(
            'title' => __('Feature Section', 'ripple'),
            'description' => __('Feature Section Configurations', 'ripple'),
            'priority' => '1',
            'panel' => 'ripple_home_page_section'
        )
    );
    
    /** Adding Feature Section Enable **/        
	$wp_customize->add_setting( 'ripple_feature_section_enable', array( 'default' => 0, 'sanitize_callback' => 'ripple_sanitize_checkbox'));
    $wp_customize->add_control(
        'ripple_feature_section_enable',
        array(
            'label' => __('Enable Section', 'ripple'),
            'section' => 'ripple_feature_section',
            'type' => 'checkbox',
        )
    );
    
    /** Adding Feature Section Menu Title **/
    $wp_customize->add_setting( 'ripple_feature_section_menu_title', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field','transport'=>'postMessage'));
    $wp_customize->add_control(
        'ripple_feature_section_menu_title',
        array(
            'label' => __('Section Menu Text', 'ripple'),
            'section' => 'ripple_feature_section',
            'type' => 'text',
        )
    );
    
    /** Ading Feature Section Title **/
    $wp_customize->add_setting( 'ripple_feature_section_title', array( 'default' => 'Features', 'sanitize_callback' => 'sanitize_text_field','transport'=>'postMessage'));
    $wp_customize->add_control(
        'ripple_feature_section_title',
        array(
            'label' => __('Section Title', 'ripple'),
            'section' => 'ripple_feature_section',
            'type' => 'text',
        )
    );
    
    
    
    /** Ading Feature Section Content **/
    $wp_customize->add_setting( 'ripple_feature_section_descr', array( 'default' => '', 'sanitize_callback' => 'ripple_sanitize_textarea','transport'=>'postMessage'));
    $wp_customize->add_control(
        'ripple_feature_section_descr',
        array(
            'label' => __('Section Description', 'ripple'),
            'section' => 'ripple_feature_section',
            'type' => 'text',
        )
    );
    
    
    
    /** Ading Feature Section Categry **/
    $wp_customize->add_setting( 'ripple_feature_section_category', array( 'default' => 0, 'sanitize_callback' => 'ripple_sanitize_category_select'));
    $wp_customize->add_control(
        'ripple_feature_section_category',
        array(
            'label' => __('Feature Category', 'ripple'),
            'section' => 'ripple_feature_section',
            'type' => 'select',
            'choices' => $ripple_category_lists,
        )
    );
    /** Ading Feature Image **/
    $wp_customize->add_setting( 'ripple_feature_section_image', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'ripple_feature_section_image',
        array(
            'label' => __('Feature Secton Image', 'ripple'),
            'section' => 'ripple_feature_section',
            'settings' => 'ripple_feature_section_image',
        )
    ));
    
    /** Ading Feature Section Background Color **/
    $wp_customize->add_setting( 'ripple_feature_section_bg_color', array( 'default' => '#fff', 'sanitize_callback' => 'sanitize_hex_color', 'transport' => 'postMessage'));
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'ripple_feature_section_bg_color',
        array(
            'label' => __('Section Background Color', 'ripple'),
            'section' => 'ripple_feature_section',
            'settings' => 'ripple_feature_section_bg_color',
        )
    ));
    
    /** Ading Feature Section Background Image **/
    $wp_customize->add_setting( 'ripple_feature_section_bg_image', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'ripple_feature_section_bg_image',
        array(
            'label' => __('Section Background Image', 'ripple'),
            'section' => 'ripple_feature_section',
            'settings' => 'ripple_feature_section_bg_image',
        )
    ));
    
    /** Ading Feature Section Background Repeat **/
    $wp_customize->add_setting( 'ripple_feature_section_bg_repeat', array( 'default' => 'no-repeat', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_feature_section_bg_repeat',
        array(
            'label' => __('Background Repeat', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_feature_section',
            'choices' => $ripple_bg_repeat,
            'active_callback' => 'ripple_display_bg_options_feature', /**********************/
        )
    );
    
    /** Ading Feature Section Background Position **/
    $wp_customize->add_setting( 'ripple_feature_section_bg_position', array( 'default' => 'left', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_feature_section_bg_position',
        array(
            'label' => __('Background Position', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_feature_section',
            'choices' => $ripple_bg_position,
            'active_callback' => 'ripple_display_bg_options_feature',
        )
    );
    
    /** Ading Feature Section Background Attachment **/
    $wp_customize->add_setting( 'ripple_feature_section_bg_attachment', array( 'default' => 'scroll', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_feature_section_bg_attachment',
        array(
            'label' => __('Background Attachment', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_feature_section',
            'choices' => $ripple_bg_attachment,
            'active_callback' => 'ripple_display_bg_options_feature',
        )
    );
    
    /** Ading Feature Section Background Size **/
    $wp_customize->add_setting( 'ripple_feature_section_bg_size', array( 'default' => 'auto', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_feature_section_bg_size',
        array(
            'label' => __('Background Size', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_feature_section',
            'choices' => $ripple_bg_size,
            'active_callback' => 'ripple_display_bg_options_feature',
        )
    );
    
    /** Ading Feature Section Enable Overlay **/
    $wp_customize->add_setting( 'ripple_feature_section_enable_overlay', array( 'default' => '', 'sanitize_callback' => 'ripple_sanitize_checkbox'));
    $wp_customize->add_control(
        'ripple_feature_section_enable_overlay',
        array(
            'label' => __('Enable Background Overlay', 'ripple'),
            'type' => 'checkbox',
            'section' => 'ripple_feature_section',
            'active_callback' => 'ripple_display_bg_options_feature',
        )
    );
    
    
    /**
     * Ripple Controls
     */
    
    /**
     * Section Wise Specific Controls
     */
    $ripple_other_controls = array(         
        /** General Section Controls **/
        'ripple_disp_parallax_menu' => array(
                'id' => 'ripple_disp_parallax_menu',
                'args' => array(
                    'label' => __('Display Ripple Menu', 'ripple'),
                    'section' => 'ripple_menu_setting',
                    'type' => 'checkbox',
                    'priority' => 1,
                )
            ),
            'ripple_footer_copy_right_text' => array(
                'id' => 'ripple_footer_copy_right_text',
                'args' => array(
                    'label' => __('Footer Copyright Text', 'ripple'),
                    'section' => 'ripple_footer_section',
                    'type' => 'text',
                    'priority' => 1,
                )
            ),
        
        /** About Section Controls **/
            /** About Page Controls **/
            'ripple_about_section_page' => array(
                'id' => 'ripple_about_section_page',
                'args' => array(
                    'label' => __('Select Page', 'ripple'),
                    'section' => 'ripple_about_section',
                    'type' => 'select',
                    'choices' => $ripple_page_lists,
                    'priority' => 5,
                )
            ),
        
            
        
        /** Blog Section View All Text **/
        'ripple_blog_section_view_all' => array(
            'id' => 'ripple_blog_section_view_all',
            'args' => array(
                'label' => __('Blog View All Text', 'ripple'),
                'section' => 'ripple_blog_section',
                'type' => 'text',
                'priority' => 8
            )
        ),
        
        /** Contact Section Controls **/
        
        'ripple_contact_section_gmap_display' => array(
            'id' => 'ripple_contact_section_gmap_display',
            'args' => array(
                'label' => __('Display Google Map', 'ripple'),
                'section' => 'ripple_contact_section',
                'type' => 'checkbox',
                'priority' => 3
            )
        ),
        
    );
    
    /**
     * Bulk Controls
     */
        /**
         * Section Enable/Disable Controls
         */
        foreach($ripple_section_enables as $ripple_section_enable) :
            $ripple_other_controls[] = array(
                'id' => 'ripple_'.$ripple_section_enable.'_section_enable',
                'args' => array(
                    'label' => __('Enable Section', 'ripple'),
                    'section' => 'ripple_'.$ripple_section_enable.'_section',
                    'type' => 'checkbox',
                    'priority' => 1,
                )
            );
        endforeach;
        
        /**
         * Section Menu Title Controls
         */
        foreach($ripple_section_menu_titles as $ripple_section_menu_title) :
            $ripple_other_controls[] = array(
                'id' => 'ripple_'.$ripple_section_menu_title.'_section_menu_title',
                'args' => array(
                    'label' => __('Section Menu Text', 'ripple'),
                    'section' => 'ripple_'.$ripple_section_menu_title.'_section',
                    'type' => 'text',
                    'priority' => 2,
                )
            );
        endforeach;
        
        /**
         * Section Custom Title Controls
         */
        foreach($ripple_section_titles as $ripple_section_title) :
            $ripple_other_controls[] = array(
                'id' => 'ripple_'.$ripple_section_title.'_section_title',
                'args' => array(
                    'label' => __('Section Title', 'ripple'),
                    'section' => 'ripple_'.$ripple_section_title.'_section',
                    'type' => 'text',
                    'priority' => 3,
                )
            );
        endforeach;
        
        /**
         * Section Category Controls
         */
         foreach($ripple_section_categories as $ripple_section_category) :
            $ripple_other_controls[] = array(
                'id' => 'ripple_'.$ripple_section_category.'_section_category',
                'args' => array(
                    'label' => __('Select Category', 'ripple'),
                    'section' => 'ripple_'.$ripple_section_category.'_section',
                    'type' => 'select',
                    'choices' => $ripple_category_lists,
                    'priority' => 6,
                )
            );
        endforeach;
        
        
        /**
         * Background Controls
         */
        $ripple_control_bg_colors = array();
        $ripple_control_bg_images = array();
        
        /** Background Color **/
        foreach($ripple_sections_bgs as $ripple_section_bg) :
            $ripple_control_bg_colors[] = array(
                'id' => 'ripple_'.$ripple_section_bg.'_section_bg_color',
                'args' => array(
                    'label' => esc_html__('Background Color', 'ripple'),
                    'section' => 'ripple_'.$ripple_section_bg.'_section',
                    'settings' => 'ripple_'.$ripple_section_bg.'_section_bg_color',
                    'priority' => 10, 
                )
            );
        
        /** Background Images **/
            $ripple_control_bg_images[] = array(
                'id' => 'ripple_'.$ripple_section_bg.'_section_bg_image',
                'args' => array(
                    'label' => esc_html__('Background Image', 'ripple'),
                    'section' => 'ripple_'.$ripple_section_bg.'_section',
                    'settings' => 'ripple_'.$ripple_section_bg.'_section_bg_image',
                    'priority' => 20, 
                ),
            );
        
        /** Backgroiund Repeat **/ 
            $ripple_other_controls[] = array(
                'id' => 'ripple_'.$ripple_section_bg.'_section_bg_repeat',
                'args' => array(
                    'label' => esc_html__('Background Repeat', 'ripple'),
                    'section' => 'ripple_'.$ripple_section_bg.'_section',
                    'type' => 'radio',
                    'choices' => $ripple_bg_repeat,
                    'priority' => 21,
                    'active_callback' => 'ripple_display_bg_options_'.$ripple_section_bg, 
                )
            );
         
        /** Background Position **/
            $ripple_other_controls[] = array(
                'id' => 'ripple_'.$ripple_section_bg.'_section_bg_position',
                'args' => array(
                    'label' => esc_html__('Background Position', 'ripple'),
                    'type' => 'radio',
                    'section' => 'ripple_'.$ripple_section_bg.'_section',
                    'choices' => $ripple_bg_position,
                    'priority' => 22,
                    'active_callback' => 'ripple_display_bg_options_'.$ripple_section_bg,
                )
            ); 
        
        /** Background Attachment **/
            $ripple_other_controls[] = array(
                'id' => 'ripple_'.$ripple_section_bg.'_section_bg_attachment',
                'args' => array(
                    'label' => esc_html__('Background Attachment', 'ripple'),
                    'type' => 'radio',
                    'section' => 'ripple_'.$ripple_section_bg.'_section',
                    'choices' => $ripple_bg_attachment,
                    'priority' => 23,
                    'active_callback' => 'ripple_display_bg_options_'.$ripple_section_bg,
                )
            );
        /** Background Size **/
            $ripple_other_controls[] = array(
                'id' => 'ripple_'.$ripple_section_bg.'_section_bg_size',
                'args' => array(
                    'label' => esc_html__('Background Size', 'ripple'),
                    'type' => 'radio',
                    'section' => 'ripple_'.$ripple_section_bg.'_section',
                    'choices' => $ripple_bg_size,
                    'priority' => 24,
                    'active_callback' => 'ripple_display_bg_options_'.$ripple_section_bg,
                )
            );
            
        /** Background Overlay **/
            $ripple_other_controls[] = array(
                'id' => 'ripple_'.$ripple_section_bg.'_section_enable_overlay',
                'args' => array(
                    'label' => esc_html__('Enable Background Overlay', 'ripple'),
                    'type' => 'checkbox',
                    'section' => 'ripple_'.$ripple_section_bg.'_section',
                    'priority' => 25,
                    'active_callback' => 'ripple_display_bg_options_'.$ripple_section_bg,
                )
            );
        endforeach;
        
        /** Slider Settings **/
        $wp_customize->add_setting(
            'ripple_enable_slider_overlay',
            array(
                'default' => '',
                'sanitize_callback' => 'ripple_sanitize_checkbox'
            )
        );
            
        /** Slider Controls **/ 
            $ripple_other_controls['ripple_enable_slider_overlay'] = array(
                'id' => 'ripple_enable_slider_overlay',
                'args' => array(
                    'label' => esc_html__('Enable Overlay', 'ripple'),
                    'section' => 'ripple_slider_settings',
                    'type' => 'checkbox',
                    'priority' => 1
                )
            );
            
            $wp_customize->add_setting( 'ripple_slider_category', array( 'default' => 0, 'sanitize_callback' => 'absint'));
            $ripple_other_controls['ripple_slider_category'] = array(
                'id' => 'ripple_slider_category',
                'args' => array(
                    'label' => esc_html__('Select Slider Category', 'ripple'),
                    'section' => 'ripple_slider_settings',
                    'type' => 'select',
                    'priority' => 3,
                    'choices' => $ripple_category_lists,
                )
            );
               
////////////////////////////////////////////////////// New Options ///////////////////////////

    
    /** About Section **/
    /** About Section Description **/
    $wp_customize->add_setting( 'ripple_about_section_descr', array( 'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed dia
 nonummy nibh euismod tincidunt', 'sanitize_callback' => 'ripple_sanitize_textarea','transport'=>'postMessage'));
    $wp_customize->add_control(
        'ripple_about_section_descr',
        array(
            'label' => esc_html__('Section Content', 'ripple'),
            'section' => 'ripple_about_section',
            'type' => 'text',
            'priority' => 4,
        )
    );

    /** Ading About Section Categry **/
    $wp_customize->add_setting( 'ripple_about_section_team_category', array( 'default' => 0, 'sanitize_callback' => 'ripple_sanitize_category_select'));
    $wp_customize->add_control(
        'ripple_about_section_team_category',
        array(
            'label' => esc_html__('Team Category', 'ripple'),
            'section' => 'ripple_about_section',
            'type' => 'select',
            'priority' => 5,
            'choices' => $ripple_category_lists,
        )
    );
    
    /** Blog Section **/
    
    $wp_customize->add_setting( 'ripple_blog_section_descr', array( 'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sanitize_callback' => 'ripple_sanitize_textarea','transport'=>'postMessage'));
    $wp_customize->add_control( 
        'ripple_blog_section_descr',
        array(
            'label' => esc_html__('Section Description', 'ripple'),
            'section' => 'ripple_blog_section',
            'type' => 'text',
            'priority' => 6,
        )
    );
   
    /**
     * Progress Section (Home Page Section)
     */
     
    /** Adding Progress Section **/
    $wp_customize->add_section(
        'ripple_progress_section',
        array(
            'title' => esc_html__('Progress Section', 'ripple'),
            'description' => esc_html__('Progress Section Configurations', 'ripple'),
            'panel' => 'ripple_home_page_section',
            'priority' => '4',
        )
    );
    
    /** Adding Progress Section Enable Counter **/        
	$wp_customize->add_setting( 'ripple_progress_section_enable', array( 'default' => 0, 'sanitize_callback' => 'ripple_sanitize_checkbox'));
    $wp_customize->add_control(
        'ripple_progress_section_enable',
        array(
            'label' => esc_html__('Enable Section', 'ripple'),
            'section' => 'ripple_progress_section',
            'type' => 'checkbox',
        )
    );
    
    /** Adding Progress Section Menu Title **/
    $wp_customize->add_setting( 'ripple_progress_section_menu_title', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control(
        'ripple_progress_section_menu_title',
        array(
            'label' => esc_html__('Section Menu Text', 'ripple'),
            'section' => 'ripple_progress_section',
            'type' => 'text',
        )
    );
    
    /** Ading Progress Section Title **/
    $wp_customize->add_setting( 'ripple_progress_section_title', array( 'default' => 'Our Skills', 'sanitize_callback' => 'sanitize_text_field','transport'=>'postMessage'));
    $wp_customize->add_control(
        'ripple_progress_section_title',
        array(
            'label' => esc_html__('Section Title', 'ripple'),
            'section' => 'ripple_progress_section',
            'type' => 'text',
        )
    );
    
    
    
    /** Ading Progress Section Content **/
    $wp_customize->add_setting( 'ripple_progress_section_descr', array( 'default' => '', 'sanitize_callback' => 'ripple_sanitize_textarea','transport'=>'postMessage'));
    $wp_customize->add_control(
        'ripple_progress_section_descr',
        array(
            'label' => esc_html__('Section Description', 'ripple'),
            'section' => 'ripple_progress_section',
            'type' => 'text',
        )
    );
    
   
    
    /** Adding Progress Section Help **/            
    $wp_customize->add_setting( 'ripple_progress_help', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field') );
    $wp_customize->add_control( new Ripple_WP_Customize_Help_Control(
        $wp_customize,
        'ripple_progress_help',
        array(
            'section' => 'ripple_progress_section',
            'settings' => 'ripple_progress_help',
            'input_attrs' => array(
                'info' => '<p>Add the <span style="text-decoration: underline;">AP: Progress</span> widget to the <a href="'.admin_url('widgets.php').'" target="_blank" >Progress (Home Page)</a> widget area.</p>',
            )
        )
    ) );
    
    /** Ading Progress Section Background Color **/
    $wp_customize->add_setting( 'ripple_progress_section_bg_color', array( 'default' => '#fff', 'sanitize_callback' => 'sanitize_hex_color', 'transport' => 'postMessage'));
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'ripple_progress_section_bg_color',
        array(
            'label' => esc_html__('Section Background Color', 'ripple'),
            'section' => 'ripple_progress_section',
            'settings' => 'ripple_progress_section_bg_color',
        )
    ));
    
    /** Ading Progress Section Background Image **/
    $wp_customize->add_setting( 'ripple_progress_section_bg_image', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'ripple_progress_section_bg_image',
        array(
            'label' => esc_html__('Section Background Image', 'ripple'),
            'section' => 'ripple_progress_section',
            'settings' => 'ripple_progress_section_bg_image',
        )
    ));
    
    /** Ading Progress Section Background Repeat **/
    $wp_customize->add_setting( 'ripple_progress_section_bg_repeat', array( 'default' => 'no-repeat', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_progress_section_bg_repeat',
        array(
            'label' => esc_html__('Background Repeat', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_progress_section',
            'choices' => $ripple_bg_repeat,
            'active_callback' => 'ripple_display_bg_options_progress',
        )
    );
    
    /** Ading Progress Section Background Position **/
    $wp_customize->add_setting( 'ripple_progress_section_bg_position', array( 'default' => 'left', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_progress_section_bg_position',
        array(
            'label' => esc_html__('Background Position', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_progress_section',
            'choices' => $ripple_bg_position,
            'active_callback' => 'ripple_display_bg_options_progress',
        )
    );
    
    /** Ading Progress Section Background Attachment **/
    $wp_customize->add_setting( 'ripple_progress_section_bg_attachment', array( 'default' => 'scroll', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_progress_section_bg_attachment',
        array(
            'label' => esc_html__('Background Attachment', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_progress_section',
            'choices' => $ripple_bg_attachment,
            'active_callback' => 'ripple_display_bg_options_progress',
        )
    );
    
    /** Ading Progress Section Background Size **/
    $wp_customize->add_setting( 'ripple_progress_section_bg_size', array( 'default' => 'auto', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_progress_section_bg_size',
        array(
            'label' => esc_html__('Background Size', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_progress_section',
            'choices' => $ripple_bg_size,
            'active_callback' => 'ripple_display_bg_options_progress',
        )
    );
    
    /** Ading Progress Section Enable Overlay **/
    $wp_customize->add_setting( 'ripple_progress_section_enable_overlay', array( 'default' => '', 'sanitize_callback' => 'ripple_sanitize_checkbox'));
    $wp_customize->add_control(
        'ripple_progress_section_enable_overlay',
        array(
            'label' => esc_html__('Enable Background Overlay', 'ripple'),
            'type' => 'checkbox',
            'section' => 'ripple_progress_section',
            'active_callback' => 'ripple_display_bg_options_progress',
        )
    );
    
     
    /** Adding Client Logo Section **/
    $wp_customize->add_section(
        'ripple_cl_logo_section',
        array(
            'title' => esc_html__('Client Logo Section', 'ripple'),
            'description' => esc_html__('Client Logo Section Configurations', 'ripple'),
            'panel' => 'ripple_home_page_section',
            'priority' => 14,
        )
    );
    
    /** Adding Client Logo Section Enable **/        
	$wp_customize->add_setting( 'ripple_cl_logo_section_enable', array( 'default' => 0, 'sanitize_callback' => 'ripple_sanitize_checkbox'));
    $wp_customize->add_control(
        'ripple_cl_logo_section_enable',
        array(
            'label' => esc_html__('Enable Section', 'ripple'),
            'section' => 'ripple_cl_logo_section',
            'type' => 'checkbox',
        )
    );
    
    /** Adding Client Logo Section Menu Title **/
    $wp_customize->add_setting( 'ripple_cl_logo_section_menu_title', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control(
        'ripple_cl_logo_section_menu_title',
        array(
            'label' => esc_html__('Section Menu Text', 'ripple'),
            'section' => 'ripple_cl_logo_section',
            'type' => 'text',
        )
    );
    
    /** Ading Client Logo Section Select Category **/
    $wp_customize->add_setting( 'ripple_cl_logo_section_category', array( 'default' => 0, 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control(
        'ripple_cl_logo_section_category',
        array(
            'label' => esc_html__('Select Category', 'ripple'),
            'section' => 'ripple_cl_logo_section',
            'type' => 'select',
            'choices' => $ripple_category_lists,
        ) 
    );
    
    /** Ading Client Logo Section Background Color **/
    $wp_customize->add_setting( 'ripple_cl_logo_section_bg_color', array( 'default' => '#fff', 'sanitize_callback' => 'sanitize_hex_color', 'transport' => 'postMessage'));
    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'ripple_cl_logo_section_bg_color',
        array(
            'label' => esc_html__('Section Background Color', 'ripple'),
            'section' => 'ripple_cl_logo_section',
            'settings' => 'ripple_cl_logo_section_bg_color',
        )
    ));
    
    /** Ading Client Logo Section Background Image **/
    $wp_customize->add_setting( 'ripple_cl_logo_section_bg_image', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'ripple_cl_logo_section_bg_image',
        array(
            'label' => esc_html__('Section Background Image', 'ripple'),
            'section' => 'ripple_cl_logo_section',
            
            'settings' => 'ripple_cl_logo_section_bg_image',
        )
    ));
    $wp_customize->add_setting( 'ripple_breadcrumb_bg_image', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'ripple_breadcrumb_bg_image',
        array(
            'label' => esc_html__('Breadcrumb Background Image', 'ripple'),
            'section' => 'ripple_breadcrumb_section',
            'description' => esc_html__('Recommend Image Size Is 1340 x 610','ripple'),
            'settings' => 'ripple_breadcrumb_bg_image',
        )
    ));
    /** Ading Client Logo Section Background Repeat **/
    $wp_customize->add_setting( 'ripple_cl_logo_section_bg_repeat', array( 'default' => 'no-repeat', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_cl_logo_section_bg_repeat',
        array(
            'label' => esc_html__('Background Repeat', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_cl_logo_section',
            'choices' => $ripple_bg_repeat,
            'active_callback' => 'ripple_display_bg_options_cl_logo',
        )
    );
    
    /** Ading Client Logo Section Background Position **/
    $wp_customize->add_setting( 'ripple_cl_logo_section_bg_position', array( 'default' => 'left', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_cl_logo_section_bg_position',
        array(
            'label' => esc_html__('Background Position', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_cl_logo_section',
            'choices' => $ripple_bg_position,
            'active_callback' => 'ripple_display_bg_options_cl_logo',
        )
    );
    
    /** Ading Client Logo Section Background Attachment **/
    $wp_customize->add_setting( 'ripple_cl_logo_section_bg_attachment', array( 'default' => 'scroll', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_cl_logo_section_bg_attachment',
        array(
            'label' => esc_html__('Background Attachment', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_cl_logo_section',
            'choices' => $ripple_bg_attachment,
            'active_callback' => 'ripple_display_bg_options_cl_logo',
        )
    );
    
    /** Ading Client Logo Section Background Size **/
    $wp_customize->add_setting( 'ripple_cl_logo_section_bg_size', array( 'default' => 'auto', 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'postMessage'));
    $wp_customize->add_control(
        'ripple_cl_logo_section_bg_size',
        array(
            'label' => esc_html__('Background Size', 'ripple'),
            'type' => 'radio',
            'section' => 'ripple_cl_logo_section',
            'choices' => $ripple_bg_size,
            'active_callback' => 'ripple_display_bg_options_cl_logo',
        )
    );
    
    /** Ading Client Logo Section Enable Overlay **/
    $wp_customize->add_setting( 'ripple_cl_logo_section_enable_overlay', array( 'default' => '', 'sanitize_callback' => 'ripple_sanitize_checkbox'));
    $wp_customize->add_control(
        'ripple_cl_logo_section_enable_overlay',
        array(
            'label' => esc_html__('Enable Background Overlay', 'ripple'),
            'type' => 'checkbox',
            'section' => 'ripple_cl_logo_section',
            'active_callback' => 'ripple_display_bg_options_cl_logo',
        )
    );
    
    /** Contact Section **/
    $wp_customize->add_setting( 'ripple_contact_page', array( 'default' => 0, 'sanitize_callback' => 'ripple_sanitize_page_select'));
    $wp_customize->add_control(
        'ripple_contact_page',
        array(
            'label' => esc_html__('Contact Page', 'ripple'),
            'type' => 'select',
            'choices' => $ripple_page_lists,
            'section' => 'ripple_contact_section',
            'priority' => 6,
        )
    );

    /** Adding Contact Section Help **/            
    $wp_customize->add_setting( 'ripple_contact_help', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field') );
    $wp_customize->add_control( new Ripple_WP_Customize_Help_Control(
        $wp_customize,
        'ripple_contact_help',
        array(
            'section' => 'ripple_contact_section',
            'settings' => 'ripple_contact_help',
            'input_attrs' => array(
                'info' => '<p>Make Sure you install <a href="https://wordpress.org/plugins/contact-form-7/" target="_blank">Contact Form 7</a> plugin and create contact form then Copy the Contact form 7 shortcode.</p><p>Now Add <span style="text-decoration: underline;">Text</span> widget to the <a href="'.admin_url('widgets.php').'" target="_blank" >Contact (Home Page)</a> widget area.</p>',
            ),
            'priority'=> 25
            )
    ) );

    //service section
    $wp_customize->add_section('ripple_service_section',array(
        'title'         => esc_html__('Service Section','ripple'),
        'priority'      => 18,
        'panel'         => 'ripple_home_page_section'

      ));


    $wp_customize->add_setting('ripple_service_section_enable',array(
        'sanitize_callback' => 'ripple_sanitize_checkbox'
      ));
    $wp_customize->add_control('ripple_service_section_enable',array(
        'label' => esc_html__('Enable Section','ripple'),
        'type' => 'checkbox',
        'priority'  =>1,
        'section' => 'ripple_service_section'
      ));

    $wp_customize->add_setting('ripple_service_section_menu_title',array(
        'sanitize_callback' => 'sanitize_text_field'
      ));
    $wp_customize->add_control('ripple_service_section_menu_title',array(
        'label' => esc_html__('Section Menu Text','ripple'),
        'type' => 'text',
        'section' => 'ripple_service_section'
      ));

     $wp_customize->add_setting('ripple_service_section_category',array(
        'default' => 0,
        'sanitize_callback' => 'ripple_sanitize_category_select'
      ));
    $wp_customize->add_control('ripple_service_section_category',array(
        'label' => esc_html__('Select Category','ripple'),
        'type' => 'select',
        'choices'       => $ripple_category_lists,
        'section'       => 'ripple_service_section'
      ));




//social icons
    $wp_customize->add_section( 'ripple_social_icons_section', array(
        'priority'     => 1,
        'panel'        => 'ripple_general_panel',
        'title'        => esc_html__('Social Icons', 'ripple'),
        'description'  => esc_html__('Manage social icons for your site', 'ripple'),
      ));

    $wp_customize->add_setting('ripple_footer_icon_enable',array(
        'sanitize_callback' => 'ripple_sanitize_checkbox'
      ));
    $wp_customize->add_control('ripple_footer_icon_enable',array(
        'label' => esc_html__('Enable Social icon on Footer','ripple'),
        'type' => 'checkbox',
        'priority'  =>1,
        'section' => 'ripple_social_icons_section'
      ));

    $social_icons = array('facebook','twitter','youtube','pinterest','instagram','linkedin','googleplus','flickr','dribbble','tumblr','vimeo','reddit','github','soundcloud','dropbox');
    foreach( $social_icons as $social_icon){
        
      $wp_customize->add_setting( 'ripple_'.$social_icon.'_url', array(
            'sanitize_callback' => 'esc_url_raw'
        ));
      $wp_customize->add_control( 'ripple_'.$social_icon.'_url', array(
            'section'       => 'ripple_social_icons_section',
            'label'         => esc_html__('Social Icons ','ripple').$social_icon,
            'type'          => 'text'
        ));
    }
