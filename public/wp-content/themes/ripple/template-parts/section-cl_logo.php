<?php
/**
 * Client Logo   Section
 */
$ripple_cl_logo_section_title = get_theme_mod('ripple_cl_logo_section_title');
$ripple_cl_logo_section_descr = get_theme_mod('ripple_cl_logo_section_descr');
$ripple_cl_logo_section_category = get_theme_mod('ripple_cl_logo_section_category');
$ripple_cl_args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'cat' => $ripple_cl_logo_section_category,
    'post_status' => 'publish'    
);

$ripple_cl_query = new  WP_Query($ripple_cl_args);
?>
<div class="container">
    <?php if($ripple_cl_query->have_posts() && !empty($ripple_cl_logo_section_category)) : ?>
        <ul class="partners-logo-container">
            
            <?php while($ripple_cl_query->have_posts()) : $ripple_cl_query->the_post(); ?>
                <?php
                    $ripple_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $ripple_img_src = $ripple_img[0];
                ?>
                <li class="wow fadeIn">
                    <img src="<?php echo esc_url($ripple_img_src); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>