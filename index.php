<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Event Handling Example</title>
</head>
<body>
<h1>PHP Event Handling Example</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "<p> $ helllo, name!</p>;
}
?>
<form id="registrationForm">
    <form method="post">
    <h2>Registration Form</h2>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit">Register</button>
  </form>
  
  <form id="loginForm">
    <form method="post">
    <h2>Login Form</h2>
    <label for="loginUsername">Username:</label>
    <input type="text" id="loginUsername" name="loginUsername" required><br><br>
    <label for="loginPassword">Password:</label>
    <input type="password" id="loginPassword" name="loginPassword" required><br><br>
    <button type="submit">Login</button>
</form>
</body>
</html>
