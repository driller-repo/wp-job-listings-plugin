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


function dwwp_register_post_type()
{
    $args = [
        'public' => true,
        'label' => 'Job Listing'
    ];

    register_post_type('job', $args);
}

add_action('init', 'dwwp_register_post_type');