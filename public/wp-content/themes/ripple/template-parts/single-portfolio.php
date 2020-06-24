<?php 
	/**
	* Single Portfolio Page
	*/

    $ripple_port_category = esc_html(get_theme_mod('ripple_portfolio_section_category'));
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="clearfix">
        <div class="portfolio-post-content">
            <header class="entry-header">
                <h2><?php the_title(); ?></h2>
                <div class='portfolio-nav clearfix'>
                    <?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>', TRUE); ?>
                    <a href="<?php echo esc_url(get_category_link($ripple_port_category)); ?>"><i class='fa fa-th-large'></i></a>
                    <?php next_post_link('%link', '<i class="fa fa-angle-right"></i>', TRUE); ?>
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
                <?php
                wp_link_pages(array(
                   'before' => '<div class="page-links">' . esc_html__('Pages:', 'ripple'),
                   'after' => '</div>',
               ));
                ?>
            </div><!-- .entry-content -->
        </div> <!-- .blog-post-content -->
    </div> <!-- Clearfix -->
</article><!-- #post-## -->