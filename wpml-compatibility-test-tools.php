<?php
/*
Plugin Name: WPML Compatibility Test Tools
Plugin URI: http://wpml.org
Description: Tools to test theme and plugin compatibility.
Author: WPML Development Team
Author URI: http://wpml.org
Version: 0.9.2
*/

define('WPML_CTT_VERSION', '0.9.2');
define('WPML_CTT_PATH', dirname(__FILE__));
define('WPML_CTT_PLUGIN_URL', plugins_url( basename(dirname(__FILE__)) ) );

require WPML_CTT_PATH . '/inc/wpml-compatibility-test-tools-messages.class.php';
require WPML_CTT_PATH . '/inc/wpml-compatibility-test-tools.functions.php';
require WPML_CTT_PATH . '/inc/wpml-compatibility-test-tools-base.class.php';
require WPML_CTT_PATH . '/inc/wpml-compatibility-test-tools.class.php';
require WPML_CTT_PATH . '/inc/wpml-modify-duplicate-strings.class.php';

if ( !defined( 'ICL_DONT_PROMOTE' ) ){
	define('ICL_DONT_PROMOTE', true );
}

$WPML_Compatibility_Test_Tools = new WPML_Compatibility_Test_Tools();
