<?php 
    $ad = get_field('custom_banner_img');
?>
<?php get_header(); ?>

<?php if (isset($ad)) : ?>
    <img src="<?= $ad ?>" alt="pub"/>
<?php endif; ?>

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