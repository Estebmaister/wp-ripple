<?php
/**
 * Portfolio Section
 */
$ripple_portfolio_section_title = esc_html(get_theme_mod('ripple_portfolio_section_title'));
$ripple_portfolio_category = esc_html(get_theme_mod('ripple_portfolio_section_category'));
$ripple_port_args = array('post_type' => 'post', 'cat' => $ripple_portfolio_category, 'order' => 'DESC', 'posts_per_page' => -1);
$ripple_port_query = new WP_Query($ripple_port_args);

$ripple_fil_categories = get_categories(array('type' => 'post', 'parent' => $ripple_portfolio_category, 'hide_empty' => false));
?>
<div class="container">
    <!-- Portfolio Filter -->
    <div class="portfolio-post-filter clearfix">
        <?php $ripple_portfolio_section_title = get_theme_mod('ripple_portfolio_section_title'); ?>
        <?php if($ripple_portfolio_section_title){ ?>
            <div class="section-title-port fadeInUp"><h2><?php echo esc_html($ripple_portfolio_section_title); ?></h2></div>
        <?php } ?>
        <div class="titles-port fadeInUp">
            <div class="filter active" data-filter="*"><?php esc_html_e('All', 'ripple'); ?></div>
            <?php foreach ($ripple_fil_categories as $ripple_fil_cat) : ?>
                <div class="filter" data-filter=".category-<?php echo esc_attr($ripple_fil_cat->term_id); ?>"><?php echo esc_html($ripple_fil_cat->name); ?></div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if ($ripple_port_query->have_posts() && $ripple_portfolio_category) : ?> 
        <div class="portfolio-postse wow fadeInUp clearfix">
            <?php $ripple_count = 1; ?>
            <?php while ($ripple_port_query->have_posts()) : $ripple_port_query->the_post(); ?>
                <?php
                    $ripple_cats = get_the_category();
                    $ripple_cat_list = '';
                    foreach ($ripple_cats as $ripple_cat) :
                        if ($ripple_cat->term_id != $ripple_portfolio_category) {
                            $ripple_cat_list .= 'category-' . $ripple_cat->term_id . ' ';
                        }
                    endforeach;

                    $ripple_image_size = 'ripple-port-thumb3';
                    if($ripple_count == 3){
                        $ripple_image_size = 'ripple-port-thumb1';
                        $ripple_hport_img_class = 'hm-port-bg-thumb';
                        
                    } elseif($ripple_count == 6) {
                        $ripple_image_size = 'ripple-port-thumb2';
                        $ripple_hport_img_class = 'hm-port-gl-thumb';
                        
                    }else{
                        $ripple_image_size = 'ripple-port-thumb3';
                        $ripple_hport_img_class = 'hm-port-sm-thumb';
                    }
                    $ripple_img = wp_get_attachment_image_src(get_post_thumbnail_id(), $ripple_image_size);
                    $ripple_img_src = $ripple_img[0];
                ?>
                <div class="portfolio-post-wrape <?php echo esc_attr($ripple_cat_list); ?> <?php echo esc_attr($ripple_hport_img_class); ?>">
                    <div class="overflow">
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo esc_url($ripple_img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                                <?php endif; ?>

                                <div class="hm-port-excerpt">
                                    <div class = "ripple-portfolio-text-wrap">
                                        <h4 class="hm-port-title" ><?php the_title(); ?></h4>
                                        <?php if(get_the_category()){ ?>
                                            <div class="blog-content-contain">
                                                <?php
                                                $cat_lists = get_the_category();
                                                
                                                

                                                echo $cat_lists[0]->name;
                                               //the_category(get_the_id());
                                                //echo esc_attr(wp_trim_words( get_the_content(), 4, '...' ));
                                                ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                
                            </figure>
                        </a>
                    </div>
                </div>
                
                <?php $ripple_count++; ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>