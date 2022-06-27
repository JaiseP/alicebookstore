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
                <li class="link-active"><a href="#">Dashboard</a></li>
                <li><a href="./orders.php">Orders</a></li>
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
                <!-- Order Summary -->
                <div class="order-summary">
                    <div class="summary-card new">
                        <h3>10</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="summary-card processing">
                        <h3>05</h3>
                        <p>Processing Orders</p>
                    </div>
                    <div class="summary-card completed">
                        <h3>54</h3>
                        <p>Completed Orders</p>
                    </div>
                    <div class="summary-card cancelled">
                        <h3>08</h3>
                        <p>Cancelled Orders</p>
                    </div>
                </div>
                <!-- General Summary -->
                <div class="general-summary">
                    <div class="gn-summary-card">
                        <h3>£560.25</h3>
                        <p>Revenue Generated</p>
                        <img src="../assets/images/increased-revenue.png" alt="">
                    </div>
                    <div class="gn-summary-card">
                        <h3>102</h3>
                        <p>Users Registered</p>
                        <img src="../assets/images/user-gray.png" alt="">
                    </div>
                    <div class="gn-summary-card">
                        <h3>64</h3>
                        <p>Products Added</p>
                        <img src="../assets/images/stock.png" alt="">
                    </div>
                </div>
                <!-- Table Comparison -->
                <div class="comparison-wrapper">
                    <div class="left">
                        <h4>Best Selling Products</h4>
                        <div class="row">
                            <div class="key">
                                Product Name
                            </div>
                            <div class="value">
                                20 Orders
                            </div>
                        </div>
                        <div class="row">
                            <div class="key">
                                Product Name
                            </div>
                            <div class="value">
                                20 Orders
                            </div>
                        </div>
                        <div class="row">
                            <div class="key">
                                Product Name
                            </div>
                            <div class="value">
                                20 Orders
                            </div>
                        </div>
                        <div class="row">
                            <div class="key">
                                Product Name
                            </div>
                            <div class="value">
                                20 Orders
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <h4>Most Ordered Customers</h4>
                        <div class="row">
                            <div class="key">
                                Customer Name
                            </div>
                            <div class="value">
                                20 Orders
                            </div>
                        </div>
                        <div class="row">
                            <div class="key">
                                Customer Name
                            </div>
                            <div class="value">
                                20 Orders
                            </div>
                        </div>
                        <div class="row">
                            <div class="key">
                                Customer Name
                            </div>
                            <div class="value">
                                20 Orders
                            </div>
                        </div>
                        <div class="row">
                            <div class="key">
                                Customer Name
                            </div>
                            <div class="value">
                                20 Orders
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>