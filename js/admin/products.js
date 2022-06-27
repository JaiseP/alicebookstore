const container = $(".container")[1];

const renderProducts = () => {
    request = $.ajax({
        url: "../ajax/admin/products/getAllProducts.php",
        type: "get",
    });

    request.done(function (response) {
        let products;
        let productsRender = '';
        const res = JSON.parse(response);

        if(res.status == "success") {
            products = res.products;
            products.forEach(product => {
            productsRender += `
                <tr data-toggle="modal" data-target="#editProductModal${product.product_id}">
                    <td>${product.product_id}</td>
                    <td>${product.product_name}</td>
                    <td><img src="../assets/images/Products/${product.product_image}" alt=""></td>
                    <td>£${product.price}</td>
                    <td>${product.discount_percentage}%</td>
                    <td>${product.category_name}</td>
                </tr>
            `;
            });
            $("#product-container").html(productsRender);
        } else {
            console.log("Failed");
        }
    });
}


// Function to render Product Edit Modal
const renderEditModal = () => {
    request = $.ajax({
        url: "../ajax/admin/products/getAllProducts.php",
        type: "get",
    });

    request.done(function (response) {
        let products;
        let productsEditModalRender = '';
        const res = JSON.parse(response);

        if(res.status == "success") {
            console.log(res);
            products = res.products;
            categories = res.categories;
            products.forEach(product => {
                productsEditModalRender += `
                <div id="editProductModal${product.product_id}" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Edit Product</h3>
                                <span class="close">&times;</span>
                            </div>
                            <div class="modal-body">
                                <div class="input-group__label">
                                    <label>Product Name</label>
                                    <input type="text" value="${product.product_name}" id="updated_pname">
                                </div>
                                <div class="input-row">
                                    <div class="input-group__label">
                                        <label>Price (in £)</label>
                                        <input type="text" value="${product.price}" id="updated_pprice">
                                    </div>
                                    <div class="input-group__label">
                                        <label>Discount (in %)</label>
                                        <input type="text" value="${product.discount_percentage}" id="updated_discount">
                                    </div>
                                </div>
                                <div class="input-group__label">
                                    <label for="standard-select">Select Category</label>
                                    <div class="select">
                                    <select id="updated_category"> `;
                                    categories.forEach(category => {
                                        productsEditModalRender += `<option value="${category.category_id}" ${category.category_id == product.category_id ? 'selected' : null}> ${category.category_name}</option>`;
                                       })          
                                          
            productsEditModalRender += `</select>
                                    <span class="focus"></span>
                                    </div>
                                </div>
                                <div class="input-group__label">
                                    <label>Product Description</label>
                                    <textarea name="product_desc" id="updated_description" cols="30" rows="10">${product.description}</textarea>
                                </div>
                                <div class="input-group__label">
                                    <label>Product Image</label>
                                    <img src="../assets/images/Products/${product.product_image}" alt="<?php echo $product -> product_name ?>">
                                    <input type="file" id="updated_image" name="product_image">
                                </div>
                                <div class="button-container">
                                    <button class="danger">Delete</button>
                                    <button class="primary" onclick="updateProduct()">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
            `;
            });
            $("#editProductModalContainer").html(productsEditModalRender);
        } else {
            console.log("Failed");
        }
    });
}


// Listener for Plus Button Click
$("#addProductForm").click((e) => {
    e.preventDefault();
    let productNameError, productPriceError, productDiscountError, productDescriptionError, productImageError = false;

    const productName = $("#product_name_add");
    const productPrice = $("#product_price_add");
    const productDiscount = $("#product_discount_add");
    const productCategory = $("#product_category_add");
    const productDescription = $("#product_desc_add");
    const productImage = $("#product_image_add");

    console.log(productImage);
    reset(productName);
    reset(productPrice);
    reset(productDiscount);
    reset(productPrice);
    reset(productDescription);

    productNameError = isEmpty(productName, "Product Name is Mandatory");
    productPriceError = isEmpty(productPrice, "Product Price is Mandatory");
    productDiscountError = isEmpty(productDiscount, "Product Discount is Mandatory");
    productImageError = validateImageUploaded(productImage);

    if(!productNameError && !productPriceError && !productDiscountError && !productImageError) {
        
       uploadImage(productName.val(), productCategory.val(), productPrice.val(), productDescription.val(), productDiscount.val(), productImage);

    } 
});


