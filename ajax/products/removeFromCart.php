<?php

include '../../init.php';

$product_id = $_POST['id'];
if($product_id) {
    unset ($_SESSION['cart'][$product_id]);
    echo json_encode(["status" => "success"]);
}


?>