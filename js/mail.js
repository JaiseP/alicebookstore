// Contact Form Function
$("#send_message").click((e) => {
    e.preventDefault();
    let nameError, emailError, phoneError, messageError = false;

    const full_name = $("#full_name");
    const email = $("#email_address");
    const phone = $("#phone");
    const message = $("#message");

    console.log(message);

    reset(full_name);
    reset(email);
    reset(phone);
    reset(message);

    nameError = isEmpty(full_name, "Full Name field is mandatory");
    emailError = isEmpty(email, "Email is mandatory");
    phoneError = isEmpty(phone, "Phone Number is mandatory");
    messageError = isEmpty(message, "Message is mandatory");

    if(!nameError && !emailError && !phoneError && !messageError) {
        console.log("Success");
    }

}) 





// Function to check a field is empty or not
function isEmpty(field, labelMessage) {
    const fieldValue = field.val();
    if(fieldValue == "" || fieldValue == undefined || fieldValue == null) {
        field.addClass("input-error");
        field.siblings("label").css("color","black");
        field.siblings(".error-label").text(labelMessage);
        field.siblings(".error-label").css("opacity", "1");
        return true;
    } 
    return false;
}

// Function to rest the applied error styles
function reset(field) {
    field.removeClass("input-error");
    field.siblings("label").css("color","white");
    field.siblings(".error-label").css("opacity", "0");
}