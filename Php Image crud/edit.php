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

    // Fetch the student data from the database
    $query = "SELECT * FROM students WHERE id = '$stud_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Extract the student data into variables
        $stud_name = $row['stud_name'];
        $stud_class = $row['stud_class'];
        $stud_phone = $row['stud_phone'];
        $image_url = $row['image'];
    } else {
        echo "Student not found.";
        exit; // Stop further execution if student not found
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Student ID not provided.";
    exit; // Stop further execution if student ID not provided
}
?>
<div class="card-body">
  <form action="update_data.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="stud_id" value="<?php echo $stud_id; ?>">
    <div class="form-group">
      <label for="stud_name">Student name</label>
      <input type="text" name="stud_name" class="form-control" placeholder="Enter Name" value="<?php echo $stud_name; ?>">
    </div>

    <div class="form-group">
      <label for="stud_class">Student Class</label>
      <input type="text" name="stud_class" class="form-control" placeholder="Enter Class" value="<?php echo $stud_class; ?>">
    </div>

    <div class="form-group">
      <label for="stud_phone">Student Phone Number</label>
      <input type="text" name="stud_phone" class="form-control" placeholder="Enter Phone" value="<?php echo $stud_phone; ?>">
    </div>

    <div class="form-group">
      <label for="image">Student Image</label>
      <input type="file" name="image" class="form-control">
    </div>

    <div class="form-group">
      <button name="update_stud_data" type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
