<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

$product_name = $_POST['productName'];
$product_category = $_POST['productCategory'];
$product_image = $_POST['productImage'] . '.jpg';
$product_description = $_POST['productDescription'];
$product_price = $_POST['productPrice'];
$product_discount = $_POST['productDiscount'];


if($query -> crud("INSERT INTO products (product_name, price, discount_percentage, product_image, description, category_id, is_active, is_deleted) 
VALUES(?,?,?,?,?,?,?,?)", [$product_name, $product_price, $product_discount, $product_image, $product_description, $product_category, 1, 0])) {
    echo json_encode(["status" => "success"]);
}


?>