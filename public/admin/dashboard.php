<?php
require_once(__DIR__ . '/../../bootstrap.php');

redirect_unless_admin();
?>

<?php partial('header', ['title' => 'Admin']); ?>

    <div class="flex max-w-5xl w-full mx-auto mt-8">
        <nav class="mr-6 w-48 flex-shrink-0 py-8">
            <div class="-my-1">

                <div class="w-full my-1 py-2 px-3 bg-gray-400">
                    <a class="text-gray-800 hover:text-black" href="/admin/dashboard.php">
                        Tableau de bord
                    </a>
                </div>
                
                <div class="w-full my-1 py-2 px-3">
                    <a class="text-gray-800 hover:text-black" href="/admin/products.php">
                        Produits
                    </a>
                </div>
                
                <div class="w-full my-1 py-2 px-3">
                    <a class="text-gray-800 hover:text-black" href="/admin/stats.php">
                        Statisques
                    </a>
                </div>
                
                <div class="w-full my-1 py-2 px-3">
                    <form method="POST" action="/admin/logout.php">
                        <button class="text-gray-800 hover:text-black">Déconnexion</button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="bg-white shadow-xl p-8">
            <h1 class="text-xl mb-4">Tableau de bord</h1>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos impedit harum nihil, consequuntur reiciendis, culpa eius cupiditate atque quae, hic praesentium quasi sunt vel earum? Id delectus deleniti aperiam perferendis hic beatae, corporis reprehenderit quae voluptas aspernatur obcaecati itaque ex! A enim excepturi qui saepe error facilis sapiente! Omnis dolor minima eius nam inventore temporibus? Animi suscipit ratione recusandae atque vitae accusamus quo, commodi eveniet saepe, nesciunt magni error velit numquam et iste mollitia repudiandae tempora voluptate quaerat similique amet provident est cum? Hic laboriosam amet corrupti iure eius sint, ad animi et vero consequatur est. Id molestias aliquid inventore!</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos impedit harum nihil, consequuntur reiciendis, culpa eius cupiditate atque quae, hic praesentium quasi sunt vel earum? Id delectus deleniti aperiam perferendis hic beatae, corporis reprehenderit quae voluptas aspernatur obcaecati itaque ex! A enim excepturi qui saepe error facilis sapiente! Omnis dolor minima eius nam inventore temporibus? Animi suscipit ratione recusandae atque vitae accusamus quo, commodi eveniet saepe, nesciunt magni error velit numquam et iste mollitia repudiandae tempora voluptate quaerat similique amet provident est cum? Hic laboriosam amet corrupti iure eius sint, ad animi et vero consequatur est. Id molestias aliquid inventore!</p>
        </main>
        


<?php partial('footer'); ?>
    
