<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    $id = $data['id'];
    echo $id;

    // Read the products data
    $productsJson = file_get_contents('./../db/product_db.json');
    $products = json_decode($productsJson, true);

    // Find the product to add
    $productToAdd = null;
    foreach ($products as $product) {
        if ($product['id'] === $id) {
            $productToAdd = $product;
            break;
        }
    }

    if ($productToAdd !== null) {
        // Read the cart data
        $cartJson = file_get_contents('./../db/shopingCart_db.json');
        $cart = json_decode($cartJson, true);

        // Add the product to the cart
        $cart[] = $productToAdd;

        // Write the updated cart data back to the file
        $cartJson = json_encode($cart);
        file_put_contents('./../db/shopingCart_db.json', $cartJson);
        echo json_encode(['message' => 'Item added to cart']);
    }else{
        echo json_encode(['message'=> 'j ai rien recu']);
    }

}

