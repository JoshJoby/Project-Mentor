<?php
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

$fname = $_POST['fname']; // Assuming the email input field has the name attribute set to "email"
echo $fname;
$lname = $_POST['lname']; // Assuming the email input field has the name attribute set to "email"
echo $lname;
$email = $_POST['email']; // Assuming the email input field has the name attribute set to "email"
echo $email;
$phno = $_POST['phno']; // Assuming the email input field has the name attribute set to "email"
echo $phno;
$password = $_POST['password'];
echo $password;
$confpassword = $_POST['confpassword'];
echo $confpassword;
$sql = "SELECT * FROM users WHERE email='$email'"; 

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows == 0) {

    if ($password === $confpassword) {
        $randomNumber = rand(10000, 99999);
        echo $randomNumber;
        $sql = "INSERT INTO users (user_id, first_name, last_name, email, password, phone_number) VALUES ($randomNumber, '$fname', '$lname', '$email', '$password', '$phno')";

        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully.";
            echo "User authentication successful!";
            header("Location: auth-sign-in");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        // Password is incorrect
        echo "A User with the entered email already exists!";
    }
} else {
    // User does not exist
    echo "User not found!";
}

// Close the connection
$conn->close();
?>