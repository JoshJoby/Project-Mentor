<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "projectmentor";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$password = $_POST['password'];
$confpassword = $_POST['confpassword'];

$sql = "SELECT * FROM student WHERE email='$email'"; 

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    if ($password === $confpassword) {
        $randomNumber = rand(10000, 99999);
        $sql = "INSERT INTO student (student_id, first_name, last_name, email, password, phone_number) VALUES ($randomNumber, '$fname', '$lname', '$email', '$password', '$phno')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['signup_success'] = 'Registration successful!';
            header("Location: index");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        $_SESSION['signup_error'] = 'Passwords do not match!';
        header("Location: index");
        exit();
    }
} else {
    $_SESSION['signup_error'] = 'Email Already taken!';
    header("Location: index");
    exit();
}

// Close the connection
$conn->close();
?>
