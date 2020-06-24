<?php

/**
 * @package Ripple
 */
 
 require get_template_directory() . '/inc/ripple-faw-icons.php';
 
function ripple_widgets_show_widget_field($instance = '', $widget_field = '', $athm_field_value = '') {
    // Store Posts in array
    $ripple_postlist[0] = array(
        'value' => 0,
        'label' => esc_attr__('-- Choose --','ripple')
    );
    $arg = array('posts_per_page' => -1);
    $ripple_posts = get_posts($arg);
    foreach ($ripple_posts as $ripple_post) :
        $ripple_postlist[$ripple_post->ID] = array(
            'value' => $ripple_post->ID,
            'label' => $ripple_post->post_title
        );
    endforeach;

    extract($widget_field);

    switch ($ripple_widgets_field_type) {

        // Standard text field
        case 'text' :
            ?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>"><?php echo $ripple_widgets_title; ?>:</label>
                <input class="widefat" id="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>" name="<?php echo esc_attr($instance->get_field_name($ripple_widgets_name)); ?>" type="text" value="<?php echo esc_attr($athm_field_value); ?>" />

                <?php if (isset($ripple_widgets_description)) { ?>
                    <br />
                    <small><?php echo $ripple_widgets_description; ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        // Standard url field
        case 'url' :
            ?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>"><?php echo $ripple_widgets_title; ?>:</label>
                <input class="widefat" id="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>" name="<?php echo esc_attr($instance->get_field_name($ripple_widgets_name)); ?>" type="text" value="<?php echo esc_attr($athm_field_value); ?>" />

                <?php if (isset($ripple_widgets_description)) { ?>
                    <br />
                    <small><?php echo $ripple_widgets_description; ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        // Textarea field
        case 'textarea' :
            ?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>"><?php echo $ripple_widgets_title; ?>:</label>
                <textarea class="widefat" rows="<?php echo esc_attr($ripple_widgets_row); ?>" id="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>" name="<?php echo esc_attr($instance->get_field_name($ripple_widgets_name)); ?>"><?php echo wp_kses_post($athm_field_value); ?></textarea>
            </p>
            <?php
            break;

        // Checkbox field
        case 'checkbox' :
            ?>
            <p>
                <input id="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>" name="<?php echo esc_attr($instance->get_field_name($ripple_widgets_name)); ?>" type="checkbox" value="1" <?php checked('1', $athm_field_value); ?>/>
                <label for="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>"><?php echo $ripple_widgets_title; ?></label>

                <?php if (isset($ripple_widgets_description)) { ?>
                    <br />
                    <small><?php echo $ripple_widgets_description; ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        // Radio fields
        case 'radio' :
            ?>
            <p>
                <?php
                echo $ripple_widgets_title;
                echo '<br />';
                foreach ($ripple_widgets_field_options as $athm_option_name => $athm_option_title) {
                    ?>
                    <input id="<?php echo esc_attr($instance->get_field_id($athm_option_name)); ?>" name="<?php echo esc_attr($instance->get_field_name($ripple_widgets_name)); ?>" type="radio" value="<?php echo esc_attr($athm_option_name); ?>" <?php checked($athm_option_name, $athm_field_value); ?> />
                    <label for="<?php echo esc_attr($instance->get_field_id($athm_option_name)); ?>"><?php echo $athm_option_title; ?></label>
                    <br />
                <?php } ?>

                <?php if (isset($ripple_widgets_description)) { ?>
                    <small><?php echo $ripple_widgets_description; ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        // Select field
        case 'select' :
            ?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>"><?php echo $ripple_widgets_title; ?>:</label>
                <select name="<?php echo esc_attr($instance->get_field_name($ripple_widgets_name)); ?>" id="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>" class="widefat">
                    <?php foreach ($ripple_widgets_field_options as $athm_option_name => $athm_option_title) { ?>
                        <option value="<?php echo $athm_option_name; ?>" id="<?php echo $instance->get_field_id($athm_option_name); ?>" <?php selected($athm_option_name, $athm_field_value); ?>><?php echo $athm_option_title; ?></option>
                    <?php } ?>
                </select>

                <?php if (isset($ripple_widgets_description)) { ?>
                    <br />
                    <small><?php echo $ripple_widgets_description; ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        case 'number' :
            ?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>"><?php echo $ripple_widgets_title; ?>:</label><br />
                <input name="<?php echo esc_attr($instance->get_field_name($ripple_widgets_name)); ?>" type="number" step="1" min="1" id="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>" value="<?php echo esc_attr($athm_field_value); ?>" class="small-text" />

                <?php if (isset($ripple_widgets_description)) { ?>
                    <br />
                    <small><?php echo $ripple_widgets_description; ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        // Select field
        case 'selectpost' :
            ?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>"><?php echo $ripple_widgets_title; ?>:</label>
                <select name="<?php echo esc_attr($instance->get_field_name($ripple_widgets_name)); ?>" id="<?php echo esc_attr($instance->get_field_id($ripple_widgets_name)); ?>" class="widefat">
                    <?php foreach ($ripple_postlist as $ripple_single_post) { ?>
                        <option value="<?php echo esc_attr($ripple_single_post['value']); ?>" id="<?php echo esc_attr($instance->get_field_id($ripple_single_post['label'])); ?>" <?php selected($ripple_single_post['value'], $athm_field_value); ?>><?php echo $ripple_single_post['label']; ?></option>
                    <?php } ?>
                </select>

                <?php if (isset($ripple_widgets_description)) { ?>
                    <br />
                    <small><?php echo $ripple_widgets_description; ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        case 'upload' :

            $output = '';
            $id = $instance->get_field_id($ripple_widgets_name);
            $class = '';
            $int = '';
            $value = $athm_field_value;
            $name = $instance->get_field_name($ripple_widgets_name);


            if ($value) {
                $class = ' has-file';
                $value = explode('wp-content',$value);
                $value = content_url().$value[1];
            }
            $output .= '<div class="sub-option widget-upload">';
            $output .= '<label for="' . $instance->get_field_id($ripple_widgets_name) . '">' . $ripple_widgets_title . '</label><br/>';
            $output .= '<input id="' . $id . '" class="upload' . $class . '" type="text" name="' . $name . '" value="' . $value . '" placeholder="' . esc_attr__('No file chosen', 'ripple') . '" />' . "\n";
            if (function_exists('wp_enqueue_media')) {
                if (( $value == '')) {
                    $output .= '<input id="upload-' . $id . '" class="upload-button button" type="button" value="' . esc_attr__('Upload', 'ripple') . '" />' . "\n";
                } else {
                    $output .= '<input id="remove-' . $id . '" class="remove-file button" type="button" value="' . esc_attr__('Remove', 'ripple') . '" />' . "\n";
                }
            } else {
                $output .= '<p><i>' . esc_attr__('Upgrade your version of WordPress for full media support.', 'ripple') . '</i></p>';
            }

            $output .= '<div class="screenshot team-thumb" id="' . $id . '-image">' . "\n";

            if ($value != '') {
                $remove = '<a class="remove-image">'. esc_attr__('Remove', 'ripple').'</a>';
                $attachment_id = attachment_url_to_postid($value);
                $image_array = wp_get_attachment_image_src($attachment_id, 'medium');
                $image = preg_match('/(^.*\.jpg|jpeg|png|gif|ico*)/i', $value);
                if ($image) {
                    $output .= '<img style="width: 275px; height: auto" src="' . $image_array[0] . '" alt="" />' . $remove;
                } else {
                    $parts = explode("/", $value);
                    for ($i = 0; $i < sizeof($parts); ++$i) {
                        $title = $parts[$i];
                    }

                    // No output preview if it's not an image.
                    $output .= '';

                    // Standard generic output if it's not an image.
                    $title = esc_attr__('View File', 'ripple');
                    $output .= '<div class="no-image"><span class="file_link"><a href="' . $value . '" target="_blank" rel="external">' . $title . '</a></span></div>';
                }
            }
            $output .= '</div></div>' . "\n";
            echo $output;
            break;

        case 'icon' :
            add_thickbox();
            ?>
            <p>
                <label for="<?php echo $instance->get_field_id($ripple_widgets_name); ?>"><?php echo $ripple_widgets_title; ?>:</label><br />
                <span class="icon-receiver"><i class="<?php echo $athm_field_value; ?>"></i></span>
                <input class="hidden-icon-input" name="<?php echo $instance->get_field_name($ripple_widgets_name); ?>" type="hidden" id="<?php echo $instance->get_field_id($ripple_widgets_name); ?>" value="<?php echo $athm_field_value; ?>" />

                <?php if (isset($ripple_widgets_description)) { ?>
                    <br />
                    <small><?php echo $ripple_widgets_description; ?></small>
                <?php } ?>
            </p>

            <div id="ap-font-awesome-list">
                <ul class="ap-font-group">
                    <?php
                        global $ripple_fawss;
                    ?>
                    <?php foreach($ripple_fawss as $faw) : ?>
                        <li><i class="fa <?php echo $faw; ?>"></i></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <?php
            break;
    }
}

function ripple_widgets_updated_field_value($widget_field, $new_field_value) {

    extract($widget_field);

    // Allow only integers in number fields
    if ($ripple_widgets_field_type == 'number') {
        return absint($new_field_value);

        // Allow some tags in textareas
    } elseif ($ripple_widgets_field_type == 'textarea') {
        
        return wp_kses_post($new_field_value);

        // No allowed tags for all other fields
    } elseif ($ripple_widgets_field_type == 'url') {
        return esc_url_raw($new_field_value);
    } else {
        return sanitize_text_field($new_field_value);
    }
}


