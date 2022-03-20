<?php get_header(); ?>
<?php query_posts('posts_per_page=21'); ?>
<h1>Hello World</h1>
<?php if (have_posts()) : ?>
    <section class="cards-list">
        <?php while(have_posts()) : ?>
            <?php the_post(); ?>
            <article class="card">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" target="_blank" class="btn btn-primary">Lire plus</a>
            </article>
        <?php endwhile; ?>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
