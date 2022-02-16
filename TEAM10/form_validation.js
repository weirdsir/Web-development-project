function validateForm() {
    let x = document.forms["form"]["username"].value;
    if (x == "") {
        alert("This must be filled out");
        return false;
    }
}

function validateEmail() {
    var emailID = document.forms["form"]["email"].value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");

    if (atpos < 1 || (dotpos - atpos < 2)) {
        alert("Please enter correct email ID")
        document.myForm.EMail.focus();
        return false;
    }
    return (true);
}