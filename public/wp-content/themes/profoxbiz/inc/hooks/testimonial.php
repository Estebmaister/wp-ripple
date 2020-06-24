<?php 
if( !function_exists('profoxbiz_testimonial_category')) :
	function profoxbiz_testimonial_category( $options ){
		if( get_theme_mod( 'profoxbiz_testimonial_section_show', true) != '') {
			$profoxbiz_testimonial_title = get_theme_mod('profoxbiz_testimonial_title', 'What Our Client Say');
			$profoxbiz_testimonial_description = get_theme_mod('profoxbiz_testimonial_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
			$category_id = get_theme_mod('profoxbiz_testimonial_cat');
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
			<section class="testimonial-section block">
				<div class="container">
					<div class="row justify-content-center text-center">
						<div class="col-md-8">
							<div class="section-title">
								<h2><?php echo esc_html($profoxbiz_testimonial_title); ?></h2>
								<p class="lead"><?php echo esc_html($profoxbiz_testimonial_description); ?></p>
							</div>
						</div>
					</div>
					<div class="row justify-content-center text-center">
						<div class="col-md-8">
							<?php

							if ( $query->have_posts() ): ?>
								<div class="testimonial-lg-thumb">
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


										<div class="testimonial-lg-item">											
											<figure class="testi-avtar">
												<img src="<?php echo esc_html($url); ?>" alt="<?php the_title(); ?>">	
											</figure>

											<div class="testimonial-caption">

												<h3><?php the_title(); ?></h3>
												<?php the_content(); 
												wp_link_pages( array(
													'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'profoxbiz' ),
													'after'  => '</div>',
												) );
												?>		

												
											</div>
										</div> <!-- end / testimonial-lg-item -->
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
					<div class="row">
						<div class="col-md-12">
							<?php
							if ( $query->have_posts() ): ?>
								<div class="testimonial-sm-thumb">
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

										<div class="testimonial-sm-item">
											<img src="<?php echo esc_html($url); ?>" alt="<?php the_title(); ?>">																					
										</div> <!-- end / testimonial-sm-item -->
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
add_action('profoxbiz_testimonial_section', 'profoxbiz_testimonial_category');
