<?php
session_start();

include '../config_local.php';

if (isset($_POST['submitButton'])) {
    $expert_id = $_POST['submitButton'];
    
    // Prepare a SELECT query to retrieve the current admin_status
    $select_sql = "SELECT expert_status FROM expert WHERE expert_id='$expert_id'";
    
    // Execute the SELECT query
    $select_result = $conn->query($select_sql);
    
    if ($select_result->num_rows == 1) {
        $row = $select_result->fetch_assoc();
        $current_status = $row['expert_status'];
        
        // Toggle the admin_status and prepare an UPDATE query
        $new_status = ($current_status == 0) ? 1 : 0;
        $update_sql = "UPDATE expert SET expert_status = '$new_status' WHERE expert_id='$expert_id'";
        
        // Execute the UPDATE query
        if ($conn->query($update_sql) === TRUE) {
            // Success: status updated
            $_SESSION['success_message'] = "Admin status updated successfully.";
            header("Location: index"); // Replace 'previous_page.php' with your actual page

        } else {
            // Error: failed to update status
            $_SESSION['error_message'] = "Error updating expert status: " . $conn->error;
        }
    } else {
        // Admin not found
        $_SESSION['error_message'] = "Admin not found with ID: $expert_id";
    }
} else {
    // No submit button clicked
    $_SESSION['error_message'] = "No submit button clicked.";
}

// Close the connection
$conn->close();

// Redirect back to the previous page
exit;
?>
