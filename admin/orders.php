<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alice Bookstore | Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/854e356633.js" crossorigin="anonymous"></script>
</head>
<body class="admin-body">
    <div class="wrapper">
        <aside>
            <div class="logo-wrapper">
                <img src="../assets/images/logo-white.png" alt="Alice Bookstore Logo">
            </div>
            <ul>
                <li><a href="./dashboard.php">Dashboard</a></li>
                <li class="link-active"><a href="./orders.php">Orders</a></li>
                <li class="sub-menu"><a>Inventory</a></li>
                <div class="panel">
                    <p><a href="./products.php">Products</a></p>
                </div>
                <li class="sub-menu"><a>Users</a></li>
                <div class="panel">
                    <p><a href="./office-users.php">Office Users</a></p>
                    <p><a href="./store-user.php">Store Workers</a></p>
                </div>
                <li class="sub-menu"><a>Promotions</a></li>
                <div class="panel">
                    <p><a href="./company-discount.php">Company Discount</a></p>
                </div>
                <li class="sub-menu"><a>Logout</a></li>
            </ul>
        </aside>
        <main>
            <div class="admin-header container">
                <h4>Welcome John</h4>
                <div class="logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <p>Logout</p>
                </div>
            </div>
            <div class="container">
               <div class="heading-wrapper">
                   <h3>Orders</h3>
                   <select name="order-filter" id="order-filter">
                    <option value="all">All Orders</option>
                    <option value="processing">Processing</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                  </select>
               </div>

               <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Name</th>
                            <th>Orderd On</th>
                            <th>Payment</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="all-orders">
                        <tr data-toggle="modal" data-target="#orderDetailsModal">
                            <td>2323</td>
                            <td>John</td>
                            <td>23 87 663</td>
                            <td>Online</td>
                            <td>Ordered</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div id="orderDetailsModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Order Details: #</h3>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="order-details-part">
                            <div class="left">
                                <h3>Billing Details</h3>
                                <p>John Mathew</p>
                                <p>IG1 2NF/p>
                                <p>Street, City</p>
                                <p>Postcode:</p>
                                <p>Mob:</p>
                            </div>
                            <div class="right">
                                <form action="orders.php" method="POST">
                                    <select name="order-status" id="order-filter">
                                        <option value="-1">Select Order Status</option>
                                        <option value="2">Confirm Order</option>
                                        <option value="3">Completed</option>
                                        <option value="4">Cancel Order</option>
                                    </select>
                                    <button class="button__primary" name="update_submit">Update</button>
                                </form>
                            </div>
                        </div>
                        <div class="items-details">
                            <h3>Order Details</h3>
                            <div class="item-container">
                                <div class="left">
                                    Poduct Name X quantity
                                </div>
                                <div class="right">
                                    £ $product -> price_purchased * $product -> quantity
                                </div>
                            </div>
                            <div class="item-container">
                                <div class="left strong">
                                    Subtotal
                                </div>
                                <div class="right strong">
                                    £ $order -> final_price
                                </div>
                            </div>
                            <p class="order-notes strong">Order Notes: <span>Please wrap with a gift paper</span></p>
                            <div class="payment-mode strong">
                                Payment Type: <span class="cod">Cash on Delivery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

    </main>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/admin/orders.js"></script>
</body>
</html>

