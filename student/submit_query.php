<?php

include '../config_local.php';
// Check if the form was submitted
if (isset($_POST["submit"])) {
    // Retrieve the query text from the form
    $queryText = $_POST["query"];

    $randomNumber = rand(10000, 99999);

    // Define the SQL query to insert the query text into the database table
    $sql = "INSERT INTO `queries` ( `student_id`, `query`, `response`, `timestamp`, `is_solved`) VALUES ('4', '$queryText','', '2023-09-20 15:55:44', '1')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        header("Location: page-desk.php");
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
