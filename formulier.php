<?php
    if($_SERVER["REQUEST_METHOD"] == "POST");
    {
        //valideert de input
        $voornaam = filter_input(INPUT_POST, "voornaam");
        $achternaam = filter_input(INPUT_POST, "achternaam");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $bericht = filter_input(INPUT_POST, "bericht");
        header("Location: pages/contact.html");
    }
?>