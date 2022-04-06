<?php
get_header();
?>
<main class="login form">
    <form action='<?= home_url('wp-login.php') ?>' method='post'>
        <div>
            <label for="id">Identifiant</label>
            <input id="id" type="text" name="log" placeholder="identifiant">
        </div>
        <input type="hidden" action="">
        <div>
            <label for="pass">Mot de passe</label>
            <input type="password" id="pass" name="pwd" placeholder="password">
        </div>
        <div>
            <input type="submit" value="se connecter" name="wp-submit">
        </div>
    </form>
</main>