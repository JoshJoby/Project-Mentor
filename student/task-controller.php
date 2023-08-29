<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectmentor";
date_default_timezone_set('Asia/Kolkata');

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $currentDate = date("Y-m-d");
// $current_time = date("H:i:s");

$sql = "SELECT *
FROM tasks";


// echo $sql;   
// Execute the query
$result = $conn->query($sql);

// Initialize an array to store rows
$rows = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    // Store the rows array in a session variable
    // session_start();
    $_SESSION['task_rows'] = $rows;
}
else{
    unset($_SESSION['task_rows']);
}

// Close the connection
$conn->close();
?>
