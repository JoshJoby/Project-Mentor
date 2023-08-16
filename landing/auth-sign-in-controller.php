<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gridproject1";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['loginemail']; // Assuming the email input field has the name attribute set to "loginemail"
$password = $_POST['loginpassword'];

$sql = "SELECT * FROM users WHERE email='$email'";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, now verify the password
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password']; // Assuming the password field in the table is named "password"

    // Verify the entered password using a suitable method (e.g., password_verify)
    if ($password === $hashedPassword) {
        // Password is correct, user authentication successful

        header("Location: ../"); // Redirect to the successful login page
        exit();
    } else {
        // Password is incorrect
        $_SESSION['login_notification'] = 'Incorrect password!';
        header("Location: index"); // Redirect back to the login page with notification
        exit();
    }
} else {
    // User does not exist
    $_SESSION['login_notification'] = 'User not found!';
    header("Location: index"); // Redirect back to the login page with notification
    exit();
}

// Close the connection
$conn->close();
?>