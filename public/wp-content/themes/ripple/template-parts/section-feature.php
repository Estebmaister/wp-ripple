<?php
/**
 * Feature Section
 */
$ripple_feature_section_title = get_theme_mod('ripple_feature_section_title');
$ripple_feature_section_descr = get_theme_mod('ripple_feature_section_descr');


$ripple_feat_category = get_theme_mod('ripple_feature_section_category', 0);

$ripple_feat_image = get_theme_mod('ripple_feature_section_image', '');
$ripple_feat_left_query = new WP_Query(array('post_type' => 'post', 'cat' => $ripple_feat_category, 'posts_per_page' => 3));
$ripple_feat_right_query = new WP_Query(array('post_type' => 'post', 'cat' => $ripple_feat_category, 'posts_per_page' => 3, 'offset' => 3));
?>
<div class="container clearfix">
    <div class = "ripple-content-title-wrapper">
        <?php if($ripple_feature_section_title != '') : ?>
            <h2 class="feature-title wow fadeInUp"><?php echo esc_html($ripple_feature_section_title); ?></h2>
        <?php endif; ?>
        <?php if($ripple_feature_section_descr != '') : ?>
            <div class="feature-descr wow fadeInUp"><?php echo esc_html($ripple_feature_section_descr); ?></div>
        <?php endif; ?>
    </div>
    <?php if($ripple_feat_category != 0 && ($ripple_feat_left_query->have_posts() || $ripple_feat_right_query->have_posts())) : ?>
        <div class="hm-feat-posts-container">
            <div class="hm-left-feats-container wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
                <?php while($ripple_feat_left_query->have_posts()) : $ripple_feat_left_query->the_post(); ?>
                    <div class="hm-feat-post-wrap">
                        <div class="hm-feat-post-content">
                            <span class="feat-button"><a href="<?php the_permalink(); ?>"><span class="hm-feat-post-title"><?php the_title(); ?></span></a></span>
                            <div class="hm-feat-post-describe">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="hm-feat-post-icon">
                            <?php if(has_post_thumbnail()) : ?>
                                <?php $ripple_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                                <img src="<?php echo esc_url($ripple_img[0]); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="hm-feat-image wow slideInUp" data-wow-duration="3s">
                <?php if($ripple_feat_image != '') : ?>
                    <img src="<?php echo esc_url($ripple_feat_image); ?>" />
                <?php endif; ?>
            </div>
            <div class="hm-right-feats-container wow slideInRight" data-wow-duration="2s" data-wow-delay="1s">
                <?php while($ripple_feat_right_query->have_posts()) : $ripple_feat_right_query->the_post(); ?>
                    <div class="hm-feat-post-wrap">
                        <div class="hm-feat-post-content">
                             <span class="feat-button"><a href="<?php the_permalink(); ?>"><span class="hm-feat-post-title"><?php the_title(); ?></span></a></span>
                            <div class="hm-feat-post-describe">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="hm-feat-post-icon">
                            <?php if(has_post_thumbnail()) : ?>
                                <?php $ripple_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                                <img src="<?php echo esc_url($ripple_img[0]); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</div>