<?php
    require_once(__DIR__ . "/../model/config.php"); // this gets out of the model folder and opens up the database.php folder
    
    $query = $_SESSION["connection"]->query("CREATE TABLE posts (" // we are creating id's for the tables in localhost
            . "id int(11) NOT NULL AUTO_INCREMENT," //there is up to 11 values
            . "title varchar(255) NOT NULL," //this says there is at least 255 charectors for the title
            . "post text NOT NULL," //we create a post here, posts cant be empty
            . "PRIMARY KEY (id))"); //this contains all the text, its not a varchar
    
    if($query) {
        echo "<p>Successfully created table posts</p>"; // with this code we have created a file in the database folder
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>"; //this will check if query is false
    }
    
    $query = $_SESSION["connection"]->query("CREATE TABLE users ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username varchar(30) NOT NULL,"
            . "email varchar(50) NOT NULL,"
            . "password char(128) NOT NULL, "
            . "salt char(128) NOT NULL,"
            . "PRIMARY KEY (id))");
    
    if($query) {
        echo "<p>Successfully created table: users</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }