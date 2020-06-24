<?php

if (!function_exists('profoxbiz_latest_post_section_wrap')) :
	function profoxbiz_latest_post_section_wrap($options){
		if( get_theme_mod( 'profoxbiz_latest_post_section_show', true) != '') {
		$profoxbiz_latest_post_title = get_theme_mod('profoxbiz_latest_post_title', 'Our Latest Post');
		$profoxbiz_latest_post_description = get_theme_mod('profoxbiz_latest_post_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
		?>
		<section class="latest-post-section block">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-md-8">
						<div class="section-title">
						<h2><?php echo esc_html($profoxbiz_latest_post_title); ?></h2>
						<p class="lead"><?php echo esc_html($profoxbiz_latest_post_description); ?></p>
					</div>
					</div>
				</div>
				<div class="row">
					<?php 
					$latest_post = new WP_Query( array(
						'post_type'=> 'post',
						'orderby'    => 'ID',
						'post_status' => 'publish',
						'order'    => 'DESC',
						'posts_per_page' => 2,
						'ignore_sticky_posts' => 1,
					)); 
					?>

					<?php if ( $latest_post->have_posts() ) : ?>
						<?php while ( $latest_post->have_posts() ) : $latest_post->the_post(); ?>
							<div class="col-sm-12 col-md-6">
								<?php get_template_part( 'template-parts/content' ); ?>
							</div>
						<?php endwhile; 
						wp_reset_postdata();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif; ?>

				</div>
			</div>
		</section>
		<?php
	}
	}
endif;
add_action('profoxbiz_latest_post_section', 'profoxbiz_latest_post_section_wrap');

