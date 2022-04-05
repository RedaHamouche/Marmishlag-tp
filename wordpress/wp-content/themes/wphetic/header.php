<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php wp_head(); ?>
</head>
<style> <?php include 'style.css'; ?> </style>
<header class="header">
    <a href="./">home</a>
    <h1>Marmishlag</h1>
    <div>
        <label for="categories-choice">Choisir une catégorie</label>
        <input list="categories" id="categories-choice" name="categories-choice" />
    </div>

    <datalist id="categories">
        <?php foreach (get_categories() as $category): ?>
            <option value=<?= $category->slug ?>>
        <?php endforeach; ?>
    </datalist>
    
    <nav class="nav">
    <?php if(is_user_logged_in()) { ?>
        <li class="nav-button"><a href="wp-admin/post-new.php" class="nav-link">Créer un article</a></li>
        <?php } else { ?>
        <li class="nav-button"><a href="wp-admin" class="nav-link">Se connecter</a></li>
        <?php } ?>
    </nav>
</header>

<body>