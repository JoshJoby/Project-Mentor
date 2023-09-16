<?php
// Database credentials
// $servername = "localhost";
// $username = "root";
// $password = ""; 
// $dbname = "gridproject1";

// // Create a connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
session_start();
include '../config_local.php';


$fname = $_POST['fname']; // Assuming the email input field has the name attribute set to "email"
$lname = $_POST['lname']; // Assuming the email input field has the name attribute set to "email"
$email = $_POST['email']; // Assuming the email input field has the name attribute set to "email"
$phno = $_POST['phno']; // Assuming the email input field has the name attribute set to "email"
$password = $_POST['password'];
$confpassword = $_POST['confpassword'];
$photo = $_FILES["photo"]["name"];
$expertiseAreas = $_POST["selectedValues"];

// Check if a file has been uploaded
if (isset($_FILES["photo"])) {
    $file = $_FILES["photo"];

    // Check for errors during the file upload
    if ($file["error"] === 0) {
        // Read the contents of the uploaded file
        $imageData = file_get_contents($file["tmp_name"]);

        // Prepare and execute the SQL query to insert data into the database
        $sql = "INSERT INTO admin (admin_id, email, password, first_name, last_name, phone_number, admin_photo, admin_tech_stack) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $admin_id = rand(10000, 99999);
            $stmt->bind_param("dsssssss", $admin_id, $email, $password, $fname, $lname, $phno, $imageData, $expertiseAreas);

            if ($stmt->execute()) {
                // Registration successful
                header("Location: ../admin/admin-sign-in"); // Redirect to a success page
                exit();
            } else {
                // Handle database error
                echo "Error: " . $stmt->error;
            }

            // Close the prepared statement
            $stmt->close();
        } else {
            // Handle prepared statement error
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error during file upload: " . $file["error"];
    }
}


// Close the database connection
$conn->close();
?>