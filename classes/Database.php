<?php

class Database {

    public $connection;

    // Database class to connect with the database with database config values
    public function __construct() {
        try {
            $this -> connection = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USER, PASSWORD);
            $this -> connection -> setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        } catch(PDOException $e) {
            echo "Connection Error " . $e -> getMessage();
        }
    }   
}

?>





