<style> <?php include 'style.css'; ?> </style>

<!-- <?php 
    //$ad = get_field('custom_banner_img');
?> -->
<?php get_header(); ?>

<main class="single">
    
    <?php if (isset($ad)) : ?>
        <figure class="ad">
            <img src="<?= $ad ?>" alt="pub"/>
        </figure>
    <?php endif; ?>
        
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <article class="article">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                <p><?php 
                get_post_meta( get_the_ID(), 'metabox',  true ); 
                ?></p>
            </article>
            
        <?php endwhile; ?>
    <?php endif; ?>
    
</main>
                
<?php get_footer(); ?>



