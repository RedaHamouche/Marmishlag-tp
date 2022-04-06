<?php get_header(); ?>

<section class="hero">
    <h1>Marmishlag</h1>
    <form class="search">
        <input
            class="hero-search"
            list="categories"
            id="categories-choice"
            name="categories-choice"
            placeholder="Choisir une catégorie"
        />
    </form>

    <datalist id="categories">
        <?php foreach (get_categories() as $category): ?>
            <option value=<?= $category->slug ?>>
        <?php endforeach; ?>
    </datalist>
    <figure class="hero-bg">
        <img src="<?php bloginfo('template_url'); ?>/assets/hero.jpg" alt="cooking">
    </figure>
</section>

<?php query_posts('posts_per_page=21'); ?>
<?php if (have_posts()) : ?>
    <section class="cards-list">
        <?php while(have_posts()) : ?>
            <?php
                the_post();
                $categories = get_the_category(get_the_ID());
                $articleCategory = '';
                foreach ($categories as $category){
                    $articleCategory = $articleCategory . ' ' . $category->slug;
                }
            ?>
            <a href="<?php the_permalink(); ?>" class="card" data-category='<?php echo $articleCategory;?>'>
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img" alt="...">
                <h2><?php the_title(); ?></h2>
            </a>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
<script defer>
    const marmiArticles = document.querySelectorAll('.cards-list .card');
    const categoryChoice = document.querySelector('#categories-choice');
    const searchForm = document.querySelector('.hero .search');

    searchForm.addEventListener('submit', (e) =>
    {
        e.preventDefault()
    })

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
