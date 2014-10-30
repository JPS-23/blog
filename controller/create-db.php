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
    else {
        echo "Database already exists"; //This tells us that the databse file exists in local host
    }
    
    $query = $connection->query("CREATE TABLE posts (" // we are creating id's for the tables in localhost
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL," //this says there is at least 255 charectors for the title
            . "post text NOT NULL,"
            . "PRIMARY KEY ()"); //this contains all the text, its not a varchar
    
    $connection-> close();