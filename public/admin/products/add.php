<?php
require_once(__DIR__ . '/../../../bootstrap.php');

redirect_unless_admin();

if (is_post()) {

    if (empty($_POST['name'])) {
        $_SESSION['previous_errors']['name'] = 'Le nom du produit est requis';
    }

    if (empty($_POST['description'])) {
        $_SESSION['previous_errors']['description'] = 'La description est requise';
    }

    if(!empty($_SESSION['previous_errors'])) {
        redirect('/admin/products/add.php');
    }

    $query = pdo()->prepare('INSERT INTO products (name, description) VALUES (?,?)');
    $query->execute([$_POST['name'], $_POST['description']]);
    redirect('/admin/products/index.php');
    
}
?>

<?php partial('header_admin', ['title' => 'Produits']); ?>


<h1 class="text-xl mb-4">Ajouter un produit</h1>

<form method="POST">

    <div class="mb-3 max-w-sm">
        <label for="name" class="block text-sm px-3 mb-px">Nom</label>
        <input type="text" name="name" id="name" class="border focus:border-black px-4 py-1 w-full" required value="<?= $previous_inputs['name'] ?? '' ?>">

        <?php if (isset($previous_errors['name'])): ?>
            <p class="border border-red-900 w-full bg-red-100 text-red-900 mb-4 px-3 py-1 mt-2">
                <?= $previous_errors['name'] ?>
            </p>
        <?php endif; ?>
        
    </div>

    <div class="mb-3 max-w-sm">
        <label for="description" class="block text-sm px-3 mb-px">Description</label>
        <textarea name="description" required id="description" class="border focus:border-black px-4 py-1 w-full h-32"></textarea>

        <?php if (isset($previous_errors['description'])): ?>
            <p class="border border-red-900 w-full bg-red-100 text-red-900 mb-4 px-3 py-1 mt-2">
                <?= $previous_errors['description'] ?>
            </p>
        <?php endif; ?>
    </div>

    <p class="mt-6 max-w-sm">
        <button class="w-full border py-1">Ajouter produit</button>
    </p>

</form>




<?php partial('footer_admin'); ?>
