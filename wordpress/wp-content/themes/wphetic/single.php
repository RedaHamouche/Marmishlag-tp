<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <section class="card">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
        </section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>