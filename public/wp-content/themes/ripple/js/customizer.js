/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
    
    // Slider Overlay Direction
    wp.customize( 'slider_overlay_direction', function( value ) {
		value.bind( function( newval ) {
		  if( 'below' == newval ) {
		      $('.slider-overlay1').css({
                '-webkit-transform':'rotate(180deg)',
                '-moz-transform':'rotate(180deg)'
              });
		  }else {
		      $('.slider-overlay1').css({
                '-webkit-transform':'rotate(0deg)',
                '-moz-transform':'rotate(0deg)'
              });
		  }
		} );
	} );

    /** Background Color **/
	wp.customize( 'ripple_about_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'ripple_portfolio_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-color':newval,
		  });
		} );
	} );



	wp.customize( 'ripple_blog_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'ripple_cta_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'ripple_testimonial_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	wp.customize( 'ripple_team_section_bg_color', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-color':newval,
		  });
		} );
	} );

	/** Background Image **/
	wp.customize( 'ripple_about_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'ripple_portfolio_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	

	wp.customize( 'ripple_blog_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'ripple_cta_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'ripple_testimonial_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	wp.customize( 'ripple_team_section_bg_image', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-image':'url("'+newval+'")',
		  });
		} );
	} );

	/** Background Repeat **/
	wp.customize( 'ripple_about_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_portfolio_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );



	wp.customize( 'ripple_blog_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_cta_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_testimonial_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_team_section_bg_repeat', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-repeat': newval,
		  });
		} );
	} );

	/** Background Position **/
	wp.customize( 'ripple_about_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_portfolio_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	

	wp.customize( 'ripple_blog_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_cta_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_testimonial_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_team_section_bg_position', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-position': newval,
		  });
		} );
	} );

	/** Background Attachment **/
	wp.customize( 'ripple_about_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_portfolio_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	

	wp.customize( 'ripple_blog_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_cta_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_testimonial_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_team_section_bg_attachment', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-attachment': newval,
		  });
		} );
	} );

	/** Background Size **/
	wp.customize( 'ripple_about_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_about_section").css({
		  	'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_portfolio_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_portfolio_section").css({
	  		'background-size': newval,
		  });
		} );
	} );

	

	wp.customize( 'ripple_blog_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_blog_section").css({
	  		'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_cta_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_cta_section").css({
	  		'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_testimonial_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_testimonial_section").css({
	  		'background-size': newval,
		  });
		} );
	} );

	wp.customize( 'ripple_team_section_bg_size', function( value ) {
		value.bind( function( newval ) {
		  $("#plx_team_section").css({
	  		'background-size': newval,
		  });
		} );
	} );
    
    
    /** ======================================================================================================================
    ============================================================================================================**/
    
    
    

/** Counter Section **/
        /** Counter Section Title Color **/
    	wp.customize( 'ripple_counter_section_title_color', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_counter_section .counter-title").css({
    	  		'color':newval,
    		  });
    		} );
    	} );
        
        /** Counter Section Content Color **/
    	wp.customize( 'ripple_counter_section_content_color', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_counter_section .counter-descr").css({
    	  		'color':newval,
    		  });
    		} );
    	} );
        
        /** Counter Section Background Color **/
    	wp.customize( 'ripple_counter_section_bg_color', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_counter_section").css({
    	  		'background-color':newval,
    		  });
    		} );
    	} );
        
        /** Counter Section Background Repeat **/
    	wp.customize( 'ripple_counter_section_bg_repeat', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_counter_section").css({
    	  		'background-repeat':newval,
    		  });
    		} );
    	} );
        
        /** Counter Section Background Position **/
    	wp.customize( 'ripple_counter_section_bg_position', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_counter_section").css({
    	  		'background-position':newval,
    		  });
    		} );
    	} );
        
        /** Counter Section Background Attachment **/
    	wp.customize( 'ripple_counter_section_bg_attachment', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_counter_section").css({
    	  		'background-attachment':newval,
    		  });
    		} );
    	} );
        
        /** Counter Section Background Size **/
    	wp.customize( 'ripple_counter_section_bg_size', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_counter_section").css({
    	  		'background-size':newval,
    		  });
    		} );
    	} );
        
    /** Client Logo Section **/
        /** Client Logo Section Title Color **/
    	wp.customize( 'ripple_cl_logo_section_title_color', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_cl_logo_section .clogo-title").css({
    	  		'color':newval,
    		  });
    		} );
    	} );
        
        /** Client Logo Section Content Color **/
    	wp.customize( 'ripple_cl_logo_section_content_color', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_cl_logo_section .clogo-descr").css({
    	  		'color':newval,
    		  });
    		} );
    	} );
        
        /** Client Logo Section Background Color **/
    	wp.customize( 'ripple_cl_logo_section_bg_color', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_cl_logo_section").css({
    	  		'background-color':newval,
    		  });
    		} );
    	} );
        
        /** Client Logo Section Background Repeat **/
    	wp.customize( 'ripple_cl_logo_section_bg_repeat', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_cl_logo_section").css({
    	  		'background-repeat':newval,
    		  });
    		} );
    	} );
        
        /** Client Logo Section Background Position **/
    	wp.customize( 'ripple_cl_logo_section_bg_position', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_cl_logo_section").css({
    	  		'background-position':newval,
    		  });
    		} );
    	} );
        
        /** Client Logo Section Background Attachment **/
    	wp.customize( 'ripple_cl_logo_section_bg_attachment', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_cl_logo_section").css({
    	  		'background-attachment':newval,
    		  });
    		} );
    	} );
        
        /** Client Logo Section Background Size **/
    	wp.customize( 'ripple_cl_logo_section_bg_size', function( value ) {
    		value.bind( function( newval ) {
    		  $("#plx_cl_logo_section").css({
    	  		'background-size':newval,
    		  });
    		} );
    	} ); 
        
        wp.customize( 'ripple_feature_section_title', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_feature_section .feature-title' ).html( newval );
    		});
        });
        wp.customize( 'ripple_feature_section_descr', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_feature_section .feature-descr' ).html( newval );
    		});
        });
        wp.customize( 'ripple_progress_section_title', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_progress_section .progress-title' ).html( newval );
    		});
        });
        wp.customize( 'ripple_progress_section_descr', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_progress_section .progress-descr' ).html( newval );
    		});
        });
        wp.customize( 'ripple_portfolio_section_title', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_portfolio_section .section-title-port h2' ).html( newval );
    		});
        });
        wp.customize( 'ripple_cta_buton_text', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_cta_section .cta_read' ).html( newval );
    		});
        });
        wp.customize( 'ripple_about_section_title', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_about_section .hm-about-section-content h2' ).html( newval );
    		});
        });
        wp.customize( 'ripple_about_section_descr', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_about_section .feature-descr' ).html( newval );
    		});
        });
        wp.customize( 'ripple_testimonial_section_title', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_testimonial_section .testinomial h2' ).html( newval );
    		});
        });
        wp.customize( 'ripple_blog_section_title', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_blog_section .hm-blog-title-descr-container h2' ).html( newval );
    		});
        });
        wp.customize( 'ripple_blog_section_descr', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_blog_section .feature-descr' ).html( newval );
    		});
        });
        wp.customize( 'ripple_form_section_title', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_contact_section .title-contact-form' ).html( newval );
    		});
        });
        wp.customize( 'ripple_info_title', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_contact_section .title-info' ).html( newval );
    		});
        });
         wp.customize( 'ripple_info_desc', function( value ) {
    		value.bind( function( newval ) {
    			$( '#plx_contact_section .desc-info' ).html( newval );
    		});
        });
} )( jQuery );
