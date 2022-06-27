<?php

include '../init.php';
include './functions.php';
$query = new Queries;

if(isset($_POST['addProductSubmit'])) {
    if(isset($_FILES['product_image'])) {

        $image_upload_status = uploadImage($_FILES['product_image']);
        
    }

}

?>


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
                <div class="panel open">
                    <p class="link-active"><a href="./products.php">Products</a></p>
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
                   <h3>All Products</h3>
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
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody id="product-container">
                    
                    </tbody>
                </table>
            </div>
            <div class="add-new" data-toggle="modal" data-target="#addProductModal">
                <p>+</p>
            </div>




            <!-- Edit Category Modal -->
                    <div id="editProductModalContainer">
                    
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
                        <form id="add_product">
                            <div class="input-group__label">
                                <label>Product Name</label>
                                <input type="text" id="product_name_add">
                                <p class="error-label">Error Label</p>
                            </div>
                            <div class="input-row">
                                <div class="input-group__label">
                                    <label>Price (in £)</label>
                                    <input type="text" id="product_price_add">
                                    <p class="error-label">Error Label</p>
                                </div>
                                <div class="input-group__label">
                                    <label>Discount (in %)</label>
                                    <input type="text" id="product_discount_add">
                                    <p class="error-label">Error Label</p>
                                </div>
                            </div>
                            <div class="input-group__label">
                                <label for="standard-select">Select Category</label>
                                <div class="select">
                                <select id="product_category_add">
                                    <option value="1">Books</option>
                                    <option value="2">Gifts</option>
                                    <option value="3">Stationaries</option>
                                    <option value="4">Office Equipments</option>
                                </select>
                                <span class="focus"></span>
                                </div>
                            </div>
                            <div class="input-group__label">
                                <label>Product Description</label>
                                <textarea name="product_desc" cols="30" rows="10" id="product_desc_add"></textarea>
                                <p class="error-label">Error Label</p>
                            </div>
                            <div class="input-group__label">
                                <label>Product Image</label>
                                <!-- <img src="../assets/images/books-1.png" alt=""> -->
                                <input type="file" id="product_image_add" name="product_image">
                                <p class="error-label">Error Label</p>
                            </div>
                            <div class="button-container">
                                <button name="addProductSubmit" id="addProductForm"  class="primary">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </main>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/admin/products.js"></script>
    
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>

