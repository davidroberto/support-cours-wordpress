<?php get_header(); ?>

je suis le single.php

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post();?>

        <article>
            <p><?php the_title(); ?></p>
            <div>
                <?php the_content(); ?>
            </div>
        </article>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
