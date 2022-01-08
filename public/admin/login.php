<?php require_once('../../bootstrap.php'); ?>

<?php partial('header', ['title' => 'Connexion Admin']); ?>

    <h1>Connexion Admin</h1>

    <form method="POST">
        <p>
            <label for="name">Nom:</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="password">Mot de passe:</label>
            <input type="text" name="password" id="password">
        </p>
        <p>
            <button>Connexion</button>
        </p>
    </form>

<?php partial('footer'); ?>
    
