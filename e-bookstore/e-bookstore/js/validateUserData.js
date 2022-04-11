function validateUserData(registerForm) {
    var Name = document.forms["registerForm"]["fullName"].value;
    var Email = document.forms["registerForm"]["email"].value;
    var Password = document.forms["registerForm"]["password"].value;
    var ConfirmPassword = document.forms["registerForm"]["confirm_password"].value;
    var ContNo = document.forms["registerForm"]["cont_number"].value;
    var Enquiries = document.forms["registerForm"]["enquire"].value;

    if (Name=="") {
        alert("Full Name(s) are Required");
        return false;
    }
    if (Email=="") {
        alert("Email Address is required");
        return false;
    }
    if (ConfirmPassword!=Password) {
        alert("The Passwords do not match");
        return false;
    }
    if (ContNo=="") {
        alert("Contact number is required");
        return false;
    }

    // if ((registerForm.password.value != form.confirm_password.value)) {
    //     alert("Emails do not match");
    //     return false;
    // }
    else {
        return true;
    }
    }