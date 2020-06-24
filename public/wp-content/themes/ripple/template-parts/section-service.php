

<?php
$ripple_service_category = get_theme_mod('ripple_service_section_category');
$ripple_service_category = new WP_Query(array('post_type' => 'post', 'cat' => $ripple_service_category, 'posts_per_page' => -1));
?>
<div class="container">

    <?php if ($ripple_service_category->have_posts() && $ripple_service_category) : ?>
        <?php if($ripple_service_category->have_posts()) : ?>
            <div class="ripple-container clearfix">
                <ul class="service-tabs">
                <?php while($ripple_service_category->have_posts()) : $ripple_service_category->the_post();
                $ripple_service_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'ripple-service-home');?>
                            <?php if($ripple_service_image[0]){ ?>
                            <li class="service-image" data-tab="tab-<?php the_ID();?>">
                                
                                   <img src="<?php echo esc_url($ripple_service_image[0]); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />

                                    <?php if(get_the_title()){ ?><div class="service-title"><h5><?php the_title(); ?></h5></div><?php } ?>
                            </li>
                            <?php } 
                           endwhile;
                           wp_reset_postdata();?>
                       </ul>
                       <div class = "ripple-service-content-wrap">
                            <?php while($ripple_service_category->have_posts()) : $ripple_service_category->the_post();
                             if(get_the_content()){ ?>
                            <div class="service-content" id="tab-<?php the_ID();?>">
                                <?php the_content();//echo (wp_trim_words(get_the_content(),'40','...')); ?>
                                <span class="service-read-more">
                                	<a href="<?php the_permalink(); ?>" >
                                		<?php esc_html_e('Read More','ripple'); ?>
                                	</a>
                                </span>
                            </div>
                            <?php } ?>
                <?php endwhile; 

                wp_reset_postdata();?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

