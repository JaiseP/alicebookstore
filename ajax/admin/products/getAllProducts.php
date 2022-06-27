<?php

include '../../../init.php';

// Initialize a new query object
$query = new Queries;
$category_query = new Queries;

if($query -> crud("SELECT * FROM products p INNER JOIN categories c ON p.category_id = c.category_id")) {
    $result = $query -> getAll();

    if($category_query -> crud("SELECT * FROM categories")) {
        $category_result = $category_query -> getAll();

        echo json_encode(["status" => "success", "products" => $result, "categories" => $category_result]);
    }
}

?>