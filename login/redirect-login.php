<?php
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
