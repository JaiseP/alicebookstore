<?php
include '../../init.php';

if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

    $count = count($_SESSION['cart']);
    echo json_encode(["status" => "success", "count" => $count]);

} else {
    echo json_encode(["status" => "success", "count" => 0]);
}

?>