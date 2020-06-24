<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package profoxbiz
 */

get_header();
?>
<header class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'profoxbiz' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</div>
		</div>
	</div>				
</header><!-- .page-header -->
<section id="primary" class="content-area container">
	<div class="row">
		
			<main id="main" class="site-main <?php echo esc_attr( $main_content_class ); ?>">
				<?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</main><!-- #main -->

<div class="<?php echo esc_attr( $sidebar_content ); ?>">
	<?php get_sidebar(); ?>

</div>
</div>
</section><!-- #primary -->

<?php
get_footer();