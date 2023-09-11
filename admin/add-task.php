<?php
include '../config_local.php';

$task_name = $_POST['task_name'] ?? '';
$task_duration = $_POST['task_duration'] ?? '';
$task_skills = $_POST['category'] ?? '';
$description = isset($_POST['description']) ? $_POST['description'] : ''; // Check if 'description' is set

if (isset($_FILES["attached"]) && $_FILES["attached"]["error"] == 0) {
    $fileContent = file_get_contents($_FILES["attached"]["tmp_name"]);

    if ($fileContent !== false) {
        // Create a unique task_id
        $randomnumber = random_int(100000, 999999);

        // SQL query to insert data into the tasks table
        $sql = "INSERT INTO tasks (task_id, task_name, project_id, task_desc, task_duration, task_content)
                VALUES (?, ?, 987, ?, ?, ?)";

        // Prepare the SQL statement with parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('issis', $randomnumber, $task_name, $description, $task_duration, $fileContent); // 'b' represents binary data

        if ($stmt->execute()) {
            echo "Task added successfully.";
            header("Location: page-task"); 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Sorry, there was an error reading the file content.";
    }
} else {
    // echo "Error: " . $_FILES["attached"]["error"];
}

// Close the database connection
$conn->close();
?>
