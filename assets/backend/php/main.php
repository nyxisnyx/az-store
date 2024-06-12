<?php 

$productsJson = file_get_contents('./assets/backend/db/product_db.json');
$products = json_decode($productsJson, true);
print_r($products); 

