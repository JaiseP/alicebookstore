<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alice Bookstore | Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                <li><a href="./orders.php">Orders</a></li>
                <li class="sub-menu"><a>Inventory</a></li>
                <div class="panel">
                    <p><a href="./products.php">Products</a></p>
                </div>
                <li class="sub-menu"><a>Users</a></li>
                <div class="panel open">
                    <p class="link-active"><a href="./office-users.php">Office Users</a></p>
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
                   <h3>Office Users</h3>
                   <!-- <select name="order-filter" id="order-filter">
                    <option value="all">All Orders</option>
                    <option value="processing">Processing</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                  </select> -->
               </div>

               <table class="styled-table">
                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th>Full Name</th>
                            <th>Email Id</th>
                            <th>Company</th>
                            <th>Approval Status</th>
                        </tr>
                    </thead>
                    <tbody id="all-users">
                        <tr data-toggle="modal" data-target="#editOfficeUserModal">
                            <td>2342</td>
                            <td>John Doe</td>
                            <td>john@infosys.com</td>
                            <td>Infosys</td>
                            <td>Approved</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <div class="add-new" data-toggle="modal" data-target="#addProductModal">
                <p>+</p>
            </div> -->

            <!-- Edit Category Modal -->
            <div id="editContainer">
            <div id="editOfficeUserModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Office User Approval Status</h3>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="input-group__label">
                            <label>Full Name</label>
                            <input type="text" value="Product Name">
                        </div>
                        <div class="input-row">
                            <div class="input-group__label">
                                <label>Email Id</label>
                                <input type="text" value="100">
                            </div>
                            <div class="input-group__label">
                                <label for="standard-select">Company</label>
                                <div class="select">
                                <select id="standard-select">
                                    <option value="books" selected>Books</option>
                                    <option value="gifts">Gifts</option>
                                    <option value="stationaries">Stationaries</option>
                                    <option value="office">Office Equipments</option>
                                </select>
                                <span class="focus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group__label">
                            <label for="standard-select">Approval Status</label>
                            <div class="select">
                            <select id="standard-select">
                                <option value="approved" selected>Approve</option>
                                <option value="not-approved">Not Approved</option>
                            </select>
                            <span class="focus"></span>
                            </div>
                        </div>
                        <div class="button-container">
                            <button class="danger">Delete</button>
                            <button class="primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>  

             <!-- Add Product Modal -->
             <div id="addProductModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Add Product</h3>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="input-group__label">
                            <label>Product Name</label>
                            <input type="text" value="Product Name">
                        </div>
                        <div class="input-row">
                            <div class="input-group__label">
                                <label>Price (in £)</label>
                                <input type="text" value="100">
                            </div>
                            <div class="input-group__label">
                                <label>Discount (in %)</label>
                                <input type="text" value="12">
                            </div>
                        </div>
                        <div class="input-group__label">
                            <label for="standard-select">Select Category</label>
                            <div class="select">
                            <select id="standard-select">
                                <option value="books" selected>Books</option>
                                <option value="gifts">Gifts</option>
                                <option value="stationaries">Stationaries</option>
                                <option value="office">Office Equipments</option>
                            </select>
                            <span class="focus"></span>
                            </div>
                        </div>
                        <div class="input-group__label">
                            <label>Product Description</label>
                            <textarea name="product_desc" id="" cols="30" rows="10">This is a sample text</textarea>
                        </div>
                        <div class="input-group__label">
                            <label>Product Image</label>
                            <img src="../assets/images/books-1.png" alt="">
                            <input type="file" id="myFile" name="filename">
                        </div>
                        <div class="button-container">
                            <!-- <button class="danger">Delete</button> -->
                            <button class="primary">Add Category</button>
                        </div>
                    </div>
                </div>
            </div>

    </main>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/admin/user.js"></script>
    <script>
        $(function(){
        //show modal
        $(document).on('click','#all-users tr',function(){
            var attr = $(this).attr('data-target');
        if (typeof attr !== 'undefined' && attr !== false) {
            $(attr).show();
        }
        
        })
        //hide modal
        $(document).on('click','.modal-header .close',function(){
        $(this).closest('.modal').hide()
        })
    })
    </script>
</body>
</html>