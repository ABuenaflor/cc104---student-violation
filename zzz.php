<!DOCTYPE html>
<html lang="en">
<head>
  <title>STUDENT FORMS
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  h2{
    text-align: center;
  }
</style>
<body>

<div class="container">
  <h2>STUDENT INFORMATIONS</h2>
  <br><br>
  <form method="POST">
    
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Enter School ID" name="school_id">
      </div><br><br><br><br>

      <div class="col">
        <input type="text" class="form-control" placeholder="Enter First Name" name="first_name">
      </div><br><br><br><br>
      </div>

      <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name">
      </div><br><br><br><br>

      <div class="col">
        <input type="text" class="form-control" placeholder="Enter Course" name="course_name">
      </div><br><br><br><br>
      </div>

      <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Enter Year Level" name="year_level">
      </div><br><br><br><br>

      <div class="col">
        <input type="text" class="form-control" placeholder="Enter Age" name="age">
      </div><br><br><br><br>
      </div>

      <div class="row">
      <div class="col">
        <select class="form-control" name="gender">
          <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
      </div><br><br><br><br>
      
       <div class="col">
        <input type="text" class="form-control" placeholder="Enter Violations" name="violation">
      </div><br><br><br><br>
      </div>
    
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>

</body>
</html>

</body>
</html>


<?php
        
        require_once("includes/connect.php");

        if(isset($_POST['submit'])){
          $search = $_POST['search'];
          $sql = "SELECT * FROM student_info WHERE school_id='$search'";

          $result = mysqli_query($conn,$sql);
          if($mysqli_num_rows($result)>0){
            echo '<thead>
            <tr>
            <th>ID No. <th>
            <th> First Name <th>
            <th> Last Name <th>
            <th> Violation <th>
            </tr>
            </thead>';
            $row=mysqli_fetch_assoc($result);
            echo '<tbody>
            <tr>
              <td> '.$row['id'].'</td>
              <td>'.$row['first_name'].'</td>
              <td>'.$row['last_name'].'</td>
              <td>'.$row['violation'].'</td>
            </tr>
            </tbody>';
          }else{
            echo '<h2 class=text-danger>Data not found</h2>';
          }
        }
      ?>