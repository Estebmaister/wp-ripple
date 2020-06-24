<?php
    /**
     * SANITIZATION
     */    
    function ripple_sanitize_textarea($input){
        return wp_kses_post( force_balance_tags( $input ) );
    }
    function ripple_sanitize_checkbox($input){
        if($input == 1){
            return 1;
        }else{
            return '';
        }
    }
    
    function ripple_sanitize_page_select($input){
        $ripple_page_lists = ripple_page_lists();
        if(array_key_exists($input,$ripple_page_lists)){
            return $input;
        }else{
            return '';
        }
    }
    
    function ripple_sanitize_category_select($input){
        $ripple_category_lists = ripple_category_lists();
        if(array_key_exists($input,$ripple_category_lists)){
            return $input;
        }else{
            return '';
        }
    }
    
    function ripple_sanitize_bg_repeat($input){
        $bg_repeat = array(
            'no-repeat'  => esc_html__('No Repeat', 'ripple'),
            'repeat'     => esc_html__('Tile', 'ripple'),
            'repeat-x'   => esc_html__('Tile Horizontally', 'ripple'),
            'repeat-y'   => esc_html__('Tile Vertically', 'ripple'),
        );
        
        if(array_key_exists($input,$bg_repeat)){
            return $input;
        }else{
            return '';
        }
    }
    
    function ripple_sanitize_bg_position($input){
        $bg_position = array(
            'left'       => esc_html__('Left', 'ripple'),
            'center'     => esc_html__('Center', 'ripple'),
            'right'      => esc_html__('Right', 'ripple'),
        );
        
        if(array_key_exists($input,$bg_position)){
            return $input;
        }else{
            return '';
        }
    }
    
    function ripple_sanitize_bg_attachment($input){
        $bg_attachment = array(
            'fixed'      => esc_html__('Fixed', 'ripple'),
            'scroll'     => esc_html__('Scroll', 'ripple'),
        );
        
        if(array_key_exists($input,$bg_attachment)){
            return $input;
        }else{
            return '';
        }
    }

    function ripple_sanitize_bg_size($input) {
        $bg_size = array(
            'auto' => esc_html__('Auto', 'ripple'),
            'cover' => esc_html__('Cover', 'ripple'),
            'contain' => esc_html__('Contain', 'ripple'),
        );

        if(array_key_exists($input, $bg_size)){
            return $input;
        }else{
            return '';
        }
    }
    