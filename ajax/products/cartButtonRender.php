<?php

include '../../init.php';

$product_id = $_POST['id'];



if(isset($_SESSION['cart'][$product_id])) {
    if($_SESSION['cart'][$product_id]) {
        echo json_encode(["status" => "added"]);
    }
    } else {
    echo json_encode(["status" => "not_added"]);
}

?>