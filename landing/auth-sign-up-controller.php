<?php
session_start();

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

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];   
// $phno = $_POST['phno'];
$password = $_POST['password'];
$confpassword = $_POST['confpassword'];
$userType = $_POST['userType']; // Add a userType field to the form

if ($userType === 'Student') {
    $table = 'student';
} elseif ($userType === 'Expert') {
    $table = 'expert_requests';
} else {
    // Handle invalid userType
    $_SESSION['signup_error'] = 'Invalid user type!';
    header("Location: index");
    exit();
}

$sql = "SELECT * FROM $table WHERE email='$email'";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    if ($password === $confpassword) {
        $randomNumber = random_int(100000,999999);
        $_SESSION['user_id'] = $randomNumber;
        // Use a conditional query based on the userType
        if ($userType === 'Student') {
            $sql = "INSERT INTO student (student_id, first_name, last_name, email, password) VALUES ($randomNumber, '$fname', '$lname', '$email', '$password')";
        } elseif ($userType === 'Expert') {
            $sql = "INSERT INTO expert_requests (expert_request_id, first_name, last_name, email, password) VALUES ($randomNumber, '$fname', '$lname', '$email', '$password')";
        }

        if (mysqli_query($conn, $sql)) {
            // $_SESSION['signup_success'] = 'Registration successful!';
            if ($userType === 'Student') {
                header("Location: student-regn");
            } elseif ($userType === 'Expert') {
                header("Location: expert-regn");
            }
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
