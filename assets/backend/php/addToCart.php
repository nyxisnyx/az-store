<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // get the raw data then convert it to php.
    $data = file_get_contents('php://input');
    $json_data = json_decode($data, true);

    //get the data from the db 
    $productsJson = file_get_contents('./../db/product_db.json');
    $products = json_decode($productsJson, true);

    if ($json_data) {

        foreach( $products as $product ) {
            $_SESSION['user_name']='user';
            if( $json_data['id'] == $product['id'] ) {
                $_SESSION['cart'][]=[ 
                    $product['id'],
                     $product['name'],
                      $product['price'],
                       $product['image']];  
                }
        }

        // Prepare a response
        $response = [
            'status' => 'success',
            'message' => 'Data received successfully',
            'data' => $_SESSION['cart']
        ];
    } else {
        // If not JSON, prepare an error response
        $response = [
            'status' => 'error',
            'message' => 'Invalid data format'
        ];
    }

    // Set the Content-Type to application/json
    header('Content-Type: application/json');

    // Print the response as a JSON string
    echo json_encode($response);
}

