<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

$company_id = $_POST['companyId'];
$company_name = $_POST['companyName'];
$discount_offered = $_POST['discount'];

if($query -> crud("UPDATE company SET company_name = ?, discount_offered = ? WHERE company_id = ?", [$company_name, $discount_offered, $company_id])) {
    echo json_encode(["status" => "success"]);
}



?>