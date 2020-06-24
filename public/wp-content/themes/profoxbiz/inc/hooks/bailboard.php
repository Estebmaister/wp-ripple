<?php 
if( !function_exists('profoxbiz_bailboard_slider_category')) :
	function profoxbiz_bailboard_slider_category( $options ){
		if( get_theme_mod( 'profoxbiz_bailboard_section_show', true) != '') {
			$category_id = get_theme_mod('profoxbiz_slider_cat');
			$args = array(
				'post_type' => 'post',
			);
			if ( ! empty( $category_id ) ) {
				$args['tax_query'] = array(
					array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => $category_id,
					),
					);
			}

			$query = new WP_Query($args);

			if ( $query->have_posts() ): ?>
				<div class="bailboard">
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


						<div class="bailboard-item" style="background-image: url('<?php echo esc_html($url); ?>')">				
							<div class="bailboard-content">	
								<?php
								$content = get_theme_mod( 'profoxbiz_slider_content_align', 'content_left' );						
								if($content == 'content_left'){
									$content_align = 'justify-content-start text-left';
								}elseif ($content == 'content_center') {
									$content_align = 'justify-content-center text-center';
								}elseif ($content == 'content_right') {
									$content_align = 'justify-content-end text-right';
								}
								?>

								<div class="bailboard-caption">
									<div class="container">
										<div class="row <?php echo esc_html($content_align); ?>">
											<div class="col-md-6">
													<h1><?php the_title(); ?></h1>	
										<?php the_excerpt(); ?>
										
										<a href="<?php the_permalink(); ?>" title="<?php echo esc_html(get_theme_mod('profoxbiz_bailboard_button',__('Read More','profoxbiz'))); ?>" class="btn btn-primary">
											<?php echo esc_html(get_theme_mod('profoxbiz_bailboard_button',__('Read More','profoxbiz')));?>					
										</a>	
											</div>
										</div>
									
									</div>	
								</div>
							</div>				
						</div> <!-- end / bailboard-item -->
						<?php
					endwhile;
					?>
				</div>
				<?php
			endif; 
			wp_reset_postdata() ;
			?>
			<?php
		}
	}
endif;
add_action('profoxbiz_bailboard_slider_cat', 'profoxbiz_bailboard_slider_category');