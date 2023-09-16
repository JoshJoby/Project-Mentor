<?php
<<<<<<< HEAD
/*// Database credentials
 $servername = "localhost";
 $username = "root";
 $password = ""; 
 $dbname = "gridproject1";

// // Create a connection
 $conn = new mysqli($servername, $username, $password, $dbname);

// // Check the connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
*/
=======

>>>>>>> dc85f56e12fedc619ca4606fc5f461b6ff3a34e5
include '../config_local.php';


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
$sql = "SELECT * FROM admin WHERE email='$email'";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows == 0) {

    if ($password === $confpassword) {
        $randomNumber = rand(10000, 99999);
        echo $randomNumber;
<<<<<<< HEAD
        $sql = "INSERT INTO admin (admin_id, first_name, last_name, email, password, phone_number) VALUES ($randomNumber, '$fname', '$lname', '$email', '$password', '$phno')";
=======
        $sql = "INSERT INTO admin_requests (admin_request_id, first_name, last_name, email, password, phone_number) VALUES ($randomNumber, '$fname', '$lname', '$email', '$password', '$phno')";
>>>>>>> dc85f56e12fedc619ca4606fc5f461b6ff3a34e5

        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully.";
            echo "User authentication successful!";
<<<<<<< HEAD
            header("Location: admin-sign-in");
=======
            $_SESSION['signup_success'] = 'Waiting for approval from admin!';
            header("Location: ../landing");
>>>>>>> dc85f56e12fedc619ca4606fc5f461b6ff3a34e5
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        // Password is incorrect
        echo "A request with the entered email already exists!";
    }
} else {
    // User does not exist
    echo "User not found!";
}

// Close the connection
$conn->close();
?>