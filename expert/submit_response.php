<?php
session_start();
include '../config_local.php';
// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Retrieve the query text from the form
    $queryID = $_POST["query_id"];
    $queryResponse = $_POST["response_message"];
    // Define the SQL query to insert the query text into the database table
    $sql = "UPDATE `queries` SET `response` = '$queryResponse', `is_solved` = '1' WHERE `query_id` = '" . $queryID. "'";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        header("Location: page-employee.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form was not submitted, show an error message or redirect as needed
    echo "Form not submitted.";
}
?>
