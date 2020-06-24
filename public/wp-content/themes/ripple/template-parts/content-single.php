<?php
/**
 * Template part for displaying single posts.
 *
 * @package Ripple
 */
?>

<!-- for other single post page -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="clearfix">
        <div class="blog-post-content clearfix">
            <header class="entry-header">
                <div class="title-info">
                    <div class="post-meta-infos">
                        <span class="entry-footer-wrapper clearfix">
                            <?php
                                $ripple_aulink = get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('nickname'));
                                $ripple_year = get_the_date('Y');
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
                
                <?php if (has_post_thumbnail()) : ?>
                    <?php
                    $ripple_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'ripple-single-image');
                    $ripple_img_src = $ripple_img[0];
                    ?>
                    <figure class="entry-thumbnail">
                        <img src="<?php echo esc_url($ripple_img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                    </figure>
                <?php endif; ?>
                
            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php the_content(); ?>
            </div><!-- .entry-content -->
            
        </div> <!-- .blog-post-content -->
    </div> <!-- Clearfix -->
</article><!-- #post-## -->

