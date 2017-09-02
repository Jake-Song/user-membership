<?php
function redirect_login_page() {
  $login_page  = home_url( '/log-in-test/' );
  $page_viewed = basename($_SERVER['REQUEST_URI']);

  if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
    wp_redirect($login_page);
    exit;
  }
}
add_action('init','redirect_login_page');

function login_failed() {
  $login_page  = home_url( '/log-in-test/' );
  wp_redirect( $login_page . '?login=failed' );
  exit;
}
add_action( 'wp_login_failed', 'login_failed' );

function verify_username_password( $user, $username, $password ) {
  $login_page  = home_url( '/log-in-test/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);

function logout_page() {
  $front_page  = home_url( '/' );
  wp_redirect( $front_page );
  exit;
}
add_action('wp_logout','logout_page');

add_filter( 'lostpassword_url', 'my_lost_password_page', 10, 2 );
function my_lost_password_page( $lostpassword_url, $redirect ) {
    return home_url( '/lostpassword/?redirect_to=' . $redirect );
}
