<?php

include '../../init.php';

$full_name = $_POST['fullName'];
$address = $_POST['address'];
$street = $_POST['street'];
$city = $_POST['city'];
$postcode = $_POST['postcode'];
$phone_number = $_POST['phoneNumber'];
$order_status = 1;
$order_date = date("Y-m-d");
$actual_price = 12;
$final_price = 12;
$payment_mode = $_POST['paymentType'];

if(isset($_SESSION['login_status'])) {
    $user_id = $_SESSION['login_status']['0']['user_id'];
} else {
    $user_id = -99;
}

$total = 0;
if(isset($_SESSION['cart'])) {
    $values = [];
    $cart_products = $_SESSION['cart'];
    foreach ($cart_products as $product) {
        $total += $product['price'] * $product['quantity'];
    }
    $actual_price =  round($total,2);
    $final_price = round($total,2);
}

$query = new Queries;

if($query -> crud("INSERT INTO orders (user_id, order_date, order_status, actual_price, final_price, payment_mode, billing_name, billing_address, billing_street, billing_city, billing_postcode, billing_phone_number) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)", [$user_id, $order_date, $order_status, $actual_price, $final_price, $payment_mode, $full_name, $address, $street, $city, $postcode, $phone_number])) {
    $last_id = $query -> lastId();
    
    if(isset($_SESSION['cart'])) {
        $values = [];
        $cart_products = $_SESSION['cart'];
        foreach ($cart_products as $product) {
            $query -> crud("INSERT INTO order_products (order_id, product_id, quantity, price_purchased) VALUES (?,?,?,?)", [$last_id, $product['product_id'], $product['quantity'], $product['price']]);
        }
    }

    echo json_encode(["status" => "success"]);

}

?>