<?php

include '../../../init.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Initialize a new query object
$query = new Queries;

if($query -> crud("SELECT * FROM admin_users WHERE email_id = ? AND password = ?", [$email, $password])) {
    $count = $query -> count();
    if($count == 1) {
        $result = $query -> get();
        echo json_encode(['status' => 'success', 'data' => $result]);
    } else {
        echo json_encode(['status' => 'bad_credentials']);
    } 
}

?>