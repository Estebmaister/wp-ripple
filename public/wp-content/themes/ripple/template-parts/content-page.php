<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Ripple
 */
    $ripple_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'blog_image_large');
    $ripple_img_src = $ripple_img[0];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if(has_post_thumbnail()) : ?>
        <figure class="page-thumbnail">
            <img src="<?php echo esc_url($ripple_img_src); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
        </figure>
    <?php endif; ?>
    
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ripple' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'ripple' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

