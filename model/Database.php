<?php
class Database {//This class is a collection of variables and functions creating an object working with the variables below
    private $connection; //we set these variables to be private so we can only access it through this file
    private $host;// setting these to private makes them easier to read and maintain
    private $username;
    private $password;
    private $database;
    
    public function __construct($host, $username, $password, $database) {//its public because we need this to be accessed anywhere
        $this->host = $host;//the construct function is used to define constructors
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    
    public function openConnection() {
        
    }
    
    public function closeConnection() {
        
    }
    
    public function query($string) {
        
    }
}

