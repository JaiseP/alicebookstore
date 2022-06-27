<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

$company_name = $_POST['companyName'];
$discount_offered = $_POST['discount'];

if($query -> crud("INSERT INTO company (company_name, discount_offered) VALUES(?,?)", [$company_name, $discount_offered])) {
    echo json_encode(["status" => "success"]);
}



?>