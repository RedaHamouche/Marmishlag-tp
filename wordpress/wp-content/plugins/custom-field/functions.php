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
        'meta-1', __( 'Hello Custom Field', 'metabox' ), 'add_metabox_render', 'post', 'side'
    );
}

add_action('add_meta_boxes', 'add_metabox');

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function add_metabox_render($post) {
    include plugin_dir_path( __FILE__ ) . '../../themes/wphetic/form.php';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function save_metabox( $post_id ) {
    if($_POST['x'] === true) {
        update_post_meta($post_id, 'metabox', 'true');
    } else {
        delete_post_meta($post_id, 'metabox');
    }
}
add_action( 'save_post', 'save_metabox' );

// get_post_meta( 12, 'meta_author', true );

