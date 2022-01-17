<?php
require_once(__DIR__ . '/../../../bootstrap.php');

redirect_unless_admin();

$query = pdo()->query('SELECT * FROM products');
$products = $query->fetchAll();
var_dump($products);

?>

<?php partial('header_admin', ['title' => 'Produits']); ?>

<div class="flex items-center mb-4">
    <h1 class="text-xl">Nos Produits</h1>
    <a href="/admin/products/add.php" class="ml-3 border px-2 py-1 uppercase text-xs">Créer un produit</a>
</div>

    


<?php partial('footer_admin'); ?>
