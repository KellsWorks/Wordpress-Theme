<?php get_header(); ?>

<main id="main" class="site-main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="post">
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-content"><?php the_content(); ?></div>
        </article>

    <?php endwhile; else: ?>

        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
