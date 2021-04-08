<?php 

include('db.php');

$get_id=$_GET['student_id'];

mysqli_query($mysqli,"delete from student where student_id = '$get_id' ")or die($mysqli_error());
header('location:index.php');
?>