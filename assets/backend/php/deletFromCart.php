<?php
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Get the raw POST data
    $data = file_get_contents('php://input');
    $json_data = json_decode($data, true);

    $id = $json_data['id'];

    // Here, you can write the code to delete the item with this id from the database

    // Then, you can send a response back to the client
    echo json_encode([
        'status' => 'success',
        'message' => 'Item deleted successfully',
        'data'=> $id
    ]);
}

