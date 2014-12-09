<?php
    require_once (__DIR__ . "/../model/config.php");
    
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);//all these just filter our code
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);//and sanitize it
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$"; //this is so we can create a unique id
    
    $hashedPassword = crypt($password, $salt);
    
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            . "email = '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt'");
    
    if($query) {
        echo "Succesfully created user: $username";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    