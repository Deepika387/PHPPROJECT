<!DOCTYPE html>
<html>

<head>
    <title>Student Records</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  
              
                <div class="card-header bg-info">
  					<h4 class="text-white">PHP BACKGROUND IMAGE: How To Fetch Image in PHP</h4>
  				</div>
  			</div>
  			<div class="card-body">

  				<?php
  					$conn = mysqli_connect("localhost:3325", "root", "", "code");
  					$query = "SELECT * FROM students";
  					$query_run = mysqli_query($conn, $query);
  				?>

  				<table class="table table-striped table-bordered">
  					<thead class="table-dark">
  						<tr>
  							<td>ID</td>
  							<td>Stud name</td>
  							<td>Stud Class</td>
  							<td>Phone</td>
  							<td>Image</td>
  							<td>Edit</td>
  							<td>Delete</td>
  						</tr>
  					</thead>
  					<tbody>

  						<?php
  						if (mysqli_num_rows($query_run) > 0) {
  							foreach ($query_run as $row) {
  						?>
  								<tr>
  									<td><?php echo $row['id']; ?></td>
  									<td><?php echo $row['stud_name']; ?></td>
  									<td><?php echo $row['stud_class']; ?></td>
  									<td><?php echo $row['stud_phone']; ?></td>
  									<td>
  										<img src="<?php echo $row['image']; ?>" width="100" height="100" alt="Student Image">
  									</td>
  									<td>
  										<a href="" class="btn btn-info">EDIT</a>
  									</td>
  									<td>
  										<a href="" class="btn btn-danger">DELETE</a>
  									</td>
  								</tr>
  						<?php
  							}
  						} else {
  						?>
  							<tr>
  								<td colspan="7">No Record Available</td>
  							</tr>
  						<?php
  						}
  						?>

  					</tbody>
  				</table>
  			</div>
  		</div>
  	</div>
</div>
</div></div></div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
