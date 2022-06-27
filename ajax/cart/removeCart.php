<?php

include '../../init.php';
$product_id = $_POST['product_id'];
if(isset($_SESSION['cart'][$product_id])) {
    unset($_SESSION['cart'][$product_id]);
    echo json_encode(["status" => "success"]);
}

?>