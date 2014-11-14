<?php
    require_once(__DIR__ . "/../model/config.php"); // this gets out of the model folder and opens up the database.php folder

    $connection = new mysqli($host, $username, $password); //this code holds some variables used in the if statement
    
    if($connection->connect_error) {
        die("<p>Error: " . $connection->connect_error . "</p>"); //still not sure what this does
    }
    
    $exists = $connection->select_db($database); //This code checks that $database exists
    
    if(!$exists) { //were telling the statement $exists does not exist
       $query = $connection->query("CREATE DATABASE $database"); //allows to perform actions on database
       
       if($query) {
        echo "<p>Successfully created database" . $database . "</p>";   
       }
    }
    else {
        echo "Database already exists"; //This tells us that the databse file exists in local host
    }
    
    $query = $connection->query("CREATE TABLE posts (" // we are creating id's for the tables in localhost
            . "id int(11) NOT NULL AUTO_INCREMENT," //there is up to 11 values
            . "title varchar(255) NOT NULL," //this says there is at least 255 charectors for the title
            . "post text NOT NULL," //we create a post here, posts cant be empty
            . "PRIMARY KEY (id))"); //this contains all the text, its not a varchar
    
    if($query) {
        echo "<p>Successfully created table posts</p>"; // with this code we have created a file in the database folder
    }
    else {
        echo "<p>$connection->error</p>"; //this will check if query is false
    }
    
    $connection-> close();