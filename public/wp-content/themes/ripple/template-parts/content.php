<?php
/**
 * Template part for displaying posts.
 *
 * @package Ripple
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="clearfix">
        <div class="blog-post-content">
            <div class="blog_desc clearfix">
                <header class="entry-header">
                    <?php if (has_post_thumbnail()) : ?>
                        <figure class="archive-post-thumbnail">
                            <?php
                            $ripple_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'ripple-single-image');
                            $ripple_img_src = $ripple_img[0];
                            ?>
                            <?php if($ripple_img_src){ ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($ripple_img_src); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
                            </a>
                            <?php } ?>
                        </figure>
                    <?php endif; ?>
                    <div class="title-info">
                        <?php if(get_the_title()){ ?>
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                        <?php } ?>
                        <div class="post-meta-infos">
                            <span class="entry-footer-wrapper clearfix">
                                <?php
                                    $ripple_aulink = get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('nickname'));
                                    $ripple_year  = get_the_date('Y');
                                    $ripple_month = get_the_date('n');
                                ?>
                                <span class="author user-wrapper"><i class="fa fa-user"></i><a href="<?php echo esc_url($ripple_aulink); ?>"><?php echo esc_html(get_the_author_meta('nickname')); ?></a></span>
                                <span class="posted-date user-wrapper"><i class="fa fa-calendar"></i><a href="<?php echo esc_url(get_month_link($ripple_year, $ripple_month)); ?>"><?php the_time( get_option( 'date_format' )); ?></a></span>
                                <?php if (has_category()) : ?>
                                    <span class="category user-wrapper"><i class="fa fa-folder"></i><?php the_category(', '); ?></span>
                                <?php endif; ?>
                                <?php if (comments_open()) : ?>
                                    <span class="comments user-wrapper"><i class="fa fa-comment"></i><?php comments_popup_link(); ?></span>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php echo apply_filters('the_content' , wp_kses_post(wp_trim_words(get_the_content(),100,'...')));?>
                    <div class="readmore">
                        <a href="<?php the_permalink(); ?>">
                            <?php esc_html_e('Read More', 'ripple'); ?>
                        </a>
                    </div> 
                </div><!-- .entry-content -->
            </div>
            <div class="clearfix"></div>
            
        </div>
    </div>
</article><!-- #post-## -->
