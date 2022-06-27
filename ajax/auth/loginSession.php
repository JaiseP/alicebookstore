<?php

include '../../init.php';

$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$user_id = $_POST['userId'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$company_id = $_POST['company_id'];


$_SESSION['login_status'] = array(['status' => true, 'first_name' => $first_name, 'last_name' => $last_name, 
'user_id' => $user_id, 'company_name' => $company_name, 'company_id' => $company_id]);

echo json_encode(['status' => 'success', 'data' => $_SESSION['login_status']]);

?>