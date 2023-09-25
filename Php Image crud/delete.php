<?php
if (isset($_GET['id'])) {
    $db_host = 'localhost:3325';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'code';

    // Connect to the database
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the student ID from the URL parameter
    $stud_id = $_GET['id'];

    // Delete the student data from the database
    $query = "DELETE FROM students WHERE id = '$stud_id'";
    if ($conn->query($query) === TRUE) {
        echo "Student data deleted successfully!";
    } else {
        echo "Error deleting student data: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Student ID not provided.";
}
?>