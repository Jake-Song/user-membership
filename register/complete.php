<?php
function complete_registration() {
    global $reg_errors, $username, $password, $email;
    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $userdata = array(
          'user_login'    =>   $username,
          'user_email'    =>   $email,
          'user_pass'     =>   $password,
        );

        $user = wp_insert_user( $userdata );

        $user_data = get_user_by( 'id', $user );

        $username = $user_data->user_nicename;
        $user_id = $user_data->ID;

        wp_set_current_user($user_id, $username);
        wp_set_auth_cookie($user_id);
        do_action('wp_login', $username, $user);

        $success_message = 'Registration complete. You have your own wishlist.

        Goto <a href="' . esc_url(get_site_url()) . '">the page You have seen.</a>';

        wp_send_json_success( $success_message );

    }
}
