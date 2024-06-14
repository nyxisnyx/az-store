<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    
    $data = file_get_contents('php://input');
    $json_data = json_decode($data, true);

    $id = $json_data['id'];

    foreach ($_SESSION['cart'] as $key => $value) {
        if ($key == $id) {
            
            //remove the the item from the session
            unset($_SESSION['cart'][$key]);

            // re-index the array
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            break;
        }
    }
    
    echo json_encode([
        'status' => 'success',
        'message' => 'Item deleted successfully',
        'data'=> $_SESSION['cart'],
    ]);
}

