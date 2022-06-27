const renderCheckoutSummary = () => {
    request = $.ajax({
        url: "ajax/cart/getAllCartProducts.php",
        type: "get",
    });

    request.done(function (response) {
        let subTotal = 0;
        let checkoutSummartRender = ``;
        let res = JSON.parse(response);
        if(res.status == "success") {
            cartProductDetails = res.data;
            for (const [key, value] of Object.entries(cartProductDetails)) {
                subTotal += value.price * value.quantity;
                checkoutSummartRender += `
                <div class="checkout-item">
                    <div class="item-name">${value.product_name} (x ${value.quantity})</div>
                    <div class="item-value">£${value.price * value.quantity}</div>
                </div>
                `;
            }
            checkoutSummartRender += `
                <div class="checkout-item summary">
                    <div class="item-name info">Subtotal</div>
                    <div class="item-value info">${subTotal}</div>
                </div>
                <div class="checkout-item">
                    <div class="item-name">Delivery Charges</div>
                    <div class="item-value">£0.00</div>
                </div>
                <div class="checkout-item">
                    <div class="item-name">Discounts Applied</div>
                    <div class="item-value">£0.00</div>
                </div>
                <div class="checkout-item">
                    <div class="item-name final-amount">Total Amount</div>
                    <div class="item-value final-amount">£${subTotal}</div>
                </div>
            `;
            $("#checkout-summary-wrapper").html(checkoutSummartRender);
        }
    })
}

$("#checkout").click(() => {
    let fullNameError, emailAddressError, addressError, streetError, cityError, postcodeError, phoneError = false;

    const fullName = $("#full_name");
    const emailAddress = $("#email_address");
    const address = $("#address");
    const street = $("#street");
    const city = $("#city");
    const postcode = $("#postcode");
    const phoneNumber = $("#phone_number");
    const paymentType = $('input[name="payment_type"]:checked').attr('id');

    reset(fullName);
    reset(emailAddress);
    reset(address);
    reset(street);
    reset(city);
    reset(postcode);
    reset(phoneNumber);

    fullNameError = isEmpty(fullName, "Full Name is mandatory field");
    emailAddressError = isEmpty(emailAddress, "Email is mandatory field");
    addressError = isEmpty(address, "Address is mandatory field");
    streetError = isEmpty(street, "Street is mandatory field");
    cityError = isEmpty(city, "City is mandatory field");
    postcodeError = isEmpty(postcode, "Postcode is mandatory field");
    phoneError = isEmpty(phoneNumber, "Phone Number is mandatory field");

    if(!fullNameError && !emailAddressError && !addressError && !streetError && !cityError && !postcodeError && !phoneError) {
        sendCheckoutRequest(fullName.val(), emailAddress.val(), address.val(), street.val(), city.val(), postcode.val(), phoneNumber.val(), paymentType);
    }
});


// Checkout AJAX Request
const sendCheckoutRequest = (fullName, emailAddress, address, street, city, postcode, phoneNumber, paymentType) => {
    request = $.ajax({
        url: "ajax/checkout/checkout.php",
        type: "post",
        data: {"fullName": fullName, "address": address, "street": street, "city": city, "postcode": postcode, "phoneNumber": phoneNumber, "paymentType": paymentType}
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
            console.log(res);
            sendOrderMail(fullName, emailAddress);
            resetSession();
            window.location.href = './order-success.php';
        } 
    });
}

const sendOrderMail = (fullName, emailAddress) => {
    const body = `<h3>Thanks ${fullName} for your order.</h3><br>
    <p>We have received your order on Alice Bookstore. We will process the order as soon as possible.</p><br>
    <img src="http://unn-w21043121.newnumyspace.co.uk/assets/images/logo.png" style="width:200px;height:75px;"/>`;

    request = $.ajax({
        url: "ajax/mail/sendMail.php",
        type: "post",
        data: {"receipent": emailAddress, "subject": "Thanks for Your Order | Alice Bookstore", "body": body}
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
            console.log(res);
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

const resetSession = () => {
    request = $.ajax({
        url: "ajax/cart/resetCart.php",
        type: "post",
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
            console.log(res);
        } 
    });
}