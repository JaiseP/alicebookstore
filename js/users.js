// Login user event handling
$("#login_submit").click((event) => {
    event.preventDefault();

    let emailError, passwordError = false;

    const email = $("#login_email");
    const password = $("#login_password");

    reset(email);
    reset(password);

    emailError = isEmpty(email, "Email is Mandatory");
    passwordError = isEmpty(password, "Password is Mandatory");

    if(!emailError) {
        emailError = validateEmail(email);
    }

    if(!emailError && !passwordError) {
        sendLoginRequest(email.val(), password.val());
    }
});

// Register user event handling
$("#register_submit").click((event) => {
    event.preventDefault();
    let firstNameError, lastNameError, registerEmailError, registerPasswordError, repeatPasswordError = false;
    const firstName = $("#first_name");
    const lastName = $("#last_name");
    const email = $("#email_address");
    const password = $("#password");
    const repeatPassword = $("#password_repeat");
    const company = $("#company-select");
    reset(firstName);
    reset(lastName);
    reset(email);
    reset(password);
    reset(repeatPassword);
    firstNameError = isEmpty(firstName, "First Name is Mandatory");
    lastNameError = isEmpty(lastName, "Last Name is Mandatory");
    registerEmailError = isEmpty(email, "Email is Mandatory");
    registerPasswordError = isEmpty(password, "Password Name is Mandatory");
    repeatPasswordError = isEmpty(repeatPassword, "Please repeat password");

    if(!registerPasswordError) {
        registerPasswordError = validatePassword(password, repeatPassword);
    }

    if(!registerEmailError) {
        registerEmailError = validateEmail(email);
    }
    
    if(!firstNameError && !lastNameError && !registerEmailError && !repeatPasswordError) {
        sendRegisterRequest(firstName.val(), lastName.val(), email.val(), password.val(), company.val());
    }
})


// Logout Function
$("#logout_button").click(() => {
    request = $.ajax({
        url: "ajax/auth/logout.php",
        type: "post",
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
            console.log("Logout");
            window.location.href = "./login.php";
        } 
    });
})


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


// Login ajax request
function sendLoginRequest(email, password) {
    request = $.ajax({
        url: "ajax/auth/login.php",
        type: "post",
        data: {email: email, password: password}
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
            console.log(res);
            storeLoginSession(res.data);
        } else {
            $(".form-label").css("display", "block");
            $(".form-label").text("Bad Credentials. Please Try Again.");
        }
    });
}

// Register ajax request
function sendRegisterRequest(firstName, lastName, email, password, company) {
    request = $.ajax({
        url: "ajax/auth/register.php",
        type: "post",
        data: {
            firstName: firstName, 
            lastName: lastName,
            email: email,
            password: password,
            company: company 
        }
    });

    request.done(function (response){
        const res = JSON.parse(response);
        if(res.status == "success") {
            window.location.href = './index.php?register=success';
        } else if(res.status == "already_exists") {
            $(".register-form-label").css("display", "block");
            $(".register-form-label").text("User Already Exists. Please Login.");
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    });
}

// 
function storeLoginSession(data) {
    request = $.ajax({
        url: "ajax/auth/loginSession.php",
        type: "post",
        data: {
            firstName: data.first_name, 
            lastName: data.last_name,
            userId: data.user_id,
            email: data.email_id,
            company_name: data.company_name,
            company_id: data.company_id,
        }
    });

    request.done(function (response){
        const res = JSON.parse(response);
        if(res.status == "success") {
            window.location.href = './index.php';
        }
    });
}


// Function to validate password
function validatePassword(password, repeatPassword) {

    let errorStatus = false;
    
    if(password.val().length < 6) {
        password.addClass("input-error");
        password.siblings("label").css("color","red");
        password.siblings(".error-label").text("Passwor must have atleat 6 characters long");
        password.siblings(".error-label").css("opacity", "1");
        errorStatus = true;
    }

    if(password.val() != repeatPassword.val()) {
        repeatPassword.addClass("input-error");
        repeatPassword.siblings("label").css("color","red");
        repeatPassword.siblings(".error-label").text("Password didn't match");
        repeatPassword.siblings(".error-label").css("opacity", "1");
        error = true;
    }

    return errorStatus;
    
}


// Code credits: https://www.w3resource.com/javascript/form/email-validation.php
function validateEmail(email) {
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.val()))
  {
    return false;
  }
    email.addClass("input-error");
    email.siblings("label").css("color","red");
    email.siblings(".error-label").text("Please enter a valid email address");
    email.siblings(".error-label").css("opacity", "1");
    return true;
}
