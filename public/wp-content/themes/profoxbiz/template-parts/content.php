<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package profoxbiz
 */

?>

<?php
$profoxbiz_blog_post_date_show = get_theme_mod('profoxbiz_blog_post_date_show', true);
$profoxbiz_blog_post_author_show = get_theme_mod('profoxbiz_blog_post_author_show', true);
$profoxbiz_blog_post_excerpt_show = get_theme_mod('profoxbiz_blog_post_excerpt_show', true);
$profoxbiz_blog_post_thumbnail_show = get_theme_mod('profoxbiz_blog_post_thumbnail_show', true);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if($profoxbiz_blog_post_thumbnail_show != '') :
		if($profoxbiz_blog_post_thumbnail_show != '') :
			if ( has_post_thumbnail() ):				
				profoxbiz_post_thumbnail();
				else : ?>
					<a href="<?php the_permalink(); ?>" class="post-thumbnail"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-no-post-thumb.jpg" alt="<?php the_title(); ?>" /></a>
					<?php 
				endif;
			endif;
		endif;
		?>
		<div class="post-content">
			<header class="entry-header">
				<?php
				if ( is_singular() && ! is_front_page() ) :					
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php 
				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						if($profoxbiz_blog_post_date_show != '' || $profoxbiz_blog_post_author_show != '') :
							if ($profoxbiz_blog_post_date_show != '') :
								profoxbiz_posted_on();
							endif;
							if ($profoxbiz_blog_post_author_show != '') :
								profoxbiz_posted_by();
							endif;
						endif;
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				<?php
			if ( is_archive() || is_home() || is_front_page() ) { // Makes EVERY Post on an index page an excerpt
				if ($profoxbiz_blog_post_excerpt_show != '') :
					if ($profoxbiz_blog_post_excerpt_show != '') :
						the_excerpt();			
					endif;
				endif;
			} else {
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'profoxbiz' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'profoxbiz' ),
					'after'  => '</div>',
				) );
			}
			?>
			<footer class="entry-footer">
				<?php profoxbiz_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
