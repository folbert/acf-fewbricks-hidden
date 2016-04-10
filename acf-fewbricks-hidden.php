<?php

/*
Plugin Name: Advanced Custom Fields: Hidden Field for Fewbricks.
Plugin URI: http://folbert.com
Description: A hidden field for Advanced Custom Fields. Modified for Fewbricks.
Version: 1.5.1
Author: folbert
Author URI: http://folbert.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-fewbricks-hidden', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );

// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_hidden( $version ) {

    include_once(__DIR__ . '/acf-fewbricks-hidden-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_hidden');

add_action('acf/register_fields', 'register_fields_hidden');