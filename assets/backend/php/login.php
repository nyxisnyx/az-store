
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/style.css">
    <script defer type="module" src="./../../js/script.js"></script>
    <title>Document</title>
</head>
<body>

<header>
        <?php
            include('./navbar.php');
        ?>
   
    </header>
    <main>

    <div class="container" id="registration-form-container">
        <div id="container-btn">
            <button class="btn-display-n">x</button>
        </div>
       
        <h1>Formulaire d'inscription</h1>
        <form action="#" method="post">
            <!-- form for login -->
            <div>
                <label for="first-name">First name</label>
                <input type="text" id="first-name" name="first-name" required> <!-- first-name -->
            </div>
            <div>
                <label for="last-name">Last name</label>
                <input type="text" id="last-name" name="last-name" required> <!-- last-name -->
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required> <!-- email -->
            </div>
            <div>
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required> <!-- address -->
            </div>
            <div>
                <label for="city">City</label>
                <input type="text" id="city" name="city" required> <!--city-->
            </div>
            <div>
                <label for="zip-code">Zip code</label>
                <input type="text" id="zip-code" name="zip-code" required> <!-- zip-code -->
            </div>
            <div>
                <label for="country">Country</label>
                <input type="text" id="country" name="country" required> <!-- country -->
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    
    </main>
    <footer>
        <?php
            include('./footer.php');
        ?>
    </footer>

</body>
</html>


    <?php 

function sanitize($data) {
    $data = trim($data); // Supprime les espaces en début et fin de chaîne
    $data = stripslashes($data); // Supprime les antislashes
    $data = htmlspecialchars($data); // Convertit les caractères spéciaux en entités HTML
    return $data;
}

function removeSpecialChars($str) {
    // Retirer tout caractère qui n'est pas une lettre, un chiffre, un espace ou un tiret bas
    return preg_replace('/[^a-zA-Z0-9\s_]/', '', $str);
}
    
    if(isset($_POST['first-name'])&& isset($_POST['email'])&& isset($_POST['address'])&& isset($_POST['city'])&& isset($_POST['zip-code'])&& isset($_POST['country'])&& isset($_POST['password'])){

        $firstName = removeSpecialChars(sanitize($_POST['first-name']));
        $lastName = removeSpecialChars(sanitize($_POST['last-name']));
        $email = sanitize($_POST['email']); 
        $address = removeSpecialChars(sanitize($_POST['address']));
        $city = removeSpecialChars(sanitize($_POST['city']));
        $zipCode = removeSpecialChars(sanitize($_POST['zip-code']));
        $country = removeSpecialChars(sanitize($_POST['country']));
        $password = removeSpecialChars(sanitize($_POST['password']));
   

        // verification if we take all informations 
        // echo $firstName . "<br>";
        // echo $lastName . "<br>";
        // echo $password . "<br>";
        // echo $email . "<br>";
        // echo $address . "<br>";
        // echo $city . "<br>";
        // echo $zipCode . "<br>";
        // echo $country . "<br>";
    }
    
    


        include('session.php');


    ?>