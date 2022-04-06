<?php
get_header();
?>

<main class="register form">
    <form action="<?= admin_url('admin-post.php')?>?action=register" method="post">

        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" placeholder="Name" required>
        </div>
        <div>
            <label for="mail">Email</label>
            <input id="mail" type="mail" name="mail" placeholder="email" required>
        </div>
        <div>
            <label for="pass">Mot de passe</label>
            <input type="password" id="pass" name="pwd" placeholder="password" required>
        </div>
        <input type="submit" value="Envoyer" >
        <?php wp_nonce_field('register', 'register'); ?>
    </form>
</main>
