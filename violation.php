<?php
  require_once ("includes/nav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Violations Page</title>
</head>
<body>
  <style>
    h1{
      text-align: center;
    }
  </style>
  <h1>STUDENT VIOLATIONS</h1>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card-mt-4">
          <div class="card-header">
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">

                        <form action="" method="GET">
                                <div class="input-group mb-3">
                    <input type="text" class="form-control" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" placeholder="Search Data" name="search">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                  </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card-mt-4">
          <div class="card-body">
            <table class="table-table-bordered">
              <thead>
                <tr>
                  <th>School ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Violation</th>
                  <th>Violation Count</th>
                  <th>Date</th>
                  <th>School Year</th>
                  <th>Remarks</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  require_once ("includes/connect.php");

                  if(isset($_GET['search'])){
                    $filtervalues = $_GET['search'];
                    $query= "SELECT * FROM student_info WHERE CONCAT(school_id,first_name,last_name,violation,violation_count,date,school_year,remarks) LIKE '%$filtervalues%'";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                      foreach($query_run as $items)
                      {
                        ?>

                        <tr>
                        <td><?= $items['school_id'];?> </td>
                        <td><?= $items['first_name'];?> </td>
                        <td><?= $items['last_name'];?> </td>
                        <td><?= $items['violation'];?> </td>
                        <td><?= $items['violation_count'];?> </td>
                        <td><?= $items['date'];?> </td>
                        <td><?= $items['school_year'];?> </td>
                        <td><?= $items['remarks'];?> </td>
                    </tr>
                      <?php
                    }
                  }
                    else
                    {
                      ?>
                       <tr>
                          <td colspan="8">No ID found</td>
                      </tr>
                      <?php
                    }
                  }
                ?>
                
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
