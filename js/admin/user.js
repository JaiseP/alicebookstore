
// function to render all office users 
const renderAllOfficeUsers = () => {
    request = $.ajax({
        url: "../ajax/admin/users/getAllOfficeUsers.php",
        type: "get",
    });

    request.done(function (response) {
        let users;
        let usersRender = '';
        const res = JSON.parse(response);

        if(res.status == "success") {
            users = res.users;
            users.forEach(user => {
            usersRender += `
                <tr data-toggle="modal" data-target="#editOfficeUserModal${user.user_id}">
                    <td>${user.user_id}</td>
                    <td>${user.first_name}</td>
                    <td>${user.email_id}</td>
                    <td>${user.company_name}</td>
                    <td>${user.is_approved == 1 ? 'Approved' : 'Not Approved'}</td>
                </tr>
            `;
            });
            $("#all-users").html(usersRender);
        } else {
            console.log("Failed");
        }
    });
    
}


// function to render all store users
const renderAllStoreUsers = () => {
    request = $.ajax({
        url: "../ajax/admin/users/getAllStoreUsers.php",
        type: "get",
    });

    request.done(function (response) {
        let users;
        let usersRender = '';
        const res = JSON.parse(response);

        if(res.status == "success") {
            users = res.users;
            users.forEach(user => {
            usersRender += `
                <tr data-toggle="modal" data-target="#editStoreUserModal${user.user_id}">
                    <td>${user.user_id}</td>
                    <td>${user.first_name}</td>
                    <td>${user.email_id}</td>
                    <td>${user.privilege == 1 ? 'Admin' : user.privilege == 2 ? 'Sales Assistant' : 'Financial Assistant'}</td>
                    <td>${user.is_active == 1 ? 'Active' : 'Not Active'}</td>
                </tr>
            `;
            });
            $("#store-users").html(usersRender);
        } else {
            console.log("Failed");
        }
    });
}


// function to render all office user edit modal
const renderEditOfficeUsersModal = () => {
    request = $.ajax({
        url: "../ajax/admin/users/getAllOfficeUsers.php",
        type: "get",
    });

    request.done(function (response) {
        let users;
        let usersEditModalRender = '';
        const res = JSON.parse(response);

        if(res.status == "success") {
            users = res.users;
            users.forEach(user => {
                usersEditModalRender += `
                <div id="editOfficeUserModal${user.user_id}" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Office User Approval Status</h3>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="input-group__label">
                            <label>Full Name</label>
                            <input type="text" value="${user.first_name + ' ' +  user.last_name}" readonly>
                        </div>
                        <div class="input-row">
                            <div class="input-group__label">
                                <label>Email Id</label>
                                <input type="text" value="${user.email_id}" readonly>
                            </div>
                            <div class="input-group__label">
                                <label for="approval-status${user.user_id}">Approval Status</label>
                                <div class="select">
                                <select id="approval-status${user.user_id}">
                                    <option value="1" ${user.is_approved == 1 ? '' : 'selected'}>Approve</option>
                                    <option value="0" ${user.is_approved == 0 ? '' : 'selected'}>Disapprove</option>
                                </select>
                                <span class="focus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <button id="delete" class="danger">Delete</button>
                            <button onclick="updateOfficeUser(${user.user_id})" class="primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            `;
            });
            $("#editContainer").html(usersEditModalRender);
        } else {
            console.log("Failed");
        }
    });
    
}

// function to render all edit store user modal
const renderEditStoreUsersModal = () => {
    request = $.ajax({
        url: "../ajax/admin/users/getAllStoreUsers.php",
        type: "get",
    });

    request.done(function (response) {
        let users;
        let usersRender = '';
        const res = JSON.parse(response);

        if(res.status == "success") {
            users = res.users;
            users.forEach(user => {
            usersRender += `
            <div id="editStoreUserModal${user.user_id}" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Edit Store User</h3>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                    <div class="input-row">
                        <div class="input-group__label">
                            <label>First Name</label>
                            <input type="text" value="${user.first_name}" id="${user.user_id}EditFirstName">
                            <p class="error-label">Error Label</p>
                        </div>
                        <div class="input-group__label">
                            <label>Last Name</label>
                            <input type="text" value="${user.last_name}" id="${user.user_id}EditLastName">
                        </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group__label">
                                <label>Email Id</label>
                                <input type="text" value="${user.email_id}" id="${user.user_id}EditEmail">
                                <p class="error-label">Error Label</p>
                            </div>
                            <div class="input-group__label">
                                <label>Reset Password</label>
                                <input type="text" placeholder="Enter New Password" value="" id="${user.user_id}EditPassword">
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group__label">
                                <label for="standard-select">Role</label>
                                <div class="select">
                                <select id="${user.user_id}EditRole">
                                    <option value="1" ${user.privilege == 1 ? 'selected' : ''}>Admin</option>
                                    <option value="2" ${user.privilege == 2 ? 'selected' : ''}>Sales Assistant</option>
                                    <option value="3" ${user.privilege == 3 ? 'selected' : ''}>Financial Assistant</option>
                                </select>
                                <span class="focus"></span>
                                </div>
                            </div>
                            <div class="input-group__label">
                                <label for="standard-select">Active Status</label>
                                <div class="select">
                                <select id="${user.user_id}EditStatus">
                                    <option value="1" ${user.is_active == 1 ? 'selected' : ''}>Active</option>
                                    <option value="0" ${user.is_active == 0 ? 'selected' : ''}>Not Active</option>
                                </select>
                                <span class="focus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <button class="danger">Delete</button>
                            <button onclick="updateStoreUser(${user.user_id})" class="primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            `;
            });
            $("#editStoreUserModalContainer").html(usersRender);
        } else {
            console.log("Failed");
        }
    });
}



