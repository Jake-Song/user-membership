<?php
function registration_form( $username, $password, $email ){
    
  echo '
    <form id="registration-form" action="' . $_SERVER['REQUEST_URI'] . '" method="post">
    <div>
    <label for="username">Username</label>
    <input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
    </div>

    <div>
    <label for="password">Password</label>
    <input type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
    </div>

    <div>
    <label for="email">Email</label>
    <input type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
    </div>

    <input type="submit" id="registration" name="submit" class="submit-button" value="Register"/>

    <div class="terms">
      By signing up you agree to our <a href="#">Terms and Policies.</a>
    </div>
    </form>
    ';

}
