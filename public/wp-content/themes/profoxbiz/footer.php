<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package profoxbiz
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="inner-footer">

		<div class="container">
			     <div class="row">
                    
                    <?php if( is_active_sidebar( 'footer-one' ) ){ ?>
                    <div class="col-sm-12 col-md-4">
                        <?php dynamic_sidebar( 'footer-one' ); ?>
                    </div>
                    <?php } ?>
                    
                    <?php if( is_active_sidebar( 'footer-two' ) ){ ?>
                    <div class="col-sm-12 col-md-4">
                        <?php dynamic_sidebar( 'footer-two' ); ?>
                    </div>
                    <?php } ?>
                    
                    <?php if( is_active_sidebar( 'footer-three' ) ){ ?>
                    <div class="col-sm-12 col-md-4">
                        <?php dynamic_sidebar( 'footer-three' ); ?>
                    </div>
                    <?php } ?>
                    
                </div>
			<div class="row"> 
				<div class="col-md-12">
					<div class="site-info">

						<?php $copyright = get_theme_mod('profoxbiz_copyright') ?>
						<?php if ( $copyright ) : ?>
				<?php echo esc_html( $copyright ); ?>
			<?php endif; ?>
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'profoxbiz' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'profoxbiz' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
						<?php echo wp_kses_post( sprintf( esc_html__( 'Theme: %1$s by %2$s.', 'profoxbiz' ), 'profoxbiz', '<a href="' . esc_url( 'https://profoxstudio.com/' ) . '">Profoxstudio</a>' ) ); ?>
						
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
