<?php


add_action('wp_enqueue_scripts', 'awesome_script_enqueue');
add_action('init', 'awesome_theme_setup');


function awesome_script_enqueue()
{

    wp_enqueue_style('customestyle',  get_template_directory_uri() . '/css/awesome.css', [], '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/awesome.js', [], '1.0.0', 'all');

}


function awesome_theme_setup()
{
    add_theme_support('menus');

    register_nav_menu('primary_menu', 'Primary Header Navigation');

    register_nav_menu('footer_menu', 'Footer Menu');
}