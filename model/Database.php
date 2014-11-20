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

        $this->connection = new mysqli($host, $username, $password); //this code holds some variables used in the if statement

        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>"); //still not sure what this does
        }

        $exists = $this->connection->select_db($database); //This code checks that $database exists

        if (!$exists) { //were telling the statement $exists does not exist
            $query = $this->connection->query("CREATE DATABASE $database"); //allows to perform actions on database

            if ($query) {
                echo "<p>Successfully created database" . $database . "</p>";
            }
        } else {
            echo "Database already exists"; //This tells us that the databse file exists in local host
        }
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->databse);

        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

    public function closeConnection() {//the purpose of this function is to close the openConnection function
        if (isset($this->connection)) { //this checks if the variable has been set
            $this->connection->close(); //this is what we need to close a connection
        }
    }

    public function query($string) {
        $this->openConnection();

        $query = $this->connection->query($string);

        $this->closeConnection();

        return $query;
    }

}
