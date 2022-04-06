<?php
/* Plugin Name: Custom Field
Plugin URI: 
Description: Ok
Version 1.0
Author: Me
*/

/**
 * Register meta boxes.
 */
function add_metabox(){
    add_meta_box(
        'metabox', 'Hello Custom Field', 'add_metabox_render', 'post', 'side'
    );
}

add_action('add_meta_boxes', 'add_metabox');

function add_metabox_render() {
    $checked = get_post_meta(get_the_ID(), 'metabox', true) ? 'checked' : null;
    // include plugin_dir_path( __FILE__ ) . '../../themes/wphetic/form.php';
   ?> 
   <input type="checkbox" value="true" name="metabox" class="metabox" <?php $checked; ?>>
<label for="x">X</label>
<?php }

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function save_metabox( $post_id ) {
    if($_POST['metabox'] === true) {
        update_post_meta($post_id, 'metabox', 'true');
    } else {
        delete_post_meta($post_id, 'metabox');
    }
}
add_action( 'save_post', 'save_metabox' );
?>

