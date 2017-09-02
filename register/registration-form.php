<?php
function registration_form( $username, $password, $email ){
  echo '
    <style>
    div {
        margin-bottom:2px;
    }

    input{
        margin-bottom:4px;
    }
    </style>
    ';
  echo '
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
    <div>
    <label for="username">Username<strong>*</strong></label>
    <input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
    </div>

    <div>
    <label for="password">Password <strong>*</strong></label>
    <input type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
    </div>

    <div>
    <label for="email">Email <strong>*</strong></label>
    <input type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
    </div>

    <input type="submit" name="submit" value="Register"/>
    </form>
    ';

}
