<?php
    require_once(__DIR__ . "/../model/database.php"); // this gets out of the model folder and opens up the database.php folder

    $connection = new mysqli($host, $username, $password); //this code holds some variables used in the if statement
    
    if($connection->connect_error) {
        die("Error: " . $connection->connect_error); //still not sure what this does
    }
    
    $exists = $connection->select_db($database); //This code checks that $database exists
    
    if(!$exists) { //were telling the statement $exists does not exist
       $query = $connection->query("CREATE DATABASE $database"); //allows to perform actions on database
       
       if($query) {
        echo "Successfully created database" . $database;   
       }
    }

    
    $connection-> close();