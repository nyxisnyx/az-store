<?php
session_start();
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
                <button class='add_qt' id='addQt_{$key}'>+</button>
                <button class='del_qt' id='delQt_{$key}'>-</button> 
            </div>
            ";
        }
    ?>
    <script>
        const btn_add = document.querySelectorAll('.add_qt');
        btn_add.forEach(btn =>{
            btn.addEventListener('click',event=>{
                console.log(btn.id);
            })
        });
        const btn_del = document.querySelectorAll('.del_qt');
        btn_del.forEach(btn =>{
            btn.addEventListener('click',event=>{
                console.log(btn.id);
            })
        });
    </script>
    </main>
</body>
</html>
