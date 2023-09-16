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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $projectID = $_POST["project_ID"];
    $adminID = $_POST["ADMIN_ID"];
    $projectName = $_POST["project_NAME"];
    $projectDescription = $_POST["PROJECT_DESCRIPTION"];
    $projectCreationDate = $_POST["p_creation_date"];
    $projectDuration = $_POST["p_duration"];
    $projectTechnology = $_POST["p_technology"];

    // SQL query to insert data into the 'project' table
    $sql = "INSERT INTO projects (project_id, admin_id, 	p_name, p_desc, p_creation_date, p_duration, p_technology)
            VALUES ('$projectID', '$adminID', '$projectName', '$projectDescription', '$projectCreationDate', '$projectDuration', '$projectTechnology')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>
