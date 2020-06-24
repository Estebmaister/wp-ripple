<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ripple
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php endif; ?>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >
        <?php  
            $ripple_disp_parallax_menu = absint(get_theme_mod('ripple_disp_parallax_menu', 0));
        ?>        
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">

                <div class="container">
                    <div class="site-branding pull-left">
                    
                       <?php if( get_custom_logo() ){ 
                                the_custom_logo();
                        }else{
                        ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php
                            $description = get_bloginfo( 'description','display' );
                            if ( $description || is_customize_preview() ) : ?>
                                <p class="site-description"><?php echo esc_html($description); /* WPCS: xss ok. */ ?></p>
                            <?php
                            endif; 
                        }
                        ?>
                           
                    </div><!-- .site-branding -->
                        <div id="menu">
                        <div id="toggle">
                            <div class="one"></div>
                            <div class="two"></div>
                            <div class="three"></div>
                        </div>
                            <nav id="site-navigation" class="main-navigation" role="navigation">
                                    <?php if($ripple_disp_parallax_menu) : ?>
                                        <ul class="nav plx-nav menu">
                                            <span class="siteurl" url="<?php echo esc_url(home_url('/')); ?>" style="display: none;"></span>
                                            <li><a href="<?php echo esc_url(home_url()); ?>/#plx-slider-section" ><?php esc_html_e('Home', 'ripple'); ?></a></li>
                                            <?php
                                            $ripple_enabled_sections = ripple_get_parallax_sections('menu');
    
                                            foreach ($ripple_enabled_sections as $ripple_enabled_section) :
                                                ?>
                                                <?php if($ripple_enabled_section['menu_text'] != '') : ?>
                                                <li><a href="<?php echo esc_url(home_url()); ?>/#plx_<?php echo esc_attr($ripple_enabled_section['section']) ?>_section" ><?php echo esc_html($ripple_enabled_section['menu_text']); ?></a></li>
                                                <?php endif; ?>
                                                <?php
                                            endforeach;
                                            ?>
                                        </ul>
                                    <?php else : ?>
                                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'ripple'); ?></button>
                                        <?php wp_nav_menu( array ( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => 'ripple_create_nav_notice' ) ); ?>
                                    <?php endif; ?>
                            </nav><!-- #site-navigation -->
                        </div>
                </div>
            </header><!-- #masthead -->
            <?php if (is_home() || is_front_page()) : ?>
            <?php else : ?>
                <div class="header-banner">
                    <div class="container" >
                        <?php if (is_single() || is_page()) : ?>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php elseif (is_archive()) : ?>
                            <h1 class="entry-title"><?php echo esc_html(single_cat_title()); ?></h1>
                        <?php elseif (is_home()) : ?>
                            <?php
                            $ripple_blog_page_id = get_option('page_for_posts');
                            $ripple_blog_page = get_page($ripple_blog_page_id);
                            ?>
                            <h1 class="entry-title"><?php echo esc_html($ripple_blog_page->post_title); ?></h1>
                        <?php elseif (is_search()) : ?>
                            <?php /* translators: %s: search term */ ?>
                            <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'ripple'), '<span>' . get_search_query() . '</span>'); ?></h1>
                        <?php elseif (is_404()) : ?>
                            <h1 class="page-title">
                                <?php esc_html_e('404 Error!!', 'ripple'); ?>
                            </h1>
                        <?php endif; ?>
                        <?php do_action('ripple_breadcrumb'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div id="content" class="site-content">
            <?php $ripple_slider_cat = get_theme_mod('ripple_slider_category'); ?>
            <?php if($ripple_slider_cat){ ?>
                <?php if (is_front_page() || is_home()) : ?>
                        <?php do_action('ripple_slider'); ?>
                <?php endif; ?>
            <?php } ?>