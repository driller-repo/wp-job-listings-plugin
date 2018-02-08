<?php
/**
 * Plugin Name: Basic Plugin
 * Plugin URI: http://some-link.com
 * Author: DrillerOne
 * Version: 1.0.0
 * License: GPLv2
 * Description: A plugin for creating job listings
 */


function dwwp_add_google_link()
{
    global $wp_admin_bar;

    $wp_admin_bar->add_menu([
        'id' => 'google_analytics',
        'title' => 'Google Analytics',
        'href' => 'http://google.com/analytics'
    ]);
}

add_action('wp_before_admin_bar_render','dwwp_add_google_link');