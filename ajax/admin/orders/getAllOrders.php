<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

if($query -> crud("SELECT * FROM orders")) {
    $result = $query -> getAll();
    
    echo json_encode(["status" => "success", "orders" => $result]);
    
}

?>