<?php
function custom_login_form(){
  $args = array(
      'redirect' => home_url(),
      'id_username' => 'user',
      'id_password' => 'pass',
      'label_username' => 'Username or Email',
	    'label_password' => 'Password',
      'label_log_in'   => 'Log In',
      'id_submit'      => 'login',
      'class_submit'   => 'submit-button',
     );

     $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;

     if ( $login === "failed" ) {
        echo '<p class="login-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';
      } elseif ( $login === "empty" ) {
        echo '<p class="login-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
      } elseif ( $login === "false" ) {
        echo '<p class="login-msg"><strong>ERROR:</strong> You are logged out.</p>';
      }
?>

  <div class="login-form">

    <?php wp_login_form( $args ); ?>
    <div class="loading-pulse"></div>
    <div class="tologin">
      Have your account? Please click here to <a href="#">sign up.</a>
    </div>

    <a href="<?php echo esc_url( site_url('/') . 'reset' ); ?>">Lost Password?</a>

  </div>

<?php
}
