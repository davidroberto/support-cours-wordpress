<?php get_header(); ?>

je suis le single.php

<article style="background-color: <?php the_field('couleur'); ?>">

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post();?>

            <article>
                <p><?php the_title(); ?></p>
                <p><?php the_field('sous-titre');?></p>
                <div>
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; ?>

    <?php endif; ?>

</article>

<?php get_footer(); ?>
