<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/signup.css"/>
  <title>Sign Up</title>
</head>
<body>
  
<div class="signup-form-container">
	<h1>Sign Up Form</h1>
	<form action="signup.php" method="post">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		
		<input type="submit" name="submit" value="Sign Up">
	</form>
	<p>Already have an account? <a href="login.php">Log in here</a>.</p>
  </div>
</body>
</html>

<?php include 'includes/connect.php'; ?>

<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM account WHERE user_name = '$username' && password ='$password' ";
	$user = $conn -> query($sql) or die ($conn ->error);
  $row = $user -> fetch_assoc();
  $total = $user-> num_rows;

	if($total >0){
    ?>
    <h3>Username Already taken!</h3>
    <?php
  }
  else{
    $sql = "INSERT INTO `account`(`user_name`, `password`) VALUES ('$username','$password')";
    $conn -> query($sql) or die($conn -> error);  
    echo "<script>alert('Succesfully Signed In!');window.location='login.php'</script>";
  }
}
?>