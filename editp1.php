<?php
	require 'connection.php';
	$e_id=$_POST['radio'];
	$sql="UPDATE event set defaults=3 where e_id='$e_id'";
	$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	header("Location: edit.php");

?>