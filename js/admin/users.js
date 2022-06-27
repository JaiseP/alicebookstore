$("#admin_login").click((e) => {
    e.preventDefault();
    let emailError, passwordError = false;

    const email = $("#admin-email");
    const password = $("#admin-password");

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

})


function sendLoginRequest(email, password) {
    request = $.ajax({
        url: "../ajax/admin/auth/login.php",
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


// Function to store login details in session storage
function storeLoginSession(data) {
    request = $.ajax({
        url: "../ajax/admin/auth/loginSession.php",
        type: "post",
        data: {
            firstName: data.first_name, 
            lastName: data.last_name,
            userId: data.user_id,
            email: data.email_id,
            privilege: data.privilege,
        }
    });

    request.done(function (response){
        const res = JSON.parse(response);
        if(res.status == "success") {
            window.location.href = './dashboard.php';
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
    field.siblings("label").css("color","#fff");
    field.siblings(".error-label").css("opacity", "0");
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
   