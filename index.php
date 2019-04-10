<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post();?>

        <a href="<?php the_permalink(); ?>">
            <article>
                <p><?php the_title(); ?></p>
            </article>
        </a>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
