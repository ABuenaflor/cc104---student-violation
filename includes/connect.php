<?php
function connection(){
  $host= "localhost";
  $username = "root";
  $password = '';
  $database = "school_violations";

$conn =  mysqli_connect($host, $username, $password, $database);

if($conn -> connect_error){
  die('Connection Failed'. $conn -> connect_error);
}else{
  return $conn;
}
}

$conn = mysqli_connect('localhost', 'root', '', 'school_violations');
?>