<?php
/**
 * Plugin Name: WP Job Post Listing
 * Plugin URI: http://some-link.com
 * Author: DrillerOne
 * Version: 1.0.0
 * License: GPLv2
 * Description: A plugin for creating job listings
 */


//Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}

$dir = plugin_dir_path(__FILE__);

require_once ($dir . 'wp-job-cpt.php');