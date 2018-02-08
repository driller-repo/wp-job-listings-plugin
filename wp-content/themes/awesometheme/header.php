<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awesome Theme</title>

    <?php wp_head(); ?>
</head>

<?php

    $awesomeClasses = ['awesome-class'];

    if(is_front_page()) {
        $awesomeClasses = ['awesome-class', 'front-page'];
    }

?>

<body <?php body_class($awesomeClasses) ?>>

    <?php wp_nav_menu(['theme_location'=>'primary_menu']) ?>