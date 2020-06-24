<?php 
if( !function_exists('profoxbiz_portfolio_category')) :
	function profoxbiz_portfolio_category( $options ){
		if( get_theme_mod( 'profoxbiz_portfolio_section_show', true) != '') {
			$profoxbiz_portfolio_title = get_theme_mod('profoxbiz_portfolio_title', 'Our Portfolio');
			$profoxbiz_portfolio_description = get_theme_mod('profoxbiz_portfolio_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
			$category_id = get_theme_mod('profoxbiz_portfolio_cat');
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
			<section class="portfolio-section block">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5">
							<?php

							if ( $query->have_posts() ): ?>
								<div class="portfolio-lg-thumb">
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


										<div class="portfolio-lg-item" style="background-image: url('<?php echo esc_html($url); ?>')">				
											

											<div class="portfolio-lg-caption">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>		
												<?php the_excerpt(); ?>
												<a href="<?php the_permalink(); ?>" title="<?php echo esc_html(get_theme_mod('profoxbiz_portfolio_button',__('Read More','profoxbiz'))); ?>" class="btn btn-primary">
													<?php echo esc_html(get_theme_mod('profoxbiz_portfolio_button',__('Read More','profoxbiz')));?>					
												</a>
												
											</div>
											
										</div> <!-- end / portfolio-lg-item -->
										<?php
									endwhile;
									?>
								</div>
								<?php
							endif; 
							wp_reset_postdata() ;
							?>
						</div>
						<div class="col-md-7">
							<div class="section-title">
								<h2><?php echo esc_html($profoxbiz_portfolio_title); ?></h2>
								<p class="lead"><?php echo esc_html($profoxbiz_portfolio_description); ?></p>
							</div>
							<?php

							if ( $query->have_posts() ): ?>


								<div class="portfolio-sm-thumb">
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

										<div class="portfolio-sm-item" style="background-image: url('<?php echo esc_html($url); ?>')">																					
										</div> <!-- end / portfolio-sm-item -->
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
add_action('profoxbiz_portfolio_section', 'profoxbiz_portfolio_category');
