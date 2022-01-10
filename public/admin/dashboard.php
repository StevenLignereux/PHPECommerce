<?php
require_once(__DIR__ . '/../../bootstrap.php');
?>

<?php partial('header', ['title' => 'Admin']); ?>

    <h1>Admin</h1>

    <form method="POST" action="/admin/logout.php">
        <p>
            <button>Déconnexion</button>
        </p>
    </form>
    

<?php partial('footer'); ?>
    
