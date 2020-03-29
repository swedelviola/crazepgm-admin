<?php
	require 'connection.php';

	$p_id=$_POST['radio'];
	session_start();
	$eid=$_SESSION['eid'];
	$_SESSION['pid']=$p_id;

 $stm1="DELETE from code_table where e_id='$eid' and p_id='$p_id'";
 $result=mysqli_query($conn,$stm1) or die(mysqli_error($conn));

 $stm2="DELETE from testcase where e_id='$eid' and p_id='$p_id'";
 $result=mysqli_query($conn,$stm2) or die(mysqli_error($conn));

 $stm3="DELETE from problem where e_id='$eid' and p_id='$p_id'";
 $result=mysqli_query($conn,$stm3) or die(mysqli_error($conn));

 header("Location: edit.php");
 ?>