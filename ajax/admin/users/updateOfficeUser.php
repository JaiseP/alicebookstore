<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;

$user_id = $_POST['userId'];
$approval_value = $_POST['approvalValue'];


if($query -> crud("UPDATE  users SET is_approved = ? WHERE user_id = ?", [$approval_value, $user_id])) {

    echo json_encode(["status" => "success"]);
}

?>