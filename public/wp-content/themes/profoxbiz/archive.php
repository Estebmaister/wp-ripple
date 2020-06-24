<?php
/**
* The template for displaying archive pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package profoxbiz
*/

get_header();
?>
<header class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div>
		</div>
	</div>

</header><!-- .page-header -->
<?php $archive_page_option = get_theme_mod('profoxbiz_archive_page_layout_option', 'right');
?>
<div id="primary" class="content-area container">
	<div class="row">
		<?php if($archive_page_option == 'left'): ?>
			<div class="<?php echo esc_attr( $sidebar_content ); ?>">
				<?php get_sidebar(); ?>
			</div>
			<main id="main" class="site-main <?php echo esc_attr( $main_content_class ); ?>">

				<?php if ( have_posts() ) : ?>
					<?php				
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</main>

			<!-- end / left -->
			

			<?php elseif ($archive_page_option == 'none'): ?>
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<?php if ( have_posts() ) : ?>
						<?php		
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
				<!-- end / none -->

				<?php elseif ($archive_page_option == 'right'): ?>
					<main id="main" class="site-main <?php echo esc_attr( $main_content_class ); ?>">
						<?php if ( have_posts() ) : ?>	
							<?php			
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_type() );
							endwhile;
							the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>

					</main>

					<div class="<?php echo esc_attr( $sidebar_content ); ?>">
						<?php get_sidebar(); ?>
					</div>
					<!-- end / right -->
					<?php else : ?>
						<main id="main" class="site-main <?php echo esc_attr( $main_content_class ); ?>">
							<?php if ( have_posts() ) : ?>	
								<?php			
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content', get_post_type() );
								endwhile;
								the_posts_navigation();
							else :
								get_template_part( 'template-parts/content', 'none' );
							endif;
							?>
						</main>
						
						<div class="<?php echo esc_attr( $sidebar_content ); ?>">
							<?php get_sidebar(); ?>
						</div>
						<!-- end / default right -->
					<?php endif; ?>
				</div>
			</div><!-- #primary -->

			<?php
			get_footer();
