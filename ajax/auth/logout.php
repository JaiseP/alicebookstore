<?php

include '../../init.php';

unset($_SESSION['login_status']);

echo json_encode(["status" => "success"]);
?>