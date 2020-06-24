<?php
/**
 *  Template Name: Front Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package profoxbiz
 */

get_header(); 
?>

	<?php
	do_action('profoxbiz_services_section');			
	do_action('profoxbiz_portfolio_section');
	do_action('profoxbiz_features_section');
	do_action('profoxbiz_team_section');
	do_action('profoxbiz_latest_post_section');
	do_action('profoxbiz_testimonial_section');
	?>

<?php
get_footer();