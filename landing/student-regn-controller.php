<?php
session_start();
include '../config_local.php';

// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $photo = $_FILES["photo"]["name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $college = $_POST["college"];
    $passingYear = $_POST["passing-year"];
    $state = $_POST["state"];
    $selectedSkills = $_POST["selectedValues"];
    $user_id = $_SESSION['user_id'];

    // Check if a file has been uploaded
    if (isset($_FILES["photo"])) {
        $file = $_FILES["photo"];

        // Check for errors during the file upload
        if ($file["error"] === 0) {
            // Read the contents of the uploaded file
            $imageData = file_get_contents($file["tmp_name"]);

            // Prepare the SQL statement to insert data into the students table
            $stmt = $conn->prepare("UPDATE student SET student_pfp = ?, date_of_birth = ?, gender = ?, address = ?, college = ?, passing_year = ?, tech_stack = ? WHERE student_id = ?");
            
            // Bind parameters with the correct data types
            $stmt->bind_param("sssssssi", $imageData, $dob, $gender, $address, $college, $passingYear, $selectedSkills, $user_i);

            if ($stmt->execute()) {
                echo "Student record inserted successfully.";
                $_SESSION['signup_success'] = 'Registration successful!';  
                header("Location: index");
                                                                                                                                                         
                // Redirect or display a success message as needed
            } else {
                echo "Error: " . $stmt->error;
                $_SESSION['signup_error'] = 'Invalid details!';
                header("Location: index");
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
