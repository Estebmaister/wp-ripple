<?php
    add_action( 'customize_register', 'ripple_additional_customize_register' );
    function ripple_additional_customize_register( $wp_customize ) {
        require get_template_directory() . '/inc/admin/ripple-options.php';
        require get_template_directory() . '/inc/admin/ripple-sanitize.php';
        
        /**
         * Panels
         */
        //print_r($ripple_panels);
        foreach($ripple_panels as $ripple_panel) :
            $wp_customize->add_panel($ripple_panel['id'],$ripple_panel['args']);             
        endforeach;
        
        /**
         * Sections
         */
        foreach($ripple_sections as $ripple_section) :
            $wp_customize->add_section($ripple_section['id'], $ripple_section['args']);
        endforeach;
        
        /**
         * Settings
         */
        
        /**
         * Controls
         */
        /** Ripple Other Controls **/
        foreach($ripple_other_controls as $ripple_other_control) :
            $wp_customize->add_control($ripple_other_control['id'], $ripple_other_control['args']);
        endforeach;
        
        
        /** Background Color Controls **/
        foreach($ripple_control_bg_colors as $ripple_control_bg_color) :
            $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,$ripple_control_bg_color['id'],$ripple_control_bg_color['args']));
        endforeach;
        
        /** Backgroiund Image Controls **/
        foreach($ripple_control_bg_images as $ripple_control_bg_image) :
            $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,$ripple_control_bg_image['id'],$ripple_control_bg_image['args']));
        endforeach;
            
        /**
         * Active Callbacks
         */
         //print_r($sections_bgs);
         function ripple_display_bg_options_about( $control ) {
            if($control->manager->get_setting('ripple_about_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function ripple_display_bg_options_portfolio( $control ) {
            if($control->manager->get_setting('ripple_portfolio_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        } 
      
        function ripple_display_bg_options_blog( $control ) {
            if($control->manager->get_setting('ripple_blog_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function ripple_display_bg_options_testimonial( $control ) {
            if($control->manager->get_setting('ripple_testimonial_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function ripple_display_bg_options_team( $control ) {
            if($control->manager->get_setting('ripple_team_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function ripple_display_bg_options_contact( $control ) {
            if($control->manager->get_setting('ripple_contact_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        /** Adding Feature Section Active Callbacks **/
        function ripple_display_bg_options_feature( $control ) {
            if($control->manager->get_setting('ripple_feature_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        /** Adding Progress Section Active Callbacks **/
        function ripple_display_bg_options_progress( $control ) {
            if($control->manager->get_setting('ripple_progress_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        /** Adding Client Logo Section Active Callbacks **/
        function ripple_display_bg_options_cl_logo( $control ) {
            if($control->manager->get_setting('ripple_cl_logo_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
    }
    if( class_exists( 'WP_Customize_Control' ) ) :
        class Ripple_WP_Customize_Help_Control extends WP_Customize_Control{
            public function render_content() {
                $input_attrs = $this->input_attrs;
                $info = isset($input_attrs['info']) ? $input_attrs['info'] : '';
                ?>
                <div class="help-info">
                    <h4><?php esc_html_e('Instruction', 'ripple'); ?></h4>
                    <div style="font-weight: bold;">
                        <?php echo wp_kses_post($info); ?>
                    </div>
                </div>
                <?php
            }
        }

    endif;
    
    /**
     * Enqueue script for custom customize control.
     */
    function ripple_custom_customize_enqueue() {
        wp_enqueue_style('ripple-customizer-custom', get_template_directory_uri() . '/inc/admin/css/customizer-custom.css');        
  
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/faw/css/font-awesome.css');
    }
    add_action( 'customize_controls_enqueue_scripts', 'ripple_custom_customize_enqueue' );