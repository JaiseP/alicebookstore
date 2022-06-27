<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

$product_id = $_POST['productId'];
$product_name = $_POST['productName'];
$product_category = $_POST['productCategory'];
$product_image = $_POST['productImage'] . '.jpg';
$product_description = $_POST['productDescription'];
$product_price = $_POST['productPrice'];
$product_discount = $_POST['productDiscount'];

if($product_image) {

    if($query -> crud("UPDATE products SET product_name = ?, price = ?, category_id = ?, product_image = ?, description = ?, 
 discount_percentage = ? WHERE product_id = ?", [$product_name, $product_price, $product_category, $product_image, 
 $product_description,   $product_discount, $product_id])) {
    echo json_encode(["status" => "success"]);
}

} else {
    if($query -> crud("UPDATE products SET product_name = ?, price = ?, category_id = ?, description = ?, 
 discount_percentage = ? WHERE product_id = ?", [$product_name, $product_price, $product_category, 
 $product_description,   $product_discount, $product_id])) {
    echo json_encode(["status" => "success"]);
}
}



?>