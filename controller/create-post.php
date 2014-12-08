<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING );//this post says were are sending and recieving information
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING );//we are also adding a filter so we can protect our code
    $date = new DataTime('today');
    $time = new DataTime('America/Los_Angeles');
    
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");//were using single quotes because we want to make sure the variable are being sent
    
    if($query) {//Right here we are checking if we have a true value stored within query
        echo "<p>Successfully inserted post: $title</p>";//this will echo out a string if this is true
        echo "Posted on: " . $date->format("m/d/y") . " at " . $time->format("g:1");
    }
    else {//if there is an error this will echo out
        echo "<p>" . $_SESSION["connection"]->error . "</p>";//sessions are used to store information
    }
    