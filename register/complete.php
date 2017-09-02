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
        
        echo 'Registration complete. Goto <a href="' . get_site_url() . '/wp-login.php">login page</a>.';
    }
}