// Function to edit Products
const updateProduct = () => {
    const updatedPname = $("#updated_pname");
    const updatedPrice = $("#updated_pprice");
    const updatedCategory = $("#updated_category");
    const updatedDiscount = $("#updated_discount");
    const updatedDescription = $("#updated_description");
    const updatedImage = $("#updated_image");

    reset(productName);
    reset(productPrice);
    reset(productDiscount);
    reset(productPrice);
    reset(productDescription);

    console.log(updatedPname.val());
}


// Function to upload image to server
function uploadImage(productName, productCategory, productPrice, productDescription, productDiscount, productImage) {
    var form = new FormData();
    form.append('media', productImage.prop('files')[0]);
    $.ajax({
        url: "../ajax/admin/upload.php",
        type: "post",
        processData: false,
        contentType: false,
        cache: false,
        enctype: 'multipart/form-data',
        data: form,
        success: function(response) {
            const res = JSON.parse(response);
            console.log(res);
            if(res.status == "success") {
                addNewProduct(productName, productCategory, res.image_name, productPrice, productDescription, productDiscount);
                
            } 
            return true;
        }
    });    
}

// Function to add new product
function addNewProduct(productName, productCategory, uploadedImage, productPrice, productDescription, productDiscount) {
    
    request = $.ajax({
        url: "../ajax/admin/products/addNewProduct.php",
        type: "post",
        data: {
                productName: productName, 
                productCategory: productCategory, 
                productImage: uploadedImage, 
                productPrice: productPrice, 
                productDescription: productDescription,
                productDiscount: productDiscount
            }
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        console.log(res);
        if(res.status == "success") {
            $("#addProductModal").hide();
            $("#add_product").trigger("reset");
            renderProducts();
            renderEditModal();
            toastr.success('Product Added Successfully', "Product Added");
        } 
    });
}

// Function to check a field is empty or not
function isEmpty(field, labelMessage) {
    const fieldValue = field.val();
    if(fieldValue == "" || fieldValue == undefined || fieldValue == null) {
        field.addClass("input-error");
        field.siblings("label").css("color","red");
        field.siblings(".error-label").text(labelMessage);
        field.siblings(".error-label").css("opacity", "1");
        return true;
    } 
    return false;
}

// Function to rest the applied error styles
function reset(field) {
    field.removeClass("input-error");
    field.siblings("label").css("color","#5c5b5b");
    field.siblings(".error-label").css("opacity", "0");
}

// function to check uploaded image()
function validateImageUploaded(image) {
    const validFileFormat = ["image/png", "image/jpg", "image/jpeg"];
    if(image[0].files[0] == undefined || image[0] == null) {
        image.addClass("input-error");
        image.siblings("label").css("color","red");
        image.siblings(".error-label").text("Please upload an image");
        image.siblings(".error-label").css("opacity", "1");
        return true;
    } else if(!validFileFormat.includes(image[0].files[0].type)) {
        image.addClass("input-error");
        image.siblings("label").css("color","red");
        image.siblings(".error-label").text("Please upload PNG/JPG/JPEG file");
        image.siblings(".error-label").css("opacity", "1");
        return true;
    } else if(image[0].files[0].size > 1250000) {
        image.addClass("input-error");
        image.siblings("label").css("color","red");
        image.siblings(".error-label").text("Maximum file size limit is 1Mb");
        image.siblings(".error-label").css("opacity", "1");
        return true;
    } else return false;
}


renderProducts();
renderEditModal();
