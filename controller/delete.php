<?php
 $del = $_GET['id'];
if($del){
	$conn = mysqli_connect("localhost","db","root","jscrud");
	if($conn){
			$sql = "DELETE FROM employee_activity WHERE id='$del'";
			$result = mysqli_query($conn,$sql);
               echo "<script type='text/javascript'>alert('Deleted
               Successfully');</script>";

	           echo "<script> location.href='../index.php'; </script>";	
		
	}
}

?>