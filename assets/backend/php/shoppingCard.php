<?php
session_start();
$url = "add_del_qant.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer type="module" src="./../../../assets/js/script.js"></script>
    <link rel="stylesheet" href="./../../../assets/css/style.css">
    <title>shopingCart</title>
</head>
<body>
    <header>

        <?php
                include('./../../../assets/backend/php/navbar.php');
        ?>

    </header>
    <main>
    <?php
        foreach ($_SESSION['cart'] as $key => $item) {
            $total_price = $item['price'] * $item['quantity'] ;
            //add anything u wanna calculate
            echo "
            <div class='panier'>
                <h2>{$item['name']}</h2>
                <p>Price: {$item['price']}</p>
                <img src='./../../../{$item['image']}' alt='{$item['name']}'>
                <p> Total price : {$total_price}</p>
                <button class='del_button' id='$key'>X</button>
                <button type='submit' action = '{$url}'class='add_qt' id='addQt_{$key}'>+</button>
                <button class='del_qt' id='delQt_{$key}'>-</button> 
            </div>
            ";
        }
    ?>
    </main>
    <footer>

        <?php
            include('./../../../assets/backend/php/footer.php');
        ?>

    </footer>
</body>
</html>
