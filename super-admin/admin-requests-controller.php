<?php

// session_start();
include '../config_local.php';

$sql = "SELECT * FROM admin_requests";

$result = $conn->query($sql);

// Initialize an array to store rows
$rows = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    // Store the rows array in a session variable
    // session_start();
    $_SESSION['admin_request_rows'] = $rows;
}
else{
    unset($_SESSION['admin_request_rows']);
}

// Close the connection
$conn->close();

?>
