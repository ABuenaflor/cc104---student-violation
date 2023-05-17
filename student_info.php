<?php require_once "includes/nav.php";
			require_once "includes/connect.php";

$query = "SELECT * FROM student_info";
$result = $conn->query($query)
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/homepage.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Student Info</title>
</head>
<body>
<style>
	h1{
		text-align: center;
	}
</style> 
<h1>STUDENT INFORMATIONS</h1>
	

<div class="container">
	<table class="table table-striped table-bordered">
		<tr>
			<th>Id</th>
			<th></th>
			<th>School Id</th>
			<th></th>
			<th>First Name</th>
			<th></th>
			<th>Last Name</th>
			<th></th>
			<th>Course</th>
			<th></th>
			<th>Year Level</th>
			<th></th>
			<th>Age</th>
			<th></th>
			<th>Gender</th>
			<th></th>
			<th>Violation</th>
			<th></th>
			<th>Violation Count</th>
			<th></th>
			<th>Date</th>
			<th></th>
			<th>School Year</th>
			<th></th>
			<th>Remarks</th>
			<th></th>
			<th>Actions</th>
		</tr>

		<?php
			if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
						echo "<tr>";
						echo	"<td>" .$row['id']. "<td>";
						echo	"<td>" .$row['school_id']. "<td>";
						echo	"<td>" .$row['first_name']. "<td>";
						echo	"<td>" .$row['last_name']. "<td>";
						echo	"<td>" .$row['course_name']. "<td>";
						echo	"<td>" .$row['year_level']. "<td>";
						echo	"<td>" .$row['age']. "<td>";
						echo	"<td>" .$row['gender']. "<td>";
						echo	"<td>" .$row['violation']. "<td>";
						echo	"<td>" .$row['violation_count']. "<td>";
						echo	"<td>" .$row['date']. "<td>";
						echo	"<td>" .$row['school_year']. "<td>";
						echo	"<td>" .$row['remarks']. "<td>";
						echo "<td>";
						echo "<div class='btn-group'>";
						echo "<a  class='btn btn-secondary' href='edit.php?id=" .$row['id'] ."'> Edit</a>";
						echo "</div>";
						echo "</td>";
						echo "</tr>";
					}
			}
		?>
	</table>
</div>
</body>
</html>