<?php
/**
 * Progress Section
 */
$ripple_progress_section_title = get_theme_mod('ripple_progress_section_title', 'Our Skills');
$ripple_progress_section_descr = get_theme_mod('ripple_progress_section_descr', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>');
?>
<div class="container clearfix">
    <div class="progress-left-wrap">
        <?php if($ripple_progress_section_title != '') : ?>
            <h2 class="progress-title wow fadeInLeft"><?php echo esc_html($ripple_progress_section_title); ?></h2>
        <?php endif; ?>
        <?php if($ripple_progress_section_descr != '') : ?>
            <div class="progress-descr wow fadeInLeft"><?php echo wp_kses_post($ripple_progress_section_descr); ?></div>
        <?php endif; ?>
    </div>
    <div class="progress-right-wrap wow fadeInRight">
        <?php if(is_active_sidebar('ripple-progress-home-page')) : ?>
            <?php dynamic_sidebar('ripple-progress-home-page'); ?>
        <?php endif; ?>
    </div>
</div>