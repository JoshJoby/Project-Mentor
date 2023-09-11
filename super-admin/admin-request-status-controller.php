<?php
session_start();

include '../config_local.php';

if (isset($_POST['submitAcceptButton'])) {
    $admin_id = $_POST['submitAcceptButton'];

    // Retrieve the row from admin_requests
    $select_sql = "SELECT * FROM admin_requests WHERE admin_request_id='$admin_id'";
    $select_result = $conn->query($select_sql);

    if ($select_result->num_rows == 1) {
        $row = $select_result->fetch_assoc();
        $randomnumber = random_int(100000, 999999);
        // Insert the row into admin with admin_status set to 1
        $insert_sql = "INSERT INTO admin (admin_id, first_name, last_name, email, password, phone_number, admin_status) VALUES (?, ?, ?, ?, ?, ?, 1)";
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("dsssss", $randomnumber, $row['first_name'], $row['last_name'], $row['email'], $row['password'], $row['email']);
        
        if ($stmt->execute()) {
            // Delete the row from admin_requests
            $delete_sql = "DELETE FROM admin_requests WHERE admin_request_id='$admin_id'";
            if ($conn->query($delete_sql) === TRUE) {
                $_SESSION['success_message'] = "Admin accepted and status updated successfully.";
                header("Location: index"); // Replace 'index.php' with your actual page

                
            } else {
                $_SESSION['error_message'] = "Error deleting from admin_requests: " . $conn->error;
            }
        } else {
            $_SESSION['error_message'] = "Error inserting into admin: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $_SESSION['error_message'] = "Admin not found in admin_requests with ID: $admin_id";
    }
} else if (isset($_POST['submitRejectButton'])) {
    $admin_id = $_POST['submitRejectButton'];

    // Delete the row from admin_requests
    $delete_sql = "DELETE FROM admin_requests WHERE admin_request_id='$admin_id'";
    if ($conn->query($delete_sql) === TRUE) {
        $_SESSION['success_message'] = "Admin request rejected and deleted successfully.";
        header("Location: index"); // Replace 'index.php' with your actual page

    } else {
        $_SESSION['error_message'] = "Error deleting from admin_requests: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>