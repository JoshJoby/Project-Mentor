<?php
// Database credentials
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "projectmentor";
// date_default_timezone_set('Asia/Kolkata');

// // Create a connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check the connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// include '../config_local.php';

// $task_name = "";
// $description = '';
// $assigned_to = "";


// // Retrieve form data
// if (isset($_POST['task_name']))
//   $task_name = $_POST['task_name'];
// if (isset($_POST['assigned_to']))
//   $assigned_to = $_POST['assigned_to'];
// if (isset($_POST['due_date']))
//   $due_date = $_POST['due_date'];
// if (isset($_POST['category']))
//   $category = $_POST['category'];
// if (isset($_POST['description']))
//   $description = $_POST['description'];

// $target_dir = "attachments/";
// @$target_file = $target_dir . basename($_FILES["attached"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if (isset($_POST["save"])) {
//   $check = getimagesize($_FILES["attached"]["tmp_name"]);
//   if ($check !== false) {
//     // echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     //echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   // echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if (@$_FILES["attached"]["size"] > 500000) {
//   // echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if (
//   $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//   && $imageFileType != "gif"
// ) {
//   //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   //echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   $fileContent = file_get_contents($_FILES["attached"]["tmp_name"]);
//   if ($fileContent !== false) {
//     // SQL query to insert data into the tasks table
//     $randomnumber = random_int(100000, 999999);
//     $sql = "INSERT INTO tasks (task_id, task_name, project_id, task_desc, task_duration, task_content)
//             VALUES ($randomnumber, '$task_name', 987, '$description', 3, '$target_file', ?)";

//     // Prepare the SQL statement with a parameter for the binary data
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param('b', $fileContent); // 'b' represents binary data

//     if ($stmt->execute()) {
//         echo "Task added successfully.";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     // Close the prepared statement
//     $stmt->close();
// } else {
//     echo "Sorry, there was an error reading the file content.";
// }
// }



// // Close the database connection
// $conn->close();
?>

<?php
include '../config_local.php';

$task_name = $_POST['task_name'] ?? '';
$description = $_POST['description'] ?? '';


if (isset($_FILES["attached"]) && $_FILES["attached"]["error"] == 0) {
    $fileContent = file_get_contents($_FILES["attached"]["tmp_name"]);

    if ($fileContent !== false) {
        // Create a unique task_id
        $randomnumber = random_int(100000, 999999);

        // SQL query to insert data into the tasks table
        $sql = "INSERT INTO tasks (task_id, task_name, project_id, task_desc, task_duration, task_content)
                VALUES (?, ?, 987, ?, 3, ?)";

        // Prepare the SQL statement with parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('isss', $randomnumber, $task_name, $description, $fileContent); // 'b' represents binary data

        if ($stmt->execute()) {
            echo "Task added successfully.";
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
