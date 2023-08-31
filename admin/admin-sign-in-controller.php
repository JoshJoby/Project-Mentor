<?php
// Database credentials
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "projectmentor";

// // Create a connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

include '../config_local.php';

$email = $_POST['email']; // Assuming the email input field has the name attribute set to "email"
echo $email;
$password = $_POST['password'];
echo $password;
$sql = "SELECT * FROM admin WHERE email='$email'";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, now verify the password
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password']; // Assuming the password field in the table is named "password"

    // Verify the entered password using a suitable method (e.g., password_verify)
    if ($password === $hashedPassword) {
        // Password is correct, user authentication successful
        echo "User authentication successful!";
        header("Location: /ProjectMentor/admin");
        exit();
    } else {
        // Password is incorrect
        echo "Incorrect password!";
    }
} else {
    // User does not exist
    echo "User not found!";
}

// Close the connection
$conn->close();
?>