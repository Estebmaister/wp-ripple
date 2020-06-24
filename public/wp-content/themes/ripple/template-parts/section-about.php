<?php
/**
 * About Parallax Section
 */
 $ripple_about_title = get_theme_mod('ripple_about_section_title');
 $ripple_about_descr = get_theme_mod('ripple_about_section_descr');
 $ripple_about_pg_id = get_theme_mod('ripple_about_section_page');
 $ripple_page_query = new WP_Query(array('page_id' => $ripple_about_pg_id));
 $ripple_team_category = get_theme_mod('ripple_about_section_team_category', 0);
 $ripple_team_query = new WP_Query( array('post_type' => 'post', 'cat' => $ripple_team_category) );
?>
<div class="container clearfix">
    <div class="hm-about-section-content">
        <h2 class="wow fadeInLeft" ><?php echo esc_html($ripple_about_title); ?></h2>
        <div class="feature-descr wow slideInUp" >
            <?php echo wp_kses_post($ripple_about_descr); ?>
        </div>
    </div>
    
    <div class="hm-about-bottom-container">
        <div class="hm-about-left-container wow fadeInLeft" >
            <?php if($ripple_about_pg_id){
                 if($ripple_page_query->have_posts()) : ?>
                    <?php while($ripple_page_query->have_posts()) : $ripple_page_query->the_post(); ?>
                        <div class="hm-about-contents">
                            <h2 class="hm-about-page-title"><?php the_title(); ?></h2>
                            <div class="hm-about-page-contents">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; 
            }?>
        
            <?php if(is_active_sidebar('ripple-about-us-home-page')) : ?>
                <div class="hm-about-page-progress clearfix">
                    <?php dynamic_sidebar('ripple-about-us-home-page'); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="hm-about-right-container wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.8s">
            <?php if($ripple_team_query->have_posts()) : ?>
                <div class="hm-team-container clearfix">
                    <?php while($ripple_team_query->have_posts()) : $ripple_team_query->the_post(); ?>
                        <?php
                            $ripple_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'ripple-team-thumb');
                            $ripple_img_src = $ripple_img[0];
                        ?>
                        <div class="team-wrap">
                        <div class="team-wrap-contain">
                            <figure class="team-member-image">
                                <?php if(has_post_thumbnail()) : ?>
                                    <img src="<?php echo esc_url($ripple_img_src); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
                                <?php endif; ?>
                            </figure>
                            <div class="team-member-name"><?php the_title(); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>