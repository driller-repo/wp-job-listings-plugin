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
    $singular = 'Job Listing';
    $plural = 'Job Listings';
    $labels = [
        'name'               => $plural,
        'singular_name'      => $singular,
        'add_name'           => 'Add New',
        'add_new_item'       => 'Add New ' . $singular,
        'edit'               => 'Edit',
        'add_new'            => 'Add New',
        'new_item'           => 'New ' . $singular,
        'edit_item'          => 'Edit ' . $singular,
        'view_item'          => 'View ' . $singular,
        'all_items'          => 'All ' . $plural,
        'search_term'        => 'Search ' . $plural,
        'search_items'       => 'Search ' . $plural,
        'not_found'          => 'No job listings found.',
        'not_found_in_trash' => 'No job listings found in Trash.',

    ];

    $args = [
        'public' => true,
        'labels' => $labels,
        'publicly_queryable' => true,
        'exclude-from_search' => false,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-businessman',
        'can_export' => true,
        'delete_with_user' => false,
        'hierarchical' => false,
        'has_archive' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'rewrite' => [
            'slug' => 'jobs',
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ],
        'supports' => [
            'title', 'editor', 'author', 'custom-fields'
        ]
    ];

    register_post_type('job', $args);
}

add_action('init', 'dwwp_register_post_type');