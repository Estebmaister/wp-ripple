<?php

function ripple_page_lists() {
    $pages = get_pages();
    $page_list = array();
    $page_list[0] = esc_attr__('Select Page', 'ripple');
    foreach ($pages as $page) :
        $page_list[$page->ID] = $page->post_title;
    endforeach;
    return $page_list;
}

/**
* Social Icons
*/
if( ! function_exists('ripple_social_icons')){
    function ripple_social_icons(){
        
        $social_icons = array('facebook','twitter','youtube','pinterest','instagram','linkedin','googleplus','flickr','dribbble','tumblr','vimeo','reddit','github','soundcloud','dropbox');
            foreach( $social_icons as $social_icon){
                $ripple_social_icons = get_theme_mod('ripple_'.$social_icon.'_url');
                if( $ripple_social_icons ){
                    echo '<a href="' . esc_url($ripple_social_icons) . '" target="_blank">';
                    if( $social_icon == 'googleplus' ){
                        echo '<i class ="fa fa-google-plus"></i>'; 
                    }else{
                        echo '<i class ="fa fa-' . esc_attr($social_icon) . '"></i>';    
                    }
                    echo '</a>';
                }
            }
    }
}
add_action('ripple_icons_list','ripple_social_icons');


if( ! function_exists('ripple_footer_social_icons')){

  function ripple_footer_social_icons(){
        $ripple_footer_icon_enable = esc_attr( get_theme_mod('ripple_footer_icon_enable') );
        if( $ripple_footer_icon_enable == '1' ){
            ?>
            <div class = "ripple-social-icons">
                <?php ripple_social_icons(); ?>
            </div>
            <?php 
        }
    }
} 
add_action( 'ripple_after_footer', 'ripple_footer_social_icons');

function ripple_category_lists() {
    $categories = get_categories(
            array(
                'hide_empty' => 0,
                'exclude' => 1
            )
    );

    $category_list = array();
    $category_list[0] = esc_html__('Select Category', 'ripple');
    foreach ($categories as $category) :
        $category_list[$category->term_id] = $category->name;
    endforeach;
    return $category_list;
}

function ripple_breadcrumb_cb() {

    if (is_home() || is_front_page()) {
        return;
    }

    echo '<div id="ripple-breadcrumb">';

    if ( ! function_exists( 'breadcrumb_trail' ) ) {
        require_once get_template_directory() . '/inc/breadcrumbs.php';
    }

    $breadcrumb_args = array(
        'container'   => 'div',
        'show_browse' => false,
    );
    breadcrumb_trail( $breadcrumb_args );

    echo '</div>';
}

add_action('ripple_breadcrumb', 'ripple_breadcrumb_cb');

/** Is home page with set to display latest posts and parallax is enabled * */

/** Slider Modification **/

    function ripple_slider_bx() {
        $enabled_sections = ripple_get_parallax_sections();
        $next_section = '';
        
        if(!empty($enabled_sections)) {
            $next_section = '#'.$enabled_sections[0]['id'];    
        }
        
        $enable_slider_overlay = esc_html(get_theme_mod('ripple_enable_slider_overlay', ''));
        $slider_readmore_text = esc_html(get_theme_mod('ripple_slider_readmore_text', 'Call To Action'));
        $slider_category = esc_html(get_theme_mod('ripple_slider_category'));
        $sl_args = array('post_type' => 'post', 'posts_per_page' => 5, 'cat' => $slider_category );
        $sl_query = new WP_Query($sl_args);
        
        if($slider_category) :
            if($sl_query->have_posts()) :
            ?>
                <section id="plx-slider-section">
                    <ul class='main-slider'>
                        <?php 
                            while($sl_query->have_posts()) : $sl_query->the_post();
                            $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            $img_src = $img[0];
                        ?>
                        <li class="slide">
                            <?php if ($enable_slider_overlay == 1) : ?>
                                <div class="slider-overlay1"></div>
                            <?php endif; ?>
                            <img src="<?php echo esc_url($img_src); ?>" />                            
                            <div class="slide-caption">
                                <div class="container">
                                    <div class = "ripple-slider-banner-wrapper">
                                        <span class="caption-title"><?php the_title(); ?></span>
                                        <span class="caption-descr"><?php the_content(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php if (is_page_template('tpl-home.php')) : ?>
                    
                    <div class="slider-down-btn">
                        <span class="next-page">
                            <a href="<?php echo esc_attr($next_section); ?>"><img src="<?php echo esc_url(get_template_directory_uri()).'/images/yellow-arrow.png'; ?>" /></a>
                        </span>
                    </div>
                    <?php endif; ?>
                </section>
            <?php
            endif;
        endif;
    }
    add_action('ripple_slider', 'ripple_slider_bx');
    /** Extra Functions **/
     function ripple_get_parallax_sections() {
        $sections = array('feature','progress','service','portfolio','about', 'testimonial', 'blog', 'cl_logo', 'contact');
        $enabled_section = array();
        foreach ($sections as $section) :
            if (get_theme_mod('ripple_'.$section . '_section_enable') == 1) :
                $enabled_section[] = array(
                    'id' => 'plx_' . $section . '_section',
                    'menu_text' => get_theme_mod('ripple_'.$section . '_section_menu_title',''),
                    'section' => $section,
                );
            endif;
        endforeach;
        return $enabled_section;
    }
    function ripple_sanitize_bradcrumb($input){
    $all_tags = array(
        'a'=>array(
            'href'=>array()
        )
     );
    return wp_kses($input,$all_tags);
    
}
    ?>
