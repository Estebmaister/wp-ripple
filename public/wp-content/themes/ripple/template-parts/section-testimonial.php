<?php
$ripple_test_section_title = esc_html(get_theme_mod('ripple_testimonial_section_title'));
$ripple_test_category = esc_html(get_theme_mod('ripple_testimonial_section_category'));
//$ripple_testimonial_designation_section =esc_html(get_theme_mod('ripple_testimonial_designation_section'));
$ripple_test_query = new WP_Query(array('post_type' => 'post', 'cat' => $ripple_test_category, 'posts_per_page' => 6));
                            ?>
<div class="container">
    <div class="testinomial clearfix">               
        <?php if ($ripple_test_query->have_posts() && $ripple_test_category) : ?>
        	
            <div class="testimonial-slider clearfix">
                <?php while ($ripple_test_query->have_posts()) : $ripple_test_query->the_post(); ?>
                    <div class="testimonial-post-wrap wow fadeInUp">
                    <div class="testimonial-post-wrap-again">
                        <div class="client-testimonial-wrap">
                            <?php if($ripple_test_section_title) : ?>        
                                <h2 class="wow fadeInUp">
                                    <?php echo esc_html($ripple_test_section_title); ?>
                                </h2>
                                <?php endif; ?> 
                        <div class="client-testimonial-wrap-contain">
                            <div class="client-testimonial">    
                                <?php the_content(); ?>
                            </div>
                            <?php if(get_the_title()){ ?>
                                <h3 class="client-name">
                                    <?php the_title(); ?>
                                    
                                </h3>

                            <?php } ?>	
                        </div>
                        </div>
                        <div class="client-image-wrap">
                                <?php
                                $ripple_img = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
                                $ripple_img_src = $ripple_img[0];
                                ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo esc_url($ripple_img_src); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
                                <?php endif; ?>
                        </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>