// function to update office user
const updateOfficeUser = (user_id) => {
    const approval_value = $(`#approval-status${user_id}`).val();
    request = $.ajax({
        url: "../ajax/admin/users/updateOfficeUser.php",
        type: "post",
        data: {userId: user_id, approvalValue: approval_value}
    });

    request.done(function (response) {
        let users;
        const res = JSON.parse(response);

        if(res.status == "success") {
           $(`#editOfficeUserModal${user_id}`).hide();
           renderAllOfficeUsers();
            renderEditOfficeUsersModal();
           toastr.success('User Details Updated Successfully', "Updated");
        } else {
            toastr.error("Something Went Wrong");
        }
    });
}


// function to update store user
const updateStoreUser = (userId) => {

    let firstNameError, LastNameError, emailError = false; 

    const firstName = $(`#${userId}EditFirstName`);
    const lastName = $(`#${userId}EditLastName`);
    const email = $(`#${userId}EditEmail`);
    const password = $(`#${userId}EditPassword`);
    const role = $(`#${userId}EditRole`);
    const status = $(`#${userId}EditStatus`);

    reset(firstName);
    reset(lastName);
    reset(email);

    firstNameError = isEmpty(firstName, "First Name is Mandatory");
    LastNameError = isEmpty(lastName, "Last Name is Mandatory");
    emailError = isEmpty(email, "Email is Mandatory");

    if(!firstNameError && !LastNameError && !emailError) {
        updateStoreUserData(userId, firstName.val(), lastName.val(), email.val(), password.val(), role.val(), status.val());
    }


}


// ajax call update store users
const updateStoreUserData = (userId, firstName, lastName, email, password, role, status) => {
    request = $.ajax({
        url: "../ajax/admin/users/updateStoreUser.php",
        type: "post",
        data: {userId: userId, firstName: firstName, lastName: lastName, email: email, password: password, role: role, status: status}
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
           $(`#editStoreUserModal${userId}`).hide();
            renderAllStoreUsers();
            renderEditStoreUsersModal();
           toastr.success('User Details Updated Successfully', "Updated");
        } else {
            toastr.error("Something Went Wrong");
        }
    });
}


// function to add new user
const addNewStoreUser = () => {
    let firstNameError, LastNameError, emailError, passwordError = false; 

    const firstName = $("#firstNameAdd");
    const lastName = $("#lastNameAdd");
    const email = $("#emailAdd");
    const password = $("#passwordAdd");
    const role = $("#roleAdd");
    const status = $("#statusAdd");

    reset(firstName);
    reset(lastName);
    reset(email);
    reset(password)

    firstNameError = isEmpty(firstName, "First Name is Mandatory");
    LastNameError = isEmpty(lastName, "Last Name is Mandatory");
    emailError = isEmpty(email, "Email is Mandatory");
    passwordError = isEmpty(password, "Password is Mandatory");

    if(!firstNameError && !LastNameError && !emailError && !passwordError) {
        addNewStoreUserData(firstName.val(), lastName.val(), email.val(), password.val(), role.val(), status.val());
    }
}


const addNewStoreUserData = (firstName, lastName, email, password, role, status) => {
    request = $.ajax({
        url: "../ajax/admin/users/addStoreUser.php",
        type: "post",
        data: {
            firstName: firstName,
            lastName: lastName,
            email: email, 
            password: password,
            role: role,
            status: status
        }
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
           $(`#addStoreUserModal`).hide();
            renderAllStoreUsers();
            renderEditStoreUsersModal();
           toastr.success('User Added Successfully', "User Added");
        } else {
            toastr.error("Something Went Wrong");
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




renderAllOfficeUsers();

renderEditOfficeUsersModal();

renderAllStoreUsers();

renderEditStoreUsersModal();