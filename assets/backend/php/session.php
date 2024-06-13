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



// if (session_id() == '') {
//     echo "Aucune session n'est active.";
// } else {
//     echo "Une session est active.";
// }
?>