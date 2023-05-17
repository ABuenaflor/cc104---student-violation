<?php
    if(!isset($_GET['id'])){
      die('id not provided');
    }
    require_once('includes/connect.php');
    require_once('includes/nav.php');
$id = $_GET['id'];
$sql = "SELECT * FROM student_info WHERE id = $id";
$result = $conn->query($sql);
    if($result->num_rows !=1){
      die('id is not in db');
    }
    $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/homepage.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Home Page</title>
</head>


<body>

  <form method="post" action="modify.php?id=<?= $id ?> ">

		<label>School ID:</label>
		<input type="text" name="school_id" value="<?= $data['school_id']?>"><br>

		<label>First Name:</label>
		<input type="text" name="first_name" value="<?= $data['first_name']?>" ><br>

    <label>Last Name:</label>
		<input type="text" name="last_name" value="<?= $data['last_name']?>"><br>

		<label>Course:</label>
		<input type="text" name="course_name" value="<?= $data['course_name']?>" ><br>

		<label>Year Level:</label>
		<input type="text" name="year_level" value="<?= $data['year_level']?>" ><br>

		<label>Age:</label>
		<input type="text" name="age"  value="<?= $data['age']?>"><br>

		<label>Gender:</label>
		<select name="gender" value="<?= $data['gender']?>">
			<option value="">Select gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select><br>

		<label>Violation: </label>
		<input type="text" name="violation" value="<?= $data['violation']?>" ><br>

		<label>Violation Count: </label>
		<input type="text" name="violation_count" value="<?= $data['violation_count']?>" ><br>

		<label>Date: </label>
		<input type="text" name="date" value="<?= $data['date']?>" ><br>

		<label>School Year: </label>
		<input type="text" name="school_year" value="<?= $data['school_year']?>" ><br>

		<label>Remarks: </label>
		<input type="text" name="remarks" value="<?= $data['remarks']?>" ><br>

		<input type="submit" name="editForm" value="Add">
    <input onclick="history.back()" class='btn btn-secondary' value="Go Back">
  	</form>