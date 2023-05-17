<?php require_once ("includes/nav.php");
			require_once "includes/connect.php";
if(!isset($_SESSION['account_id'])){
  echo '<script>window.alert("PLEASE LOG IN FIRST")</script>';
  echo '<script>window.location.replace("./login.php")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/homepage.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Home Page</title>
</head>
<style>
	h1{
		text-align: center;
	}
</style>
<h1>STUDENT FORMS</h1>

<body>

  <form method="post">
<div class="row">

	<div class="col">
		<label>School ID:</label>
		<input type="text" name="school_id" ><br>
		</div>

		<div class="col">
		<label>First Name:</label>
		<input type="text" name="first_name"  ><br>
		</div>
		
		<div class="col">
    <label>Last Name:</label>
		<input type="text" name="last_name" ><br>
		</div>
		</div>

						<div class="row">
							<div class="col">
						<label>Course:</label>
						<input type="text" name="course_name"  ><br>
						</div>

						<div class="col">
						<label>Year Level:</label>
						<input type="text" name="year_level" ><br>
						</div>

						<div class="col">
						<label>Age:</label>
						<input type="text" name="age"  ><br>
						</div>
						</div>

		<label>Gender:</label>
		<select name="gender">
			<option value="" >Select gender</option>
			<option value="male" name="gender">Male</option>
			<option value="female" name="gender">Female</option>
		</select><br>

		<label>Violation: </label>
		<input type="text" name="violation" ><br>

							<div class="row">
							<div class="col">
							<label>Violation Count: </label>
							<input type="text" name="violation_count" ><br>
							</div>	
							
							<div class="col">
							<label>Date: </label>
							<input type="text" name="date" ><br>
							</div>	
						
								<div class="col">
								<label>School Year: </label>
							<input type="text" name="school_year" ><br>
								</div>
								</div>

			<div class="row">
			<div class="col">
			<label>Remarks: </label>
		<input type="text" name="remarks" ><br>
			</div>
		</div>

		<input type="submit" name="submit" value="Add">
	</form>
	
	<?php 
if(ISSET($_POST['submit'])){
	    $id = mysqli_real_escape_string($conn, $_POST['school_id']);
			$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
			$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
			$course = mysqli_real_escape_string($conn, $_POST['course_name']);
			$year_level = mysqli_real_escape_string($conn, $_POST['year_level']);
			$age = mysqli_real_escape_string($conn, $_POST['age']);
			$gender = mysqli_real_escape_string($conn, $_POST['gender']);
			$violation = mysqli_real_escape_string($conn, $_POST['violation']);
			$violation_count = mysqli_real_escape_string($conn, $_POST['violation_count']);
			$date = mysqli_real_escape_string($conn, $_POST['date']);
			$school_year = mysqli_real_escape_string($conn, $_POST['school_year']);
			$remarks = mysqli_real_escape_string($conn, $_POST['remarks']);

      $sql = "INSERT INTO student_info (school_id, first_name, last_name, course_name, year_level, age, gender, violation,violation_count,date,school_year,remarks)
					VALUES ('$id', '$first_name','$last_name', '$course', '$year_level', '$age', '$gender', '$violation','$violation_count','$date','$school_year','$remarks')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Information Inserted Succesfully')</script>";
} else {

  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
</div>
</body>
</html>



