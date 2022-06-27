<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;
$company_query = new Queries;

if($query -> crud("SELECT * FROM users u INNER JOIN company c ON u.company_id = c.company_id WHERE user_id != -99")) {
    $result = $query -> getAll();

    if($company_query -> crud("SELECT * FROM company")) {
        $company_result = $company_query -> getAll();

        echo json_encode(["status" => "success", "users" => $result, "company" => $company_result]);
    }
}

?>