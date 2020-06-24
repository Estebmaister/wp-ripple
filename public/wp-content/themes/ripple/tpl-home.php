<?php
/**
 * The template for displaying all pages.
 * Template Name: Home
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Ripple
 */

get_header(); ?>

<?php
    /**
     * Parallax Page
     */
    $ripple_enabled_sections = ripple_get_parallax_sections();
    foreach($ripple_enabled_sections as $ripple_section) :
    ?>
        <section id="<?php echo esc_attr($ripple_section['id']) ?>" class="plx-sections">
            <?php
                $ripple_aplyoverlay = false; 
                if( absint(get_theme_mod('ripple_'.$ripple_section['section'].'_section_enable_overlay')) == 1 && esc_url(get_theme_mod('ripple_'.$ripple_section['section'].'_section_bg_image')) != ''){
                    $ripple_aplyoverlay = true;
                } 
            ?>
                <div class="section-overlay <?php echo esc_attr($ripple_section['section']).'-section-overlay'; ?>" style="<?php if($ripple_aplyoverlay) : ?>background: rgba(234, 255, 0, 0.34);<?php endif; ?>">
                    <div class="mid-content">
                        <?php get_template_part('template-parts/section', $ripple_section['section']); ?>
                    </div>
                </div>
        </section>
    <?php 
    endforeach;   
    ?>
<?php get_footer(); ?>
