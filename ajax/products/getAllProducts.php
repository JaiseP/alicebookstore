<?php

include '../../init.php';

$id = $_GET['id'];
$sort_by = $_GET['sortBy'];
$get_query = '';

$query = new Queries;

if(isset($_SESSION['login_status'])) {
    $login_status = true;
    $company_id = $_SESSION['login_status'][0]['company_id'];
    $discount_query = new Queries;

    $discount_query -> crud("SELECT discount_offered FROM company WHERE company_id = ?", [$company_id]);
    $discount = $discount_query -> get() -> discount_offered;
} else {
    $login_status = false;
    $discount = 0;
}

if($sort_by == "a-z") {
    $get_query = "SELECT * FROM products WHERE category_id = ?  ORDER BY product_name ASC";
} else if($sort_by == "low-high") {
    $get_query = "SELECT * FROM products WHERE category_id = ?  ORDER BY price ASC";
} else if($sort_by == "high-low") {
    $get_query = "SELECT * FROM products WHERE category_id = ?  ORDER BY price DESC";
}

if($query -> crud($get_query, [$id])) {
    $result = $query -> getAll();
    echo json_encode(["status" => 'success', "data" => $result, 'login_status' => $login_status, 'company_discount' => $discount]);
} else {
    echo json_encode(["status" => 'failed']);
}


?>