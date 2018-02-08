<?php

/*
 * Template Name: Page without title
 *
 * */


get_header() ?>

<?php

if (have_posts()) {

    while (have_posts()) {
        the_post(); ?>

        <small>Published on <?php the_time('F j, Y') ?>, in <?php the_category() ?></small>

        <p><?php the_content(); ?></p>

        <hr>

    <?php }

}

?>

<?php get_footer() ?>