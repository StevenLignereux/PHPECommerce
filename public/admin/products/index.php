<?php
require_once(__DIR__ . '/../../../bootstrap.php');

redirect_unless_admin();
?>

<?php partial('header_admin', ['title' => 'Produits']); ?>

<div class="flex items-center mb-4">
    <h1 class="text-xl">Nos Produits</h1>
    <a href="/admin/products/add.php" class="ml-3 border px-2 py-1 uppercase text-xs">Créer un produit</a>
</div>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos impedit harum nihil, consequuntur reiciendis, culpa eius cupiditate atque quae, hic praesentium quasi sunt vel earum? Id delectus deleniti aperiam perferendis hic beatae, corporis reprehenderit quae voluptas aspernatur obcaecati itaque ex! A enim excepturi qui saepe error facilis sapiente! Omnis dolor minima eius nam inventore temporibus? Animi suscipit ratione recusandae atque vitae accusamus quo, commodi eveniet saepe, nesciunt magni error velit numquam et iste mollitia repudiandae tempora voluptate quaerat similique amet provident est cum? Hic laboriosam amet corrupti iure eius sint, ad animi et vero consequatur est. Id molestias aliquid inventore!</p>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos impedit harum nihil, consequuntur reiciendis, culpa eius cupiditate atque quae, hic praesentium quasi sunt vel earum? Id delectus deleniti aperiam perferendis hic beatae, corporis reprehenderit quae voluptas aspernatur obcaecati itaque ex! A enim excepturi qui saepe error facilis sapiente! Omnis dolor minima eius nam inventore temporibus? Animi suscipit ratione recusandae atque vitae accusamus quo, commodi eveniet saepe, nesciunt magni error velit numquam et iste mollitia repudiandae tempora voluptate quaerat similique amet provident est cum? Hic laboriosam amet corrupti iure eius sint, ad animi et vero consequatur est. Id molestias aliquid inventore!</p>


<?php partial('footer_admin'); ?>
