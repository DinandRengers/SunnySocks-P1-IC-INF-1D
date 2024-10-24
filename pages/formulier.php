<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $voornaam = filter_input(INPUT_POST, "voornaam", FILTER_SANITIZE_STRING);
    $achternaam = filter_input(INPUT_POST, "achternaam", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $bericht = filter_input(INPUT_POST, "bericht", FILTER_SANITIZE_STRING);

    if ($voornaam && $achternaam && $email && $bericht) {
    } else {
        
        header("Location: /contact.html?");
        exit(); 
    }

}