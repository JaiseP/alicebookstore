<?php

include '../../init.php';

$query = new Queries;

$id = $_GET['id'];

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

if($query -> crud("SELECT * FROM products WHERE product_id = ?", [$id])) {
    $result = $query -> get();
    echo json_encode(['status' => 'success', 'data' => $result, 'login_status' => $login_status, 'company_discount' => $discount]);
}



?>