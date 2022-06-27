<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

if($query -> crud("SELECT * FROM company ORDER BY company_name")) {
    $result = $query -> getAll();
    
    echo json_encode(["status" => "success", "companies" => $result]);
    
}

?>