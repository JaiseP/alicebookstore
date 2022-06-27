// Render all products based on category
const renderProducts = (id, sortBy) =>  {
    request = $.ajax({
        url: "ajax/products/getAllProducts.php",
        type: "get",
        data: {id: id, sortBy: sortBy}
    });

    request.done(function (response) {
        let products;
        let productsRender = '';
        let res = JSON.parse(response);
        
        if(res.status == 'success') {
            console.log(res);
            products = res.data;
            products.forEach(product => {
                productsRender += `
                    <div class="product-card">
                    <a href="./product-details.php?id=${product.product_id}">
                        <i class="fa-regular fa-heart"></i>
                        <p class="offer-tag">${product.discount_percentage}% Off</p>
                        <img src="./assets/images/Products/${product.product_image}" alt="Product Image">
                        <p class="product-title"><a href="./product-details.php?id=${product.product_id}">${product.product_name}</a></p>
                        <div class="star-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <p>4/5(10)</p>
                        </div>`;
                        let productPrice, discountedPrice = 0;

                        // If user is office user, company discount applies
                        if(res.login_status) {
                            productPrice = product.price - ((product.price * res.company_discount)/100);
                        } else {
                            productPrice = product.price;
                        }

                        // Normal discount for all users applies here
                        if(product.discount_percentage > 0) {
                            discountedPrice = productPrice - ((productPrice * product.discount_percentage)/100);
                            productsRender += `<p class="final-price">£${discountedPrice}<span class="original-price">£${productPrice}</span></p>`;
                        } else {
                            productsRender += `<p class="final-price">£${productPrice}</p>`;
                        }
                        productsRender += `
                        </a>
                        </div>
                `;
            });

            $("#products-container").html(productsRender);
        }
        
    });
}


// Render product details
const renderProductDetails = (id) => {
    request = $.ajax({
        url: "ajax/products/getProductDetails.php",
        type: "get",
        data: {id: id}
    });
    request.done(function (response) {
        let productDetails;
        let productDetailsRender = '';
        let res = JSON.parse(response);
        if(res.status == 'success') {
            console.log(res);
            productDetails = res.data;
            productDetailsRender += `
                <div class="prod-image">
                    <img src="./assets/images/Products/${productDetails.product_image}" alt="Product Image">
                </div>
                <div class="prod-desc">
                    <h2>${productDetails.product_name}</h2>
                    <p class="sub-line">By Graham Norton</p>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <p>4/5 (10)</p>
                    </div> `;

                    let productPrice, discountedPrice = 0;

                    // If user is office user, company discount applies
                    if(res.login_status) {
                        productPrice = productDetails.price - ((productDetails.price * res.company_discount)/100);
                    } else {
                        productPrice = productDetails.price;
                    }

                    // Normal discount for all users applies here
                    if(productDetails.discount_percentage > 0) {
                        discountedPrice = productPrice - ((productPrice * productDetails.discount_percentage) / 100);
                        productDetailsRender += `<div class="price-wrapper">
                        <p>£${discountedPrice}<span class="original-price">£${productPrice}</span></p>
                        <div class="offer-tag">${productDetails.discount_percentage}% Off</div>
                    </div> `;
                    } else {
                        productDetailsRender += `
                            <div class="price-wrapper">
                                <p>£${productPrice}</p>
                            </div>
                        `;
                    }
                    productDetailsRender += `
                    <p class="desc">${productDetails.description}</p>
                    <div class="cart-button-wrapper" 
                        data-productId=${productDetails.product_id}
                        data-productPrice=${discountedPrice > 0 ? discountedPrice : productPrice}>
                        <div class="counter-wrapper">
                            <a class="counter counter-minus">-</a>
                            <div class="counter-qty">1</div>
                            <a class="counter counter-plus">+</a>
                        </div> `;
                        productDetailsRender += `
                        <button class="button__primary" id="add_to_cart">Add to Cart</button>
                        <button class="button__primary" id="remove_from_cart">Remove From Cart</button>
                    </div>
                </div>
            `;
            $('#product-details').html(productDetailsRender);


            // Add to Cart Counter Functions
            $(".counter-plus").click(() => {
                let counterValue = parseInt($(".counter-qty").html());
                $(".counter-qty").html(counterValue + 1);
            });

            $(".counter-minus").click(() => {
                let counterValue = parseInt($(".counter-qty").html());
                if(counterValue > 1) {
                    $(".counter-qty").html(counterValue - 1);
                }
            })

            $("#remove_from_cart").hide();

            addToCart();

            removeFromCart();

            cartButtonRender(id);
            
        }
    });
    
}



$("#sort-select").change(() => {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get("id");
    renderProducts(id, $("#sort-select").val());
})



const addToCart = () => {
    $("#add_to_cart").click(() => {
        const productId = $("#add_to_cart").parent().attr('data-productId');
        const productPrice = $("#add_to_cart").parent().attr('data-productPrice');
        const parentElement = $("#add_to_cart").parent()[0];
        const quantity = parentElement.getElementsByClassName('counter-qty')[0].innerHTML;
        
        request = $.ajax({
            url: "ajax/products/addToCart.php",
            type: "post",
            data: {id: productId, qty: quantity, productPrice: productPrice}
        });

        request.done(function (response) {
            let res = JSON.parse(response);
            if(res.status == 'success') {
                console.log(res);
                cartButtonRender(productId);
                getCartCount();
                toastr.success('Product Added to Cart', "Product Added");
            }
        });
        
    });
}

const removeFromCart = () => {
    $("#remove_from_cart").click(() => {
        const productId = $("#remove_from_cart").parent().attr('data-productId');
        request = $.ajax({
            url: "ajax/products/removeFromCart.php",
            type: "post",
            data: {id: productId}
        });

        request.done(function (response) {
            let res = JSON.parse(response);
            if(res.status == 'success') {
                console.log(res);
                cartButtonRender(productId);
                getCartCount();
                toastr.warning('Product Removed From Cart', "Product Removed");
            }
        });
    }) 
}


const cartButtonRender = (id) => {
    request = $.ajax({
        url: "ajax/products/cartButtonRender.php",
        type: "post",
        data: {id: id}
    });

    request.done(function (response) {
        let res = JSON.parse(response);
        if(res.status == 'added') {
            $("#add_to_cart").hide();
            $("#remove_from_cart").show();
        } else {
            $("#remove_from_cart").hide();
            $("#add_to_cart").show();
        }
    });
}


const getCartCount = () => {
    request = $.ajax({
        url: "ajax/cart/getCartCount.php",
        type: "get",
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
            console.log(res);
            console.log($(".cart-count"));
            $(".cart-count").html(String(res.count));
        } 
    });
}


getCartCount();
