<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = md5($password);
$role = $_POST['role'];
$status = $_POST['status'];


if($query -> crud("INSERT INTO admin_users (first_name, last_name, email_id, password, privilege, is_active) 
VALUES(?,?,?,?,?,?)", [$first_name, $last_name, $email, $hashed_password, $role, $status])) {

    echo json_encode(["status" => "success"]);
}

?>