<?php
session_start();

include '../config_local.php';

if (isset($_POST['submitAcceptButton'])) {
    $expert_id = $_POST['submitAcceptButton'];

    // Retrieve the row from expert_requests
    $select_sql = "SELECT * FROM expert_requests WHERE expert_request_id=?";
    $stmt_select = $conn->prepare($select_sql);
    $stmt_select->bind_param("i", $expert_id);
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $randomnumber = random_int(100000, 999999);

        // Insert the row into expert with expert_status set to 1
        $insert_sql = "INSERT INTO expert (expert_id, first_name, last_name, email, password, profile, phone_number, expert_pfp, expert_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 1)";
        $stmt_insert = $conn->prepare($insert_sql);
        $stmt_insert->bind_param("isssssss", $randomnumber, $row['first_name'], $row['last_name'], $row['email'], $row['password'], $row['profile'], $row['phone_number'], $row['expert_pfp']);

        if ($stmt_insert->execute()) {
            // Delete the row from expert_requests
            $delete_sql = "DELETE FROM expert_requests WHERE expert_request_id=?";
            $stmt_delete = $conn->prepare($delete_sql);
            $stmt_delete->bind_param("i", $expert_id);

            if ($stmt_delete->execute()) {
                $_SESSION['success_message'] = "Expert accepted and status updated successfully.";
                header("Location: index.php"); // Replace 'index.php' with your actual page
                exit();
            } else {
                $_SESSION['error_message'] = "Error deleting from expert_requests after accepting expert: " . $stmt_delete->error;
            }
        } else {
            $_SESSION['error_message'] = "Error inserting expert after accepting: " . $stmt_insert->error;
        }
    } else {
        $_SESSION['error_message'] = "Expert not found in expert_requests with ID: $expert_id";
    }

    $stmt_select->close();
    $stmt_insert->close();
} elseif (isset($_POST['submitRejectButton'])) {
    $expert_id = $_POST['submitRejectButton'];

    // Delete the row from expert_requests
    $delete_sql = "DELETE FROM expert_requests WHERE expert_request_id=?";
    $stmt_delete = $conn->prepare($delete_sql);
    $stmt_delete->bind_param("i", $expert_id);

    if ($stmt_delete->execute()) {
        $_SESSION['success_message'] = "Expert request rejected and deleted successfully.";
        header("Location: index.php"); // Replace 'index.php' with your actual page
        exit();
    } else {
        $_SESSION['error_message'] = "Error deleting from expert_requests after rejecting expert: " . $stmt_delete->error;
    }

    $stmt_delete->close();
}

// Close the connection
$conn->close();
?>
