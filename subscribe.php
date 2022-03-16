<?php
/*
Plugin Name: Subscribe
Plugin URI: https://alihamzehei.ir/
Description: this is a description
Version: 1.0.0
Author: alihamzehei
Author URI: https://alihamzehei.ir/
License: GPL
Text Domain: rtl_alihamzehei
*/
require __DIR__ . '/bootstrap.php';


echo '<pre>' . var_export(\App\Models\User::all(), true) . '</pre>';
die();
register_activation_hook(__FILE__, 'subscribe_activation');
function subscribe_activation () {

}

register_deactivation_hook(__FILE__, 'subscribe_deactivation');
function subscribe_deactivation () {
}