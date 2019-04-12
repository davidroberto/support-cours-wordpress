<?php get_header(); ?>

<h1>Les articles liés à la catégorie Moto : </h1>

<?php

$args = [
    'post-type' => 'post',
    'cat' => 5
];

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) { ?>
	<?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>

        <h2><?php the_title(); ?></h2>

    <?php } ?>

<?php } ?>
