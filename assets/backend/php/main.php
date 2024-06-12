<?php 

$productsJson = file_get_contents('./assets/backend/db/product_db.json');
$products = json_decode($productsJson, true);

foreach ($products as $product) {
    echo "
    <div id='card_{$product['id']}' class='cards'>

        <h2>{$product['name']}</h2>
        <p>Price: {$product['price']}</p>
        <img src='{$product['image']}' alt='{$product['name']}'>

    </div>";
}


