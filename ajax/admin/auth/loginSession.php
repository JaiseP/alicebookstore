<?php

include '../../../init.php';

$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$user_id = $_POST['userId'];
$email = $_POST['email'];
$privilege = $_POST['privilege'];


$_SESSION['admin_login_status'] = array(['status' => true, 'first_name' => $first_name, 'last_name' => $last_name, 
'user_id' => $user_id, 'privilege' => $privilege]);

echo json_encode(['status' => 'success', 'data' => $_SESSION['admin_login_status']]);

?>