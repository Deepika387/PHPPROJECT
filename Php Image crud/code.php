
<?php
// Check if the form is submitted
if (isset($_POST['save_stud_image'])) {
    // Database connection settings
    $db_host = 'localhost:3325';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'code';

    // Connect to the database
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the form
    $stud_name = $_POST['stud_name'];
    $stud_class = $_POST['stud_class'];
    $stud_phone = $_POST['stud_phone'];

    // Process the image file
    $target_dir = "upload/"; // Create a directory called "uploads" to store the images
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is an actual image or a fake image
    if (isset($_POST["save_stud_image"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            exit;
        }
    }

    // Check file size (you can adjust the maximum file size if needed)
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        exit;
    }

    // Allow only certain image file formats (you can add more if needed)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        exit;
    }

    // Move the uploaded file to the "uploads" directory
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO students (stud_name, stud_class, stud_phone, image) VALUES ('$stud_name', '$stud_class', '$stud_phone', '$target_file')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
        header('location:index.php'); // Add the missing semicolon here
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
