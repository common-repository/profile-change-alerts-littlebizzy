<?php
/*
Plugin Name: Profile Change Alerts
Plugin URI: https://www.littlebizzy.com/plugins/profile-change-alerts
Description: Sends an email both to the WordPress admin and relevant user whenever that user updates any field on their profile (also works with WooCommerce).
Version: 1.0.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Avoid script calls via plugin URL
if (!function_exists('add_action'))
	die;

// This plugin constants
define('PRFCHN_FILE', __FILE__);
define('PRFCHN_PATH', dirname(PRFCHN_FILE));
define('PRFCHN_VERSION', '1.0.0');

// Load core class
require_once(PRFCHN_PATH.'/core/core.php');
PRFCHN_Core::instance();