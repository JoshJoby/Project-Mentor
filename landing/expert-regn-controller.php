<?php
session_start();
include '../config_local.php';

// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $photo = $_FILES["photo"]["name"];
    $dob = $_POST["dob"];
    $phno = $_POST["phno"];
    $gender = $_POST["gender"];
    $company = $_POST["company"];
    $experience = $_POST["experience"];
    $state = $_POST["state"];
    $expertiseAreas = $_POST["selectedValues"];
    $user_id = $_SESSION['user_id'];

    $data = array(
        "company" => $company,
        "experience" => $experience,
        "state" => $state,
        "expertiseAreas" => $expertiseAreas,
        "date_of_birth" => $dob,
        "gender" => $gender
    );
    
    // Convert the array to a JSON string
    $jsonData = json_encode($data);
    // Check if a file has been uploaded
    if (isset($_FILES["photo"])) {
        $file = $_FILES["photo"];

        // Check for errors during the file upload
        if ($file["error"] === 0) {
            // Read the contents of the uploaded file
            $imageData = file_get_contents($file["tmp_name"]);

            // Prepare the SQL statement to insert data into the expert_requests table
            $stmt = $conn->prepare("UPDATE expert_requests SET expert_pfp = ?, dob = ?, phone_number = ?, gender = ?, profile = ? WHERE expert_request_id = ?");
            $stmt->bind_param("sssssi", $imageData, $dob, $phno, $gender, $jsonData, $user_id);

            if ($stmt->execute()) {
                echo "Form data inserted successfully.";
                $_SESSION['signup_success'] = 'Waiting for approval from admin!';
                header("Location: index");
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error during file upload: " . $file["error"];
        }
    }
}

// Close the database connection
$conn->close();
?>
