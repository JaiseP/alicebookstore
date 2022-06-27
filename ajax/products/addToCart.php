<?php

include '../../init.php';

$product_id = $_POST['id'];
$quantity = $_POST['qty'];
$price = $_POST['productPrice'];

$query = new Queries;

if($query -> crud("SELECT * FROM products WHERE product_id = ?", [$product_id])) {
    $result = $query -> get();
    $_SESSION['cart'][$product_id] = array(
        'product_id' => $product_id, 
        'category_id' => $result -> category_id,
        'product_name' => $result -> product_name, 
        'quantity' => $quantity,
        'price' => round($price,2),
        'discount' => $result -> discount_percentage
    );

    echo json_encode(["status" => "success", "data" => $_SESSION['cart'][$product_id]]);
} else {
    echo json_encode(["status" => "failed"]);
}



?>