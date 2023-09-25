







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS styles -->
    <style>
      body {
        background-color: #f7f7f7;
        padding: 20px;
      }

      .card {
        margin-top: 30px;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }

      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
      }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <h4 class="card-header bg-info">PHP BACKGROUND IMAGE INSERT</h4>
          </div>
          <div class="card-body">
            <form action="code.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="stud_name">Student name</label>
                <input type="text" name="stud_name" class="form-control" placeholder="Enter Name">
              </div>

              <div class="form-group">
                <label for="stud_class">Student Class</label>
                <input type="text" name="stud_class" class="form-control" placeholder="Enter Class">
              </div>

              <div class="form-group">
                <label for="stud_phone">Student Phone Number</label>
                <input type="text" name="stud_phone" class="form-control" placeholder="Enter Phone">
              </div>

              <div class="form-group">
                <label for="image">Student Image</label>
                <input type="file" name="image" class="form-control">
              </div>

              <div class="form-group">
                <button name="save_stud_image" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+BeB8T8Cj41a6bSANj0iL2CkXfzZ1Gwm8ZVQ9Ed95JiC8np" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-U4ZziZwr2P1Wq6jQjicQPF6kt2TJveUfXsZjxiSt6M9jL2STClKhdX9J0F9fliPf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-o5F92I3XqQ1x4QVDx+inexlN6EZJxft9IuHBkLX4H12UG4Kgcfpw98b1p8fljwz" crossorigin="anonymous"></script>
  </body>
</html>
