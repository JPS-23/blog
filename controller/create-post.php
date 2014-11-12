<?php
    require_once(__DIR__ . "/../model/database.php");
    
    $connection = new mysqli($host, $username, $password, $database);
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING );//this post says were are sending and recieving information
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING );//we are also adding a filter so we can protect our code
    
    echo "<p>Title: $title</p>";//this echos out our title
    echo "<p>Post: $post<p/>";//this also echos out our post
    
    $connection->close();
    