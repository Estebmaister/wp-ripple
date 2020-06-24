<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package profoxbiz
 */

?>


<?php
$profoxbiz_blog_post_date_show = get_theme_mod('profoxbiz_blog_post_date_show', true);
$profoxbiz_blog_post_author_show = get_theme_mod('profoxbiz_blog_post_author_show', true);
$profoxbiz_blog_post_thumbnail_show = get_theme_mod('profoxbiz_blog_post_thumbnail_show', true);
$profoxbiz_blog_post_category_show = get_theme_mod('profoxbiz_blog_post_category_show', true);
$profoxbiz_blog_post_tag_show = get_theme_mod('profoxbiz_blog_post_tag_show', true);
$profoxbiz_blog_post_comment_show = get_theme_mod('profoxbiz_blog_post_comment_show', true);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php 
		if( $profoxbiz_blog_post_date_show != '' || $profoxbiz_blog_post_author_show != '' ) :
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php
					if ( $profoxbiz_blog_post_date_show != '' ) :	
						profoxbiz_posted_on();
					endif;
					if ( $profoxbiz_blog_post_author_show != '') :	
						profoxbiz_posted_by();
					endif;
					?>
				</div><!-- .entry-meta -->
				<?php 
			endif;
		endif; ?>
	</header><!-- .entry-header -->

	<?php 
	if ( ! $profoxbiz_blog_post_thumbnail_show ) :
		profoxbiz_post_thumbnail(); 
	endif;
	?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php profoxbiz_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
