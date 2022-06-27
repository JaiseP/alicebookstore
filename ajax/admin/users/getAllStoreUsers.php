<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

if($query -> crud("SELECT * FROM admin_users ORDER BY is_active DESC")) {
    $result = $query -> getAll();
    
    echo json_encode(["status" => "success", "users" => $result]);
    
}

?>