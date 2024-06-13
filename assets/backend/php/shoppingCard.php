<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="./../../../assets/js/DeletFromCart.js" type="module"></script>
    <title>shopingCart</title>
</head>
<body>
    <main>
    <?php
        foreach($_SESSION['cart'] as $key => $item) {
            echo"
            <div class='panier'>
                <h2>{$item[1]}</h2>
                <p>Price: {$item[2]}</p>
                <img src='{./../../../../$item[3]'} alt='{$item['1']}'>
                <button class='del_button' id='$key'>X</button>
            </div>
            ";
        }
    ?>
    </main>
</body>
</html>
