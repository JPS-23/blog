<?php
    require_once(__DIR__ . "/database.php");
    session_start();
    
    $path = "/peraltaj-blog/";//this creates a variable,also modifies the code
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
    
    if(!isset ($_SESSION["connection"])) {//we need this if statement to check if the variable really exists
        $connection = new Database($host, $username, $password, $database);//through here we'll have access to the other functions
        $_SESSION["connection"] = $connection;//sessions are used to store information
    }
    
    