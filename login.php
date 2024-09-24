<?php
$message="Welcome to the Registration webpage";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = [];
	echo $message."<br>";
    if (empty($email)) {
        $errors['email'] = "Email or Phone is required";
    }
    if (empty($password)) {
        $errors['password'] = "Password is required";
    }
    if (empty($errors)) {
       echo "Registration successful!";
    } else {
        // If there are errors, display them back to the user
foreach ($errors as $error) {
            echo $error . "<br>";
	echo "Registration is not successful. Check the errors.";
        }
    }
}
?>
