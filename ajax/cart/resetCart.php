<?php

include '../../init.php';
if(isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);
    echo json_encode(["status" => "success"]);
}

?>