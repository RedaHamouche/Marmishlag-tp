<style> <?php include 'style.css'; ?> </style>

<?php get_header(); ?>
<?php query_posts('posts_per_page=21'); ?>
<?php if (have_posts()) : ?>
    <section class="cards-list">
        <?php while(have_posts()) : ?>
            <?php the_post(); ?>
            <?php 
                $categories = get_the_category(get_the_ID());
                $articleCategory = '';
                foreach ($categories as $category){
                    $articleCategory = $articleCategory . ' ' . $category->slug;
            }
            ?>
            <article class="card" data-category='<?php echo $articleCategory;?>'>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" target="_blank" class="btn btn-primary">Lire plus</a>
            </article>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
<script defer>
    const marmiArticles = document.querySelectorAll('.cards-list .card');
    const categoryChoice = document.querySelector('#categories-choice');categories

    function display(el, disp = 'block' ){
        el.style.display = disp;
    }

    categoryChoice.addEventListener('keyup', (e) => {
        let inputValue = e.target.value;
        if(!document.querySelector(`[data-category~='${e.target.value}']`) && inputValue.length) return;
        marmiArticles.forEach(article => {
            if(inputValue.length === 0) return display(article, 'block');
            let currentCategory = article.dataset.category; 
            currentCategory.includes(inputValue) ? display(article, 'block') : display(article, 'none') 
        });
    });
</script>

<?php get_footer(); ?>
