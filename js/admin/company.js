// function to render all company details
const renderAllCompanies = () => {
    request = $.ajax({
        url: "../ajax/admin/company/getAllCompanies.php",
        type: "get",
    });

    request.done(function (response) {
        let companyRender = '';
        const res = JSON.parse(response);

        if(res.status == "success") {
            companies = res.companies;
            companies.forEach(company => {
            companyRender += `
                <tr data-toggle="modal" data-target="#editCompanyModal${company.company_id}">
                    <td>${company.company_id}</td>
                    <td>${company.company_name}</td>
                    <td>${company.discount_offered}%</td>
                </tr>
            `;
            });
            $("#all-companies").html(companyRender);
        } else {
            console.log("Failed");
        }
    });
}


// function to render all company edit modals
const renderAllCompanyEditModals = () => {
    request = $.ajax({
        url: "../ajax/admin/company/getAllCompanies.php",
        type: "get",
    });

    request.done(function (response) {
        let companyModalRender = '';
        const res = JSON.parse(response);

        if(res.status == "success") {
            companies = res.companies;
            companies.forEach(company => {
                companyModalRender += `
                <div id="editCompanyModal${company.company_id}" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Edit Company Details</h3>
                            <span class="close">&times;</span>
                        </div>
                        <div class="modal-body">
                            
                            <div class="input-row">
                                <div class="input-group__label">
                                    <label>Company Name</label>
                                    <input type="text" value="${company.company_name}" id="${company.company_id}Name">
                                    <p class="error-label">Error Label</p>
                                </div>
                                <div class="input-group__label">
                                    <label>Discount Offered</label>
                                    <input type="number" value="${company.discount_offered}" id="${company.company_id}Discount">
                                    <p class="error-label">Error Label</p>
                                </div>
                            </div>
                            <div class="button-container">
                                <button class="danger">Delete</button>
                                <button onclick=updateCompany(${company.company_id}); class="primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            });
            $("#editCompanyModalContainer").html(companyModalRender);
        } else {
            console.log("Failed");
        }
    });
}


const updateCompany = (company_id) => {

    let companyNameError, discountOfferedError = false;
    const companyName = $(`#${company_id}Name`);
    const discountOffered = $(`#${company_id}Discount`); 

    reset(companyName);
    reset(discountOffered);

    companyNameError = isEmpty(companyName, "Company is Mandatory");
    discountOfferedError = isEmpty(discountOffered, "Discount Value is Mandatory");

    if(!companyNameError && !discountOfferedError) {
        updateCompanyData(company_id, companyName.val(), discountOffered.val());
    }

}


// AJAX call for updating company data
const updateCompanyData = (companyId, companyName, discount) => {
    request = $.ajax({
        url: "../ajax/admin/company/updateCompany.php",
        type: "post",
        data: {companyId: companyId, companyName: companyName, discount: discount}
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
           $(`#editCompanyModal${companyId}`).hide();
            renderAllCompanies();
            renderAllCompanyEditModals();
           toastr.success('Company Details Updated Successfully', "Updated");
        } else {
            toastr.error("Something Went Wrong");
        }
    });
}


// Function to Add New Company
const addNewCompany = () => {
    let companyNameError, discountOfferedError = false;
    const companyName = $("#nameAdd");
    const discountOffered = $("#discountAdd"); 

    reset(companyName);
    reset(discountOffered);

    companyNameError = isEmpty(companyName, "Company Name is Mandatory");
    discountOfferedError = isEmpty(discountOffered, "Discount Value is Mandatory");

    if(!companyNameError && !discountOfferedError) {
        addCompanyData(companyName.val(), discountOffered.val());
    }
}


// AJAX call for updating company data
const addCompanyData = (companyName, discount) => {
    request = $.ajax({
        url: "../ajax/admin/company/addCompany.php",
        type: "post",
        data: {companyName: companyName, discount: discount}
    });

    request.done(function (response) {
        const res = JSON.parse(response);
        if(res.status == "success") {
           $(`#addCompanyModal`).hide();
            renderAllCompanies();
            renderAllCompanyEditModals();
           toastr.success("New Company Added Successfully", "New Company Added");
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
    field.siblings("label").css("color","#fff");
    field.siblings(".error-label").css("opacity", "0");
}




renderAllCompanies();
renderAllCompanyEditModals();