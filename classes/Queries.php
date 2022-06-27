<?php

class Queries extends Database {

    public $result;

    //  function to execute prepare and execte query
    public function crud($qry, $params = []) {
        if(empty($params)) {
            $this -> result = $this -> connection -> prepare($qry);
            return $this -> result -> execute();
        } else {
            $this -> result = $this -> connection -> prepare($qry);
            return $this -> result -> execute($params); 
        }
    }

    // function to fetch the count of results
    public function count() {
        return $this -> result -> rowCount();
    }

    
    // function to fetch a single row of result
    public function get() {
        return $this -> result -> fetch(PDO::FETCH_OBJ);
    }


    // function to fetch all results
    public function getAll() {
        return $this -> result -> fetchAll(PDO::FETCH_OBJ);
    }

    //function to get last inserted Id
    public function lastId() {
        return $this -> connection -> lastInsertId();
    }


}

?>