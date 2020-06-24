<?php
/**
Ripple Contact Info
*/

add_action('widgets_init', 'ripple_contact_details');
    
function ripple_contact_details(){
    register_widget('ripple_contact_info_widget');
}

   /**
   * 
   */
   class ripple_Contact_Info_Widget extends WP_Widget
   {
   			public function __construct()
		   	{
			   		parent::__construct(
	                'ripple_contact_details',
	                esc_html__('Ripple: Contact Information', 'ripple'),
	                array(
	                    'description' => __('A widget that shows contact information', 'ripple')
	                )
	           	 );
		   	}

		   	private function widget_fields() 
		   	{
		   		$fields = array(
		   			'gmap_contact_title' => array(
                    'ripple_widgets_name' => 'gmap_contact_title',
                    'ripple_widgets_title' => __('Title', 'ripple'),
                    'ripple_widgets_field_type' => 'text',
                ),
            'gmap_contact_info' => array(
                    'ripple_widgets_name' => 'gmap_contact_info',
                    'ripple_widgets_title' => __('Info', 'ripple'),
                    'ripple_widgets_field_type' => 'text',
                ),
            'gmap_support' => array(
            'ripple_widgets_name' => 'gmap_support',
            'ripple_widgets_title' => __(' Live Support', 'ripple'),
            'ripple_widgets_field_type' => 'text',
              ),

            'gmap_phone' => array(
            'ripple_widgets_name' => 'gmap_phone',
            'ripple_widgets_title' => __('Helpline', 'ripple'),
            'ripple_widgets_field_type' => 'text',
              
              ),

            'gmap_contact_email' => array(
            'ripple_widgets_name' => 'gmap_contact_email',
            'ripple_widgets_title' => __('Email Address', 'ripple'),
            'ripple_widgets_field_type' => 'text',
               ),

           'gmap_location' => array(
            'ripple_widgets_name' => 'gmap_location',
            'ripple_widgets_title' => __('HeadOffice Address', 'ripple'),
            'ripple_widgets_field_type' => 'text',
               ),

          'twitter' => array(
                'ripple_widgets_name' => 'twitter',
                'ripple_widgets_title' => esc_html__('Twitter', 'ripple'),
                'ripple_widgets_field_type' => 'text',
            ),

          'facebook' => array(
                'ripple_widgets_name' => 'facebook',
                'ripple_widgets_title' => esc_html__('Facebook', 'ripple'),
                'ripple_widgets_field_type' => 'text',
            ),

          'instagram' => array(
            'ripple_widgets_name' => 'instagram',
            'ripple_widgets_title' => esc_html__('Instagram', 'ripple'),
            'ripple_widgets_field_type' => 'text',
        ),
          'behance' => array(
            'ripple_widgets_name' => 'behance',
            'ripple_widgets_title' => esc_html__('Behance', 'ripple'),
            'ripple_widgets_field_type' => 'text',
        ),
        );



		   		return $fields;
		   	}	

        /**
   * Front-end display of widget.
   *
   */

    public function widget($args, $instance) 
    {
              extract($args);
          if($instance!=null){   

              $gmap_contact_title = isset($instance['gmap_contact_title']) ? $instance['gmap_contact_title'] : '';
              $gmap_contact_info = isset($instance['gmap_contact_info']) ? $instance['gmap_contact_info'] : '';
              $gmap_support = isset($instance['gmap_support']) ? $instance['gmap_support'] : '';
              $gmap_phone = isset($instance['gmap_phone']) ? $instance['gmap_phone'] : '';
              $gmap_contact_email = isset($instance['gmap_contact_email']) ? $instance['gmap_contact_email'] : '';
              $gmap_location = isset($instance['gmap_location']) ? $instance['gmap_location'] : '';


               echo $before_widget;
               ?>
               <div class = "agensy-contact-info-warp">
                
                <?php 
               //Show title
              if(!empty($gmap_contact_title)){
                   echo $before_title . '<span>'. $gmap_contact_title. '</span>' . $after_title;
              }
              if( $gmap_phone || $gmap_contact_email || $gmap_location || $gmap_contact_info || $gmap_support){ ?>
                <div class="agensy-contact-info">
                  <div class="contact_info">
                    <span>
                    <?php echo esc_attr($gmap_contact_info); ?>
                    </span>
                  </div>

                  <div class="contact_address">
                      <?php _e('Headoffice Address:','ripple'); ?>
                      <span>
                        <?php echo esc_attr($gmap_location); ?>
                      </span>
                  </div>

                  <div class="contact_helpline">
                      <?php _e('Helpline:','ripple'); ?>
                      <span>
                        <?php echo esc_html($gmap_phone); ?>
                      </span>
                  </div>

                  <div class="contact_live_support">
                      <?php _e('Live Support :','ripple'); ?>
                      <span>
                        <?php echo esc_attr($gmap_support); ?>
                      </span>
                  </div>

                  <div class="contact_web">
                      <?php _e('Email Address:','ripple'); ?>
                      <span>
                        <?php echo esc_attr($gmap_contact_email); ?>
                      </span>
                  </div>
                </div>
          <?php } ?>
        </div>
        <?php 
         echo '<ul class="clearfix widget-social-icons">';
        // Loop through fields
        $widget_fields = $this->widget_fields();
        //var_dump($widget_fields);
        unset($widget_fields['widget_title']);
        unset($widget_fields['gmap_contact_title']);
        unset($widget_fields['gmap_contact_info']);
        unset($widget_fields['gmap_support']);
        unset($widget_fields['gmap_phone']);
        unset($widget_fields['gmap_contact_email']);
        unset($widget_fields['gmap_location']);
        

        foreach ($widget_fields as $widget_field) {
            // Make array elements available as variables
            extract($widget_field);
            // Check if field has value and skip title field
            unset($ripple_widgets_field_value);
            if (isset($instance[$ripple_widgets_name]) && 'widget_title' != $ripple_widgets_name) {
                $ripple_widgets_field_value = esc_attr($instance[$ripple_widgets_name]);
                if ('' != $ripple_widgets_field_value) {
                    ?>
                    <li>
                        <a href="<?php echo $ripple_widgets_field_value; ?>" target="_blank">
                            <i class="fa fa-<?php echo $ripple_widgets_name; ?>"></i>
                            <!-- <span class="icon-tooltip">
                                <?php //echo esc_attr($agensy_pro_widgets_title);?>
                            </span> -->
                        </a>
                    </li>
                    <?php
                }
            }
        }
        echo '</ul>';
       echo $after_widget;
      }
    }


    public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    $widget_fields = $this->widget_fields();

    // Loop through fields
    foreach( $widget_fields as $widget_field ) {

      extract( $widget_field );
  
      // Use helper function to get updated field values
      $instance[$ripple_widgets_name] = ripple_widgets_updated_field_value( $widget_field, $new_instance[$ripple_widgets_name] );
      
    }
        
    return $instance;
  }



  public function form( $instance ) {
    $widget_fields = $this->widget_fields();

    // Loop through fields
    foreach( $widget_fields as $widget_field ) {
      // Make array elements available as variables 
      extract( $widget_field );
      $ripple_widgets_field_value = isset( $instance[$ripple_widgets_name] ) ? esc_attr( $instance[$ripple_widgets_name] ) : '';
      ripple_widgets_show_widget_field( $this, $widget_field, $ripple_widgets_field_value );
    } 
  }
   }