<?php
  require_once ("includes/connect.php");
  require_once ("includes/nav.php");

  if(isset($_GET['id']) && isset($_POST['editForm'])){

    $id = $_GET['id'];
    $school_id =$_POST['school_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $course = $_POST['course_name'];
    $year_level = $_POST['year_level'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $violation = $_POST['violation'];
    $violation_count =$_POST['violation_count'];
    $date = $_POST['date'];
    $school_year= $_POST['school_year'];
    $remarks = $_POST['remarks'];

    $sql = "UPDATE `student_info` SET 

    `school_id`=' $school_id',
    `first_name`=' $first_name',
    `last_name`=' $last_name',
    `course_name`=' $course',
    `year_level`='$year_level',
    `age`=' $age',
    `gender`=' $gender',
    `violation`='  $violation',
    `violation_count`='$violation_count',
    `date`='$date',
    `school_year`='$school_year',
    `remarks`='$remarks' WHERE id=$id";

    if($conn->query($sql)===TRUE){
      echo "<script>alert('Modified in DB Succesfully!');window.location='student_info.php'</script>";
    }else{
      echo "Error";
    }

  }else{
    echo "invalid";
  }

?>