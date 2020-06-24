<?php

if (!function_exists('profoxbiz_feature_section_wrap')) :
	function profoxbiz_feature_section_wrap($options){
		if( get_theme_mod( 'profoxbiz_feature_section_show', true) != '') {
			$profoxbiz_feature_title = get_theme_mod('profoxbiz_feature_title', 'Features');
			$profoxbiz_feature_description = get_theme_mod('profoxbiz_feature_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
			?>

			<section class="feature-section block">
				<div class="container">
					<div class="row justify-content-center text-center">
						<div class="col-md-8">
							<div class="section-title">
								<h2><?php echo esc_html($profoxbiz_feature_title); ?></h2>
								<p class="lead"><?php echo esc_html($profoxbiz_feature_description); ?></p>
							</div>					
						</div>
					</div>
					<div class="row">
						<?php
						$featured_posts = array();
						$featured_icons = array();
						for ($i = 1; $i <= 6; $i++) {
							$profoxbiz_feature_icon = get_theme_mod('profoxbiz_feature_icon_' . $i, '');
							$profoxbiz_feature_post = get_theme_mod('profoxbiz_feature_post_' . $i, '');
							if( ! $profoxbiz_feature_post ) {
								continue;
							}
							$featured_posts[] = intval( $profoxbiz_feature_post );
							$featured_icons[] = $profoxbiz_feature_icon;
						}

						$args = array(
							'post_type' => 'post',
							'orderby' => 'post__in',
							'ignore_sticky_posts' => 1,
						);
						if( ! empty($featured_posts) ) :
							$args['post__in'] = $featured_posts;
						endif;
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) :
							$i = 1;
							while( $query->have_posts() ): $query->the_post();
								$icon = isset( $featured_icons[$i]) && ! empty( $featured_icons[$i] ) ? $featured_icons[$i] : 'fa-cog';
								?>
								<div class="col-sm-12 col-md-6">
									<div class="feature-box">
										<?php 

										if( get_theme_mod( 'profoxbiz_feature_icon_show') != '') {?>
										
												<span class="feature-icon">
													<i class="fa <?php echo esc_html($icon); ?>"></i>
												</span>
												<?php 
											
										}
										?>

										<div class="feature-content">
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
add_action('profoxbiz_features_section', 'profoxbiz_feature_section_wrap');