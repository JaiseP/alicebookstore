const renderCartProducts = () => {
    request = $.ajax({
        url: "ajax/cart/getAllCartProducts.php",
        type: "get",
    });

    request.done(function (response) {
        let cartProductDetails;
        let cartItemRendered = '';
        let cartItemsMobileRender = '';
        let res = JSON.parse(response);
        if(res.status == "success") {
            cartProductDetails = res.data;
            console.log(cartProductDetails);
            for (const [key, value] of Object.entries(cartProductDetails)) {
                console.log(value.product_name);
                cartItemRendered += `
                    <div class="cart-product-wrapper">
                        <div class="product-title item">${value.product_name}</div>
                        <div class="price-title item middle">£${value.price}</div>
                        <div class="qty-title item middle">
                            <div class="cart-button-wrapper">
                                <div class="counter-wrapper" data-productid = ${value.product_id}>
                                    <button class="counter counter-minus" onclick="reduceCount(${value.product_id})">-</button>
                                    <div class="counter-qty">${value.quantity}</div>
                                    <button class="counter counter-plus" onclick="addCount(${value.product_id})">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="total-title item middle">£${(value.price * value.quantity).toFixed(2)}</div>
                        <div class="remove-title item middle"><i class="fa-regular fa-trash-can" onclick="removeCart(${value.product_id})"></i></div>
                    </div>`;

                cartItemsMobileRender += `
                    <div class="item-wrapper">
                        <div class="product-name">${value.product_name}</div>
                        <div class="product-price">Price: <span>£${(value.price * value.quantity).toFixed(2)}</span></div>
                        <div class="cart-phone-bottom-wrapper">
                            <div class="counter-wrapper">
                                <button class="counter counter-minus" onclick="reduceCount(${value.product_id})">-</button>
                                <div class="counter-qty">${value.quantity}</div>
                                <button class="counter counter-plus" onclick="addCount(${value.product_id})">+</button>
                            </div>
                            <div class="remove-wrapper">
                                <i class="fa-regular fa-trash-can" onclick="removeCart(${value.product_id})></i>
                            </div>
                        </div>
                    </div>
                `;
            }

            $("#cart-items-container").html(cartItemRendered);
            $("#cart-items-container-mobile").html(cartItemsMobileRender);


        } else {
            cartItemRendered = `<p>No Items in the Cart.</p>`
            $("#cart-items-container").html(cartItemRendered);
            $("#cart-items-container-mobile").html(cartItemsMobileRender);
        }
    });
}


const addCount = (id) => {
    const productId = id;
    const ele = $("div").find(`[data-productId=${productId}]`)[0];
    const quantityEle = ele.getElementsByClassName('counter-qty')[0];
    quantityEle.innerHTML = Number(quantityEle.innerHTML) + 1;
    updateCart(productId, Number(quantityEle.innerHTML));
}

const reduceCount = (id) => {
    const productId = id;
    const ele = $("div").find(`[data-productId=${productId}]`)[0];
    const quantityEle = ele.getElementsByClassName('counter-qty')[0];
    if(Number(quantityEle.innerHTML) > 1) {
        quantityEle.innerHTML = Number(quantityEle.innerHTML) - 1
    }
    updateCart(productId, Number(quantityEle.innerHTML));
}

const updateCart = (id, qty) => {
    request = $.ajax({
        url: "ajax/cart/updateCart.php",
        type: "post",
        data: {product_id: id, quantity: qty}
    });

    request.done(function (response) {
        let res = JSON.parse(response);
        if(res.status == "success") {
            renderCartProducts();
            renderCartSummary();
            getCartCount();
        }
    });
}

const removeCart = (id) => {
    request = $.ajax({
        url: "ajax/cart/removeCart.php",
        type: "post",
        data: {product_id: id}
    });

    request.done(function (response) {
        let res = JSON.parse(response);
        if(res.status == "success") {
            renderCartProducts();
            renderCartSummary();
            getCartCount();
        }
    });
}

const renderCartSummary = () => {
    request = $.ajax({
        url: "ajax/cart/getAllCartProducts.php",
        type: "get",
    });

    request.done(function (response) {
        let sub_total_value = 0;
        let res = JSON.parse(response);
        if(res.status == "success") {
            cartProductDetails = res.data;
            for (const [key, value] of Object.entries(cartProductDetails)) {
                sub_total_value += (value.price * value.quantity);
            }

            $("#subtotal-value").html(`£${sub_total_value.toFixed(2)}`);
            $("#final-price").html(`£${sub_total_value.toFixed(2)}`);

            if(sub_total_value <= 0) {
                $("#continue-checkout").hide();
                $("#checkout-disabled").show();
            }
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
            $(".cart-count").html(res.count);
        } 
    });
}


getCartCount();