<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/homepage.css"/>
  <title>Home page</title>

  <div class="container">
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="student_info.php">Student</a></li>
      <li><a href="violation.php">Violations</a></li>

      <?php
if(!isset($_SESSION)){
  session_start();
}

?>
      <li><a href="login.php" ><?php 
      if(isset($_SESSION['school_violations'])){
        echo $_SESSION ['school_violations'];
      }else{
        echo "Account";
      }?>

      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>  
  </div>

</head>
<body>
  
</body>
</html>

