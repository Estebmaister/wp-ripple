<?php
/**
 * Ripple Theme Customizer
 *
 * @package Ripple
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ripple_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_section( 'title_tagline' )->panel = 'ripple_general_panel';  
    $wp_customize->get_section( 'background_image' )->panel = 'ripple_general_panel';
    $wp_customize->get_section( 'header_image' )->panel = 'ripple_general_panel';  
    $wp_customize->get_section( 'colors' )->panel = 'ripple_general_panel';

    /**
     * Pro customizer section.
     *
     * @since  1.0.0
     * @access public
     */
    class Ripple_Customize_Section_Pro extends WP_Customize_Section {

        /**
         * The type of customize section being rendered.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $type = 'ripple-pro';

        /**
         * Custom button text to output.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $title1 = '';
        public $pro_text1 = '';

        /**
         * Custom pro button URL.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $pro_url1 = '';

        /**
         * Add custom parameters to pass to the JS via JSON.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        public function json() {
            $json = parent::json();
            $json['title1'] = $this->title1;
            $json['pro_text1'] = $this->pro_text1;
            $json['pro_url1']  = $this->pro_url1;
            return $json;
        }

        /**
         * Outputs the Underscore.js template.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        protected function render_template() { ?>

            <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
                <h3 class="accordion-section-title">
                    {{ data.title1 }}
                    <# if ( data.pro_text1 && data.pro_url1 ) { #>
                        <a href="{{ data.pro_url1 }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text1 }}</a>
                    <# } #>
                </h3>
            </li>
        <?php }
    }

    /** Ripple Free Vs Pro **/
	$wp_customize->register_section_type( 'Ripple_Customize_Section_Pro' );
	$wp_customize->add_section(
	    new Ripple_Customize_Section_Pro(
	        $wp_customize,
	        'ripple-pro',
	        array(
	            'title1'    => esc_html__( 'Free vs Pro', 'ripple' ),
	            'pro_text1' => esc_html__( 'Compare','ripple' ),
	            'pro_url1'  => admin_url('themes.php?page=ripple-welcome&section=free_vs_pro'),
	            'priority' => 0,
	        )
	    )
	);
}
add_action( 'customize_register', 'ripple_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ripple_customize_preview_js() {
	wp_enqueue_script( 'ripple_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'ripple_customize_preview_js' );