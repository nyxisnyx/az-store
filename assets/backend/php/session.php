<?php
session_start();

// verify if session started 
if (session_status() == PHP_SESSION_NONE) {
    echo "Aucune session n'est active.";
} elseif (session_status() == PHP_SESSION_ACTIVE) {
    echo "Une session est active.";
} else {
    echo "La session est désactivée.";
}

if(isset($_SESSION['first-name'])&& isset($_SESSION['email'])&& isset($_SESSION['address'])&& isset($_SESSION['city'])&& isset($_SESSION['zip-code'])&& isset($_SESSION['country'])&& isset($_SESSION['password'])){
    $firstName = removeSpecialChars(sanitize($_SESSION['first-name']));
    $lastName = removeSpecialChars(sanitize($_SESSION['last-name']));
    $email = sanitize($_SESSION['email']); 
    $address = removeSpecialChars(sanitize($_SESSION['address']));
    $city = removeSpecialChars(sanitize($_SESSION['city']));
    $zipCode = removeSpecialChars(sanitize($_SESSION['zip-code']));
    $country = removeSpecialChars(sanitize($_SESSION['country']));
    $password = removeSpecialChars(sanitize($_SESSION['password']));

    echo 'votre nom = '.'<br>'.$firstName;
}

// if (session_id() == '') {
//     echo "Aucune session n'est active.";
// } else {
//     echo "Une session est active.";
// }
?>