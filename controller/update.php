<?php

 $del = $_GET['id'];
if($del){
 $name = $_POST['name'];
$ldate = $_POST['date'];
$activity = $_POST['activity'];
$duration = $_POST['duration'];


 $query = "UPDATE employee_activity SET name = '$name', ldate = '$ldate', activity='$activity', duration='$duration' WHERE id = '$del'";
        $result = mysqli_query(mysqli_connect("localhost","db","root","jscrud"), $query);
           echo "<script> location.href='../index.php'; </script>";

	
}

