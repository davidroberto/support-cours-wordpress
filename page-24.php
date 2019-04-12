<?php get_header(); ?>

<h1>Tous les articles du blog : </h1>

<?php

$args = [
    'post-type' => 'post'
];

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) { $the_query->the_post(); ?>

        <h2><?php the_title(); ?></h2>

    <?php } ?>

<?php } ?>
