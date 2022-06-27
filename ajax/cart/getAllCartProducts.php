<?php

include '../../init.php';

if(isset($_SESSION['cart'])) {
    $cart_products = $_SESSION['cart'];
    echo json_encode(["status" => "success", "data" => $cart_products]);
} else {
    echo json_encode(["status" => "no_items"]);
}

?>