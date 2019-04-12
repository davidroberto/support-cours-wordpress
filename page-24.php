<?php get_header(); ?>

<h1>Les events : </h1>

<?php

$args = [
    'post_type' => 'events'
];

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>
	<?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>

        <h2><?php the_title(); ?></h2>

    <?php } ?>

<?php } ?>

<?php wp_reset_query() ?>