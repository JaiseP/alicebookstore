<?php

include '../../init.php';

$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

if(isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id]['quantity'] = $quantity;
    echo json_encode(['status' => 'success', 'data' => $_SESSION['cart'][$product_id]]);
}

?>