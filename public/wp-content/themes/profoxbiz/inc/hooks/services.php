<?php

if (!function_exists('profoxbiz_services_section_wrap')) :
	function profoxbiz_services_section_wrap($options){
		if( get_theme_mod( 'profoxbiz_services_section_show', true) != '') {
			$profoxbiz_service_title = get_theme_mod('profoxbiz_service_title', 'Our Services');
			$profoxbiz_service_description = get_theme_mod('profoxbiz_service_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
			?>

			<section class="services-section block">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="section-title">
								<h2><?php echo esc_html($profoxbiz_service_title); ?></h2>
								<p class="lead"><?php echo esc_html($profoxbiz_service_description); ?></p>
							</div>
						</div>
					</div>
					<div class="row">
						<?php
						$service_posts = array();
						$service_icons = array();
						for ($i = 1; $i <= 3; $i++) {
							$profoxbiz_service_icon = get_theme_mod('profoxbiz_service_icon_' . $i, '');
							$profoxbiz_service_post = get_theme_mod('profoxbiz_service_post_' . $i, '');
							if( ! $profoxbiz_service_post ) {
								continue;
							}
							$service_posts[] = intval( $profoxbiz_service_post );
							$service_icons[] = $profoxbiz_service_icon;	
						}
						$args = array(
							'post_type' => 'post',
							'orderby' => 'post__in',
							'ignore_sticky_posts' => 1,

						);
						
						if( ! empty($service_posts) ) :
							$args['post__in'] = $service_posts;
						endif;
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) :
							$i = 1;
							while( $query->have_posts() ): $query->the_post();
								$icon = isset( $service_icons[$i]) && ! empty( $service_icons[$i] ) ? $service_icons[$i] : 'fa-cog';


								?>

								<div class="col-sm-12 col-md-4">
									<div class="service-box">
										<?php 
										if( get_theme_mod( 'profoxbiz_services_icon_show') != '') { 
											?>
											<span class="service-icon">
												<i class="fa <?php echo esc_html($icon); ?>"></i>
											</span>
											<?php
										}

										?>
										<div class="service-content">
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>					

										</div>
									</div>
								</div>
								<?php
								$i++;
							endwhile;

						endif;

						wp_reset_postdata();
						?>
					</div>
				</div>
			</section>
			<?php
		}
	}
endif;
add_action('profoxbiz_services_section', 'profoxbiz_services_section_wrap');