<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package profoxbiz
 */

get_header();
?>

<div id="primary" class="content-area container">
	<div class="row justify-content-center text-center">
		

			<main id="main" class="site-main <?php echo esc_attr( $main_content_class ); ?>">

				<section class="error-404 not-found">
					<h1 class="page-title"><?php esc_html_e( '404', 'profoxbiz' ); ?></h1>
					
						<p class="lead"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'profoxbiz' ); ?></p>
				

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'profoxbiz' ); ?></p>

						<?php
						get_search_form();					
						?>		

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->

	</div>
</div><!-- #primary -->

<?php
get_footer();
