<?php
if (isset($_POST['update_stud_data'])) {
    // Database connection settings
    $db_host = 'localhost:3325';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'code';

    // Connect to the database
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the form
    $stud_id = $_POST['stud_id'];
    $stud_name = $_POST['stud_name'];
    $stud_class = $_POST['stud_class'];
    $stud_phone = $_POST['stud_phone'];

    // Process the image file (if updated)
    if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $target_dir = "upload/"; // Make sure this path is correct
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // ... (your image validation code remains the same)

        // Move the uploaded file to the "upload" directory
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }

        // Update student data with image
        $sql = "UPDATE students SET stud_name='$stud_name', stud_class='$stud_class', stud_phone='$stud_phone', image='$target_file' WHERE id='$stud_id'";
    } else {
        // Update student data without changing the image
        $sql = "UPDATE students SET stud_name='$stud_name', stud_class='$stud_class', stud_phone='$stud_phone' WHERE id='$stud_id'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Student data updated successfully!";
    } else {
        echo "Error updating student data: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "No data submitted for update.";
}
?>