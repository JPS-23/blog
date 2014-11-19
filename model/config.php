<?php
    $path = "/peraltaj-blog/";//this creates a variable,also modifies the code
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
    
    $connection = new Database($host, $username, $password, $database);//through here we'll have access to the other functions