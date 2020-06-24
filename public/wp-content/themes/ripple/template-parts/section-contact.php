<?php
/**
 * Contact Section
 */
// $ripple_form_section_title = get_theme_mod('ripple_form_section_title');
$ripple_contact_section_gmap_display = get_theme_mod('ripple_contact_section_gmap_display');
$ripple_contact_page = get_theme_mod( 'ripple_contact_page', 0 );
?>
<?php if($ripple_contact_section_gmap_display == 1 || 
is_active_sidebar('ripple-contact-section-map') || 
is_active_sidebar('ripple-contact-us-home-page')){ ?>
    <div class="form-map-contact">
        <?php if ($ripple_contact_section_gmap_display == 1) : ?>
            <?php if(is_active_sidebar('ripple-contact-section-map')) : ?>
                <div class="res-map-overlay">
                    <?php dynamic_sidebar('ripple-contact-section-map'); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(is_active_sidebar('ripple-contact-us-home-page')) : ?>
            <div class="container wow fadeInUp">
            <div class="contact-us-section-wrap clearfix">
                <?php if(is_active_sidebar('ripple-contact-us-home-page')) : ?>
                    <div class="hm-contac-form-container wow slideUp">
                        <div class = "ripple-contact-us-page-wrap">
                            <?php dynamic_sidebar('ripple-contact-us-home-page'); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($ripple_contact_page) : ?>
                    <?php $ripple_contact_pg_query = new WP_Query( array('post_type' => 'page', 'posts_per_page' => 1) ); ?>
                    <?php if( $ripple_contact_pg_query->have_posts() ) : ?>
                        <div class="info-contact">
                            <?php while( $ripple_contact_pg_query->have_posts() ) : $ripple_contact_pg_query->the_post(); ?>
                                <?php the_content(); ?>                                
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>                

            </div>
            </div>
        <?php endif; ?>
    </div>
<?php } ?>