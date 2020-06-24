<?php
/**
 * Testimonial post/page widget
 *
 * @package Ripple
 */
/**
 * Adds ripple_Testimonial widget.
 */
add_action('widgets_init', 'ripple_register_progress_bar_widget');

function ripple_register_progress_bar_widget() {
    register_widget('ripple_Progress_Bar');
}

class ripple_Progress_Bar extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
                'ripple_Progress_Bar', esc_html__('Ripple : Progress Bar','ripple'), array(
            'description' => esc_html__('A widget that shows Progress bar', 'ripple')
                )
        );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        $fields = array(
            // This widget has no title
            // Other fields
            'progress_bar_percentage' => array(
                'ripple_widgets_name' => 'progress_bar_percentage',
                'ripple_widgets_title' => esc_html__('Progress Bar Percentage', 'ripple'),
                'ripple_widgets_field_type' => 'number',
            ),
            'progress_bar_title' => array(
                'ripple_widgets_name' => 'progress_bar_title',
                'ripple_widgets_title' => esc_html__('Progress Bar Title', 'ripple'),
                'ripple_widgets_field_type' => 'text',
            ),
            'progress_circle_bar' => array(
                'ripple_widgets_name' => 'progress_circle_bar',
                'ripple_widgets_title' => esc_html__('Circle Bar', 'ripple'),
                'ripple_widgets_field_type' => 'checkbox',
            ),
        );

        return $fields;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        extract($args);
        
        $ripple_bar_id = $args['widget_id'];
        $progress_bar_percentage = $instance['progress_bar_percentage'];
        $progress_bar_percentage_val = $progress_bar_percentage-5;
        $progress_bar_title = $instance['progress_bar_title'];
        $progress_circle_bar = $instance['progress_circle_bar'];
        
        echo $before_widget;
        if($progress_circle_bar){
            if($progress_bar_percentage || $progress_bar_title){
            ?>
            <div class="progre_view_1">
                <canvas id="<?php echo esc_attr($ripple_bar_id); ?>" class="<?php echo esc_attr($ripple_bar_id); ?> cloader"  data-percentage="<?php echo absint($progress_bar_percentage); ?>"></canvas>
                <?php if($progress_bar_title){ ?><div class="title-bar"><?php echo esc_html($progress_bar_title); ?></div><?php } ?>
            </div>
            <?php
            }
        }
        else{
        ?>
        <div class="pbar-container">
            <div class="pbar-title"><?php echo esc_html($progress_bar_title); ?></div>
            <div percent="<?php echo absint($progress_bar_percentage_val); ?>" id="id-<?php echo esc_attr($ripple_bar_id); ?>" class="percent-bar"><?php echo absint($progress_bar_percentage).' %'; ?></div>
            <div class="progressBar" data-label="<?php echo absint($progress_bar_percentage); ?>" id="max<?php echo absint($progress_bar_percentage); ?>" data-width="<?php echo absint($progress_bar_percentage); ?>"><div></div></div>
        </div>
            <?php
        }
        echo $after_widget;
        }

        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         *
         * @param	array	$new_instance	Values just sent to be saved.
         * @param	array	$old_instance	Previously saved values from database.
         *
         * @uses	ripple_widgets_updated_field_value()		defined in widget-fields.php
         *
         * @return	array Updated safe values to be saved.
         */
        public function update($new_instance, $old_instance) {
            $instance = $old_instance;

            $widget_fields = $this->widget_fields();

            // Loop through fields
            foreach ($widget_fields as $widget_field) {

                extract($widget_field);

                // Use helper function to get updated field values
                $instance[$ripple_widgets_name] = ripple_widgets_updated_field_value($widget_field, $new_instance[$ripple_widgets_name]);
            }

            return $instance;
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param	array $instance Previously saved values from database.
         *
         * @uses	ripple_widgets_show_widget_field()		defined in widget-fields.php
         */
        public function form($instance) {
            $widget_fields = $this->widget_fields();
            // Loop through fields
            foreach ($widget_fields as $widget_field) {

                // Make array elements available as variables
                extract($widget_field);
                $ripple_widgets_field_value = isset($instance[$ripple_widgets_name]) ? esc_attr($instance[$ripple_widgets_name]) : '';
                ripple_widgets_show_widget_field($this, $widget_field, $ripple_widgets_field_value);
            }
        }

    }
    