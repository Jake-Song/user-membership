<?php

  function registration_validation( $username, $password, $email )  {
    global $reg_errors;
    $reg_errors = new WP_Error;

    if ( empty( $username ) || empty( $password ) || empty( $email ) ) {
      //$reg_errors->add('field', 'Required form field is missing');
      wp_send_json_error( 'Required form field is missing' );
    }

    if ( 4 > strlen( $username ) ) {
      //$reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
      wp_send_json_error( 'Username too short. At least 4 characters is required' );
    }

    if ( username_exists( $username ) )
      //$reg_errors->add('user_name', 'Sorry, that username already exists!');
      wp_send_json_error( 'Sorry, that username already exists!' );

    if ( ! validate_username( $username ) ) {
      //$reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
      wp_send_json_error( 'Sorry, the username you entered is not valid' );
    }

    if ( 5 > strlen( $password ) ) {
        //$reg_errors->add( 'password', 'Password length must be greater than 5' );
        wp_send_json_error( 'Password length must be greater than 5' );
    }

    if ( !is_email( $email ) ) {
      //$reg_errors->add( 'email_invalid', 'Email is not valid' );
      wp_send_json_error( 'Email is not valid' );
    }

    if ( email_exists( $email ) ) {
      //$reg_errors->add( 'email', 'Email Already in use' );
      wp_send_json_error( 'Email Already in use' );
    }

    // if ( is_wp_error( $reg_errors ) ) {
    //
    //   $error_message = '';
    //
    //   foreach ( $reg_errors->get_error_messages() as $error ) {
    //
    //       $error_message .= '<div>';
    //       $error_message .= '<strong>ERROR</strong>:';
    //       $error_message .= $error . '<br/>';
    //       $error_message .= '</div>';
    //
    //   }
    //   if( !empty( $error_message ) ){
    //     wp_send_json_error( $error_message );
    //   }
    // }
  }
