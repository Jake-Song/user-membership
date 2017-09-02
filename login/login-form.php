<?php
function custom_login_form(){
  $args = array(
      'redirect' => home_url(),
      'id_username' => 'user',
      'id_password' => 'pass',
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

  <div class="login-branding">
    <a href="#" class="login-logo">Hongkiat.com</a>
    <p class="login-desc">
      Hongkiat.com is a design weblog dedicated to designers and bloggers. We constantly publish useful tricks, tools, tutorials and inspirational artworks.
    </p>
  </div>
  <div class="login-form">

    <?php wp_login_form( $args ); ?>
    <a href="<?php echo site_url(); ?>">Lost Password?</a>
  </div>

<?php
}
