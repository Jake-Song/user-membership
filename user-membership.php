<?php
/*
  Plugin Name: 회원가입 및 로그인
  Plugin URI: http://wpjake.com
  Description: 회원가입 및 로그인 시스템.
  Version: 1.0
  Author: 송무복
  Author URI: http://wpjake.com
 */

// 회원가입
require_once(plugin_dir_path(__FILE__) . '/register/complete.php');
require_once(plugin_dir_path(__FILE__) . '/register/registration-form.php');
require_once(plugin_dir_path(__FILE__) . '/register/validation.php');
require_once(plugin_dir_path(__FILE__) . '/register/registration-super.php');

// 로그인
require_once(plugin_dir_path(__FILE__) . '/login/login-form.php');
require_once(plugin_dir_path(__FILE__) . '/login/redirect-login.php');
require_once(plugin_dir_path(__FILE__) . '/login/reset-password-form.php');

// 숏코드
require_once(plugin_dir_path(__FILE__) . 'shortcode.php');
