<?php

include '../../init.php';

$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$company = $_POST['company'];

$hashed_password = md5($password);

// Initialize a new query object
$query = new Queries;

if($query -> crud("SELECT * FROM users WHERE email_id = ?", [$email])) {
    $count = $query -> count();
    if($count > 0) {
        echo json_encode(['status' => 'already_exists']);
    } else {
        if($query -> crud("INSERT INTO users (first_name, last_name, email_id, password, company_id) VALUES (?,?,?,?,?)", 
        [$first_name, $last_name, $email, $hashed_password, $company])) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'failed']);
        }
    }
} 

?>

