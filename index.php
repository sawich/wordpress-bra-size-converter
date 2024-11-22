<?php
/**
 * @package Simple
 */
/*
Plugin Name: Bra Size Converter
Plugin URI: https://github.org/sawich/wordpress-bra-size-converter/
Description: It's just a test... task?
Author: sawich
Version: 1.0.0
Author URI: https://angeldev.org
License: WTFPL
*/

define('SIMPLE__PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once SIMPLE__PLUGIN_DIR . 'converter.php';
require_once SIMPLE__PLUGIN_DIR . 'handler.php';