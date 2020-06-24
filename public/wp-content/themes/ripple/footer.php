<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Ripple
 */
?>
</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
    
   
    <div class="footer-bottom"> 
        <div class="container">
        <div class="site-info clearfix">
            <?php $ripple_footer_text = get_theme_mod('ripple_footer_copy_right_text'); ?>
            <span class="footer_text">
	            <span class="text_input">
	            	<?php if($ripple_footer_text){echo wp_kses_post($ripple_footer_text);} ?>
	            </span> 
	            <span class="sep"> | </span> 
	            <?php esc_html_e('WordPress','ripple'); ?>, 
	            <a target="_blank" href="<?php echo esc_url('http://teban.co.ve'); ?>">
	            	<?php esc_html_e('Estebmaister','ripple'); ?>
	            </a> 
	            <?php esc_html_e('with','ripple');?> 
	            <?php esc_html_e('Ripple','ripple');?>
                <?php do_action('ripple_after_footer'); ?>
            </span>
            <?php if(is_active_sidebar('ripple-footer-bottom')) : ?>
                <?php dynamic_sidebar('ripple-footer-bottom'); ?>
            <?php endif; ?>
    	</div><!-- .site-info -->
    	</div>
    </div>
    <a href="#" class="back-to-top" style="display: inline;">
        <i class="fa fa-angle-double-up"></i>
    </a>
    
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
