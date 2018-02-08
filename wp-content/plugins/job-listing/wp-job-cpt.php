<?php

add_action('init', 'dwwp_register_post_type');
add_action('init', 'dwwp_register_taxonomy');

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
        'not_found_in_trash' => 'No job listings found in Trash.'
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
            'title',
        ]
    ];

    register_post_type('job', $args);
}


function dwwp_register_taxonomy()
{
    $singular = 'Location';
    $plural = 'Locations';

    $labels = [
        'name'                          => $plural,
        'singular_name'                 => $singular,
        'popular_items'                 => 'Popular ' . $plural,
        'parent_item'                   => null,
        'parent_item_colon'             => null,
        'add_name'                      => 'Add New',
        'add_new_item'                  => 'Add New ' . $singular,
        'new_item_name'                 => 'New ' . $singular,
        'separate_items_with_commas'    => 'Separate ' .$plural .' with commas',
        'add_or_remove_items'    => 'Add or remove ' .$plural,
        'edit_item'                     => 'Edit ' . $singular,
        'view_item'                     => 'View ' . $singular,
        'all_items'                     => 'All ' . $plural,
        'search_term'                   => 'Search ' . $plural,
        'search_items'                  => 'Search ' . $plural,
        'not_found'                     => 'No '.$plural.' found.',
        'not_found_in_trash'            => 'No '.$plural.' found in Trash.',
        'menu_name'                     => $plural
    ];

    $args = [
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_terms_count',
        'query_var' => true,
        'rewrite' => ['slug' => 'location'],
    ];

    register_taxonomy('location', 'job', $args);
}