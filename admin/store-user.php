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
                    <p><a href="./categories.php">Categories</a></p>
                    <p><a href="./products.php">Products</a></p>
                </div>
                <li class="sub-menu"><a>Users</a></li>
                <div class="panel open">
                    <p><a href="./office-users.php">Office Users</a></p>
                    <p class="link-active">Store Workers</p>
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
                   <h3>Store Users</h3>
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
                            <th>Username</th>
                            <th>Role</th>
                            <th>Active Status</th>
                        </tr>
                    </thead>
                    <tbody id="store-users">
                        <tr data-toggle="modal" data-target="#editStoreUserModal">
                            <td>2342</td>
                            <td>John Doe</td>
                            <td>john@infosys.com</td>
                            <td>Sales Assistant</td>
                            <td>Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="add-new" data-toggle="modal" data-target="#addStoreUserModal">
                <p>+</p>
            </div>

            <!-- Edit Store User Modal -->
            <div id="editStoreUserModalContainer">
                <div id="editStoreUserModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Edit Store User</h3>
                            <span class="close">&times;</span>
                        </div>
                        <div class="modal-body">
                            <div class="input-group__label">
                                <label>Full Name</label>
                                <input type="text" value="Product Name">
                                <p class="error-label">Error Label</p>
                            </div>
                            <div class="input-row">
                                <div class="input-group__label">
                                    <label>Username</label>
                                    <input type="text" value="100">
                                    <p class="error-label">Error Label</p>
                                </div>
                                <div class="input-group__label">
                                    <label>Password</label>
                                    <input type="text" value="100">
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group__label">
                                    <label for="standard-select">Role</label>
                                    <div class="select">
                                    <select id="standard-select">
                                        <option value="approved" selected>Sales Assistant</option>
                                        <option value="not-approved">Financial Assistant</option>
                                    </select>
                                    <span class="focus"></span>
                                    </div>
                                </div>
                                <div class="input-group__label">
                                    <label for="standard-select">Active Status</label>
                                    <div class="select">
                                    <select id="standard-select">
                                        <option value="approved" selected>Active</option>
                                        <option value="not-approved">Not Active</option>
                                    </select>
                                    <span class="focus"></span>
                                    </div>
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

             <!-- Add Store User Modal -->
             <div id="addStoreUserModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Add Store User</h3>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                    <div class="input-row">
                            <div class="input-group__label">
                                <label>First Name</label>
                                <input type="text" id="firstNameAdd">
                                <p class="error-label">Error Label</p>
                            </div>
                            <div class="input-group__label">
                                <label>Last Name</label>
                                <input type="text" id="lastNameAdd">
                                <p class="error-label">Error Label</p>
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group__label">
                                <label>Email Id</label>
                                <input type="text" id="emailAdd">
                                <p class="error-label">Error Label</p>
                            </div>
                            <div class="input-group__label">
                                <label>Password</label>
                                <input type="password" id="passwordAdd">
                                <p class="error-label">Error Label</p>
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group__label">
                                <label for="standard-select">Role</label>
                                <div class="select">
                                <select id="roleAdd">
                                <option value="1" selected>Admin</option>
                                    <option value="2">Sales Assistant</option>
                                    <option value="3">Financial Assistant</option>
                                </select>
                                <span class="focus"></span>
                                </div>
                            </div>
                            <div class="input-group__label">
                                <label for="standard-select">Active Status</label>
                                <div class="select">
                                <select id="statusAdd">
                                    <option value="approved" selected>Active</option>
                                    <option value="not-approved">Not Active</option>
                                </select>
                                <span class="focus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <button onClick="addNewStoreUser();" class="primary">Submit</button>
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
        $(document).on('click','#store-users tr',function(){
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