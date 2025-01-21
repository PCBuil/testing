<?php
// Predefined username and password
$user = "your_username";
$pass = "your_password";

// Function to check if entered credentials match the predefined ones
function check_credentials($input_user, $input_pass) {
    global $user, $pass;
    return ($input_user === $user && $input_pass === $pass);
}

// If the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_user = $_POST['username'];
    $input_pass = $_POST['password'];

    if (check_credentials($input_user, $input_pass)) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
