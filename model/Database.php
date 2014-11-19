<?php

class Database {//This class is a collection of variables and functions creating an object working with the variables below

    private $connection; //we set these variables to be private so we can only access it through this file
    private $host; // setting these to private makes them easier to read and maintain
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database) {//its public because we need this to be accessed anywhere
        $this->host = $host; //the construct function is used to define constructors
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->databse);

        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

    public function closeConnection() {//the purpose of this function is to close the openConnection function
        if(isset($this->connection)) { //this checks if the variable has been set
            $this->connection->close();//this is what we need to close a connection
        }
    }

    public function query($string) {
        
    }

}
