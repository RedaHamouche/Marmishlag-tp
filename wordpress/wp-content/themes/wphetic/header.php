<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
</head>
<header class="header">
    <a href="<?= home_url('/') ?>"><h1> Marmishlag</h1></a>
    
    <nav class="nav">
    <?php if(is_user_logged_in()) { ?>
        <li class="nav-button"><a href="wp-admin/post-new.php" class="nav-link">Créer une recette</a></li>
        <?php } else { ?>
        <li class="nav-button"><a href="/login" class="nav-link">Se connecter</a></li>
        <li class="nav-button"><a href="/register" class="nav-link">S'inscrire</a></li>
        <?php } ?>
    </nav>
</header>

<body>