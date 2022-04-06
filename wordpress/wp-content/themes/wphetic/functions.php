<?php
add_action('after_setup_theme',
function () {
    add_theme_support('post-thumbnails');
});

/**
 * Register
 */
add_action('admin_post_register', 'handle_register');

function handle_register() {
    wp_redirect(home_url());
    if (!wp_verify_nonce($_POST['register'], 'register')) {
        die('nonce invalide');
    }

    if(isset($name) and isset($mail) and isset($pwd)) {
        wp_insert_user([
            'user_pass' => $_POST['pwd'],
            'user_login' => $_POST['name'],
            "user_email" => $_POST['mail']
        ]);
        wp_redirect(home_url() . $_POST['_wp_http_referer'] . '?success=true');
    } else {
        wp_redirect(home_url() . $_POST['_wp_http_referer'] . '?success=false');
    }
}