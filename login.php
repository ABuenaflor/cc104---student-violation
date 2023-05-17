<?php include 'includes/connect.php';
session_start();

if(isset($_SESSION['account_id'])){
	header("location:./home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="css/login.css"/>
</head>
<body>
	
  <div class="login-form-container">
<h1>Login Form</h1>

	<form action="login.php" method="post">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		
		<button type="submit" name="submit" id="login">Log In</button>

	<p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>

<?php

if(ISSET($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM account WHERE user_name = '$username' && password = '$password'";
	$user = $conn ->query ($query) or die ($conn ->error);
	$row = $user->fetch_assoc();

	$total = $user ->num_rows;

		if($total > 0){
			$_SESSION['school_violations'] = $row['user_name'];
			$_SESSION ['account_id']= $row['id'];
			echo "<script>alert('Succesfully Logged In!');window.location='home.php'</script>";
		}else{ 
			echo "<div class='alert alert-success'>". 'Username or Password is Incorrect'."</div>";
		 }
}
?>
</form>
</div>
</body>
</html>


