<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package profoxbiz
*/

get_header();
?>

<?php $single_page_option = get_theme_mod('profoxbiz_single_page_layout_option', 'right');
?>
<?php
if ( is_singular() ) :
	?>

	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
			</div>
		</div>

	</div>
	<?php 
endif;
?>
<div id="primary" class="content-area container">
	<div class="row">
		<?php if( $single_page_option == 'left'): ?>
			<div class="<?php echo esc_attr( $sidebar_content ); ?>">
				<?php get_sidebar(); ?>
			</div>		
			<main id="main" class="site-main <?php echo esc_attr( $main_content_class ); ?>">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
					the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
				endif;
						endwhile; // End of the loop.
						?>	
					</main>

					<!-- end / left -->

					<?php elseif ( $single_page_option == 'right'): ?>	
						<main id="main" class="site-main <?php echo esc_attr( $main_content_class ); ?>">
							<?php
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_type() );
								the_post_navigation();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;
						endwhile; // End of the loop.
						?>	
					</main><!-- #main -->

					<div class="<?php echo esc_attr( $sidebar_content ); ?>">
						<?php get_sidebar(); ?>
					</div>	

					<!-- end / right -->

					<?php elseif ( $single_page_option == 'none'): ?>
						<div class="col-md-12">				
							<?php
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_type() );
								the_post_navigation();
							// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;
						endwhile; // End of the loop.
						?>	
					</div>	
					 <!-- end / none -->

					<?php else : ?>	
						<main id="main" class="site-main <?php echo esc_attr( $main_content_class ); ?>">
							<?php
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_type() );
								the_post_navigation();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;
						endwhile; // End of the loop.
						?>	
					</main><!-- #main -->

					<div class="<?php echo esc_attr( $sidebar_content ); ?>">
						<?php get_sidebar(); ?>
					</div>	

					<!-- end / default right -->
				<?php endif; ?>









			</div>
		</div><!-- #primary -->

		<?php
		get_footer();
