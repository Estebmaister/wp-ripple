<?php 
if( !function_exists('profoxbiz_team_category')) :
	function profoxbiz_team_category( $options ){
		if( get_theme_mod( 'profoxbiz_team_section_show', true) != '') {

			$profoxbiz_team_title = get_theme_mod('profoxbiz_team_title', 'Meet Our Team');
			$profoxbiz_team_description = get_theme_mod('profoxbiz_team_description', 'Vehicula nostrud feugiat dis lobortis sapiente ullam');
			$category_id = get_theme_mod('profoxbiz_team_cat');
			$args = array(
				'post_type' => 'post',
			);
				if ( ! empty( $category_id ) ) {
				$args['tax_query'] = array(
					array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => $category_id,
						'ignore_sticky_posts' => 1,
					),
				);
			}
			$query = new WP_Query($args);
			?>
			<section class="team-section block">
				<div class="container">
					<div class="row justify-content-center text-center">
						<div class="col-md-8">
							<div class="section-title">
							<h2><?php echo esc_html($profoxbiz_team_title); ?></h2>
							<p class="lead"><?php echo esc_html($profoxbiz_team_description); ?></p>
						</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">				
						
						<div class="col-md-12">
							<?php

							if ( $query->have_posts() ): ?>


								<div class="team">
									<?php while($query -> have_posts()) : $query -> the_post(); ?>	
										<?php
										$post_image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
										$post_default_image_url = esc_url( get_template_directory_uri() ).'/assets/img/default-no-post-thumb.jpg'; 
										?>

										<?php if ( has_post_thumbnail() ) {
											$url = $post_image_url;

										} else { 
											$url = $post_default_image_url;
										} ?>

										<div class="team-item" style="background-image: url('<?php echo esc_html($url); ?>')">	
											<div class="team-caption">
												<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>		
											</div>																				
										</div> <!-- end / team-item -->
										<?php
									endwhile;
									?>
								</div>
								<?php
							endif; 
							wp_reset_postdata() ;
							?>
						</div>					
					</div>
				</div>
			</section>
			<?php
		}
	}
endif;
add_action('profoxbiz_team_section', 'profoxbiz_team_category');
