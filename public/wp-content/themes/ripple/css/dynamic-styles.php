<?php
    function ripple_dynamic_styles() {
        $slider_overlay_direction = esc_attr(get_theme_mod('ripple_slider_overlay_direction'));
        $rotate = ($slider_overlay_direction == 'top') ? '0deg' : '180deg';

         $enabled_sections = ripple_get_parallax_sections();
        ?>
        <style type="text/css">
            /** For Slider **/
            .slider-overlay1{
                -webkit-transform: rotate(<?php echo esc_attr($rotate); ?>);
                -moz-transform: rotate(<?php echo esc_attr($rotate); ?>);
            }
            /** For Section Background **/
            <?php foreach ($enabled_sections as $enabled_section) : ?>
                <?php
                $section = $enabled_section['section'];
                $section_bg_color = esc_attr(get_theme_mod('ripple_'.$section . '_section_bg_color'));
                $section_bg_image = esc_url(get_theme_mod('ripple_'.$section . '_section_bg_image'));
                $section_bg_repeat = esc_attr(get_theme_mod('ripple_'.$section . '_section_bg_repeat', 'no-repeat'));
                $section_bg_position = esc_attr(get_theme_mod('ripple_'.$section . '_section_bg_position', 'left'));
                $section_bg_attachment = esc_attr(get_theme_mod('ripple_'.$section . '_section_bg_attachment', 'scroll'));
                $section_bg_size = esc_attr(get_theme_mod('ripple_'.$section . '_section_bg_size'));
                if($section_bg_color || $section_bg_image){
                ?>
                    #plx_<?php echo esc_attr($section) . '_section'; ?>{
                        background: <?php echo esc_attr($section_bg_color).' url("'.esc_url($section_bg_image).'")'.' '.esc_attr($section_bg_repeat).' '.esc_attr($section_bg_position).' '.esc_attr($section_bg_attachment); ?>;
                       <?php if($section_bg_size){ ?> background-size: <?php echo absint($section_bg_size); ?>;<?php } ?>
                    }
            <?php
                } 
            endforeach; ?>
            </style>
        <?php
        $ripple_breadcrumb_image = get_theme_mod('ripple_breadcrumb_bg_image');
        if($ripple_breadcrumb_image){
        ?>
        <style>
            .header-banner{
                background-image: url(<?php echo esc_url($ripple_breadcrumb_image); ?>);
                background-repeat: no-repeat;
            }
        </style>
        <?php
    }
    }
    
    add_action('wp_head', 'ripple_dynamic_styles');