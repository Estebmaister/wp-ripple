<?php
$ripple_blog_section_title = get_theme_mod('ripple_blog_section_title');
$ripple_blog_section_content = get_theme_mod('ripple_blog_section_descr');
$ripple_blog_category = get_theme_mod('ripple_blog_section_category');
$ripple_blog_query = new WP_Query(array('post_type' => 'post', 'cat' => $ripple_blog_category, 'posts_per_page' => 3));
?>
<div class="container">

    <?php if ($ripple_blog_query->have_posts() && $ripple_blog_category) : ?>
        <?php $ripple_blog_view_all = get_theme_mod('ripple_blog_section_view_all'); ?>
        <div class="hm-blog-title-descr-container ">
            <h2 class="wow fadeInUp"><?php echo esc_html($ripple_blog_section_title); ?></h2>
            <div class="feature-descr wow fadeInUp"><?php echo wp_kses_post($ripple_blog_section_content); ?></div>
        </div>
        
        <?php if($ripple_blog_query->have_posts()) : ?>
            <div class="hm-blog-posts-container clearfix">
                <?php while($ripple_blog_query->have_posts()) : $ripple_blog_query->the_post();
                $ripple_blog_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'ripple-blog-home');?>
                        <div class="all-wrap-blog">
                        <div class="all-wrap-blog-contain wow fadeInUp">
                            <?php if($ripple_blog_image[0]){ ?>
                                <div class="image-blog">
                                   <a href="<?php the_permalink(); ?>"> <img src="<?php echo esc_url($ripple_blog_image[0]); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" /></a>
                                </div>
                            <?php } ?>
                            <?php if(get_the_title()){ ?><div class="blog-title"><a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a></div><?php } ?>
                             <div class="wrap-date-comment">
                                 <div class="author-comment">
                                    <span class="blog-author"><i class="fa fa-user"></i><?php echo esc_url(the_author_posts_link()); ?></span>
                                </div>
                                <div class="blog-date">
                                   <i class="fa fa-clock-o"></i><?php echo get_the_date(); ?>
                                </div>
                            </div>
                            <?php if(get_the_content()){ ?>
                            <div class="blog-content">
                                <div class="content"><?php echo (wp_trim_words(get_the_content(),'18','...')); ?></div>
                                <span class="blog-read-more">
                                	<a href="<?php the_permalink(); ?>" >
                                		<?php esc_html_e('Read More','ripple'); ?>
                                	</a>
                                </span>
                            </div>
                            <?php } ?>
                            </div>
                        </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        
    <?php endif; ?>
</div>

