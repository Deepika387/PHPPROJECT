<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form fields are set and not empty
    if (isset($_POST['thread_title']) && isset($_POST['thread_content']) && !empty($_POST['thread_title']) && !empty($_POST['thread_content'])) {
        // Database connection settings
        $db_host = 'localhost:3325';
        $db_user = 'root';
        $db_pass = '';
        $db_name ='comunity';

        // Connect to the database
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL query to insert the new thread into the database
        $sql = "INSERT INTO threads (thread_title, thread_content) VALUES (?, ?)";

        // Prepare and bind the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $_POST['thread_title'], $_POST['thread_content']);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect back to the forum page after thread creation
            header("Location: index.html");
            exit;
        } else {
            echo "Error creating thread: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill in all the required fields.";
    }
}
?>
