<!DOCTYPE HTML>
<html>
<head>
    <title>Form Validation with JavaScript</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<h2>JavaScript Form Validation Example</h2>
<form name="myForm" onsubmit="return validateForm()">
    Name: <input type="text" name="name">
    <span class="error" id="nameErr"></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error" id="emailErr"></span>
    <br><br>
    Password: <input type="password" name="password">
    <span class="error" id="passwordErr"></span>
    <br><br>
    Confirm Password: <input type="password" name="confirmPassword">
    <span class="error" id="confirmPasswordErr"></span>
    <br><br>
    <input type="submit" value="Submit">
</form>

<script>
function validateForm() {
    let valid = true;
    
    // Clear previous error messages
    document.getElementById("nameErr").innerHTML = "";
    document.getElementById("emailErr").innerHTML = "";
    document.getElementById("passwordErr").innerHTML = "";
    document.getElementById("confirmPasswordErr").innerHTML = "";

    // Get form values
    const name = document.forms["myForm"]["name"].value;
    const email = document.forms["myForm"]["email"].value;
    const password = document.forms["myForm"]["password"].value;
    const confirmPassword = document.forms["myForm"]["confirmPassword"].value;

    // Validate name
    if (name == "") {
        document.getElementById("nameErr").innerHTML = "Name is required";
        valid = false;
    }

    // Validate email
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email == "") {
        document.getElementById("emailErr").innerHTML = "Email is required";
        valid = false;
    } else if (!email.match(emailPattern)) {
        document.getElementById("emailErr").innerHTML = "Invalid email format";
        valid = false;
    }

    // Validate password
    if (password == "") {
        document.getElementById("passwordErr").innerHTML = "Password is required";
        valid = false;
    }

    // Validate confirm password
    if (confirmPassword == "") {
        document.getElementById("confirmPasswordErr").innerHTML = "Confirm Password is required";
        valid = false;
    } else if (password !== confirmPassword) {
        document.getElementById("confirmPasswordErr").innerHTML = "Passwords do not match";
        valid = false;
    }

    // If all validations are passed
    if (valid) {
        alert("Formulir berhasil dikirim");
    }

    return valid;
}
</script>

</body>
</html>
