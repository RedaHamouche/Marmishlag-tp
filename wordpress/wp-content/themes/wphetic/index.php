<?php get_header(); ?>

<h1>Hello World</h1>
<?php if (have_posts()) : ?>
    <section class="cards-list">
        <?php //while(have_posts()) : ?>
            <article class="card">
                <h2>We <\n3 Hugo + <?php the_title(); ?></h2>
            </article>
        <?php //endwhile; ?>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
