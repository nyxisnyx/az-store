<?php 

$productsJson = file_get_contents('./assets/backend/db/product_db.json');
$products = json_decode($productsJson, true);

foreach ($products as $product) {
    echo "
    <div id='card_{$product['id']}' class='cards'>

        <img src='{$product['image']}' alt='{$product['name']}'>
        <div class='bottomCard'>
        <div class='cardLeft'><h3>{$product['name']}</h3>
        <p>{$product['price']}€</p></div>
        <button class='add cardRight' id='addProduct_{$product['id']}'>Add to cart</button></div>

    </div>";
}


