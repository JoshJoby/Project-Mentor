<?php
include '../config_local.php';

if (isset($_POST['task_id'])) {
    $task_id = $_POST['task_id'];

    if (isset($_POST['save_changes'])) {
        // Retrieve the values from the input fields
        $newTaskName = $_POST['new_task_name'];
        $newTaskDuration = $_POST['new_task_duration'];
        $newTaskDesc = $_POST['new_task_desc'];

        // Handle updating/uploading the PDF.
        $fileContent = (isset($_FILES["attached"]) && $_FILES["attached"]["error"] == 0 && is_uploaded_file($_FILES["attached"]["tmp_name"])) ? base64_encode(file_get_contents($_FILES["attached"]["tmp_name"])) : '';

        if ($fileContent !== false) {
            // SQL query to update the task's PDF content and other fields
            $sql = "UPDATE tasks SET task_content = ?, task_name = ?, task_duration = ?, task_desc = ? WHERE task_id = ?";

            // Prepare the SQL statement with parameters
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssi', $fileContent, $newTaskName, $newTaskDuration, $newTaskDesc, $task_id);

            if ($stmt->execute()) {
                echo "PDF and task details updated successfully.";
                header("Location: page-task"); 
            } else {
                echo "Error updating PDF and task details: " . $stmt->error;
            }

            // Close the prepared statement
            $stmt->close();
        } else {
            echo "Sorry, there was an error reading the file content.";
        }
    } elseif (isset($_POST['del_task_pdf'])) {
        // Handle deleting the PDF.
        // Set task_content to NULL or an empty value, depending on your database schema.
        $sql = "UPDATE tasks SET task_content = NULL WHERE task_id = ?";

        // Prepare the SQL statement with parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $task_id);

        if ($stmt->execute()) {
            echo "PDF deleted successfully.";
            header("Location: page-task"); 
        } else {
            echo "Error deleting PDF: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Invalid action.";
    }
}

// Close the database connection
$conn->close();
?>
