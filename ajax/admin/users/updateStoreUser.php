<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

$user_id = $_POST['userId'];
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = md5($password);
$role = $_POST['role'];
$status = $_POST['status'];


if($password != '') {

    if($query -> crud("UPDATE admin_users SET first_name = ?, last_name = ?, email_id = ?, password = ?, privilege = ?,
    is_active = ? WHERE user_id = ?", [$first_name, $last_name, $email, $hashed_password, $role, $status, $user_id])) {

        echo json_encode(["status" => "success"]);
    }

} else {

    if($query -> crud("UPDATE admin_users SET first_name = ?, last_name = ?, email_id = ?, privilege = ?,
    is_active = ? WHERE user_id = ?", [$first_name, $last_name, $email, $role, $status, $user_id])) {

        echo json_encode(["status" => "success"]);
    }

}


?>