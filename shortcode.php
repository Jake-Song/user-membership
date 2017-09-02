<?php
// Register a new shortcode: [cr_custom_registration]
add_shortcode( 'cr_custom_registration', 'custom_registration_shortcode' );
add_shortcode( 'cr_custom_login', 'custom_login_shortcode' );
add_shortcode( 'cr_custom_reset', 'custom_reset_shortcode' );

// The callback function that will replace [book]
function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}

function custom_login_shortcode() {
    ob_start();
    custom_login_form();
    return ob_get_clean();
}

function custom_reset_shortcode() {
    ob_start();
    custom_reset_form();
    return ob_get_clean();
}
