<?php

include '../../init.php';

$email = $_POST['email'];
$password = $_POST['password'];

$hash_password = md5($password);

// Initialize a new query object
$query = new Queries;

if($query -> crud("SELECT * FROM users u INNER JOIN company c ON c.company_id = u.company_id WHERE email_id = ? AND password = ?", [$email, $hash_password])) {
    $count = $query -> count();
    if($count == 1) {
        $result = $query -> get();
        echo json_encode(['status' => 'success', 'data' => $result]);
    } else {
        echo json_encode(['status' => 'bad_credentials']);
    } 
}

?>