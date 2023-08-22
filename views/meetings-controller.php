<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gridproject1";
date_default_timezone_set('Asia/Kolkata');

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$currentDate = date("Y-m-d");
$current_time = date("H:i:s");

$sql = "SELECT *
FROM meeting
WHERE CONCAT(meeting_date, ' ', start_time) >= '" . $currentDate . " " . $current_time . "'
ORDER BY CONCAT(meeting_date, ' ', start_time) ASC;";

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
    $_SESSION['meeting_rows'] = $rows;
}
else{
    session_unset();
}

// Close the connection
$conn->close();
?>
