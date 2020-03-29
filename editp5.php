<?php
require 'connection.php';

session_start();
$e_id=$_SESSION['eid'];
$enddate=$_POST['enddate'];

	date_default_timezone_set('Asia/Kolkata');
	$date1 = date("Y-m-d h:i:sa"); //current date time

                  if($date1 > $enddate){
    					$stmt="UPDATE event set end_date='$enddate' , defaults=1 where e_id='$e_id'";  //update database-past event
                  	$result=mysqli_query($conn,$stmt) or die(mysqli_error($conn));
    				} else{
                  	$stmt="UPDATE event set end_date='$enddate' , defaults=0 where e_id='$e_id'";  //update database-ongoing event
                  	$result=mysqli_query($conn,$stmt) or die(mysqli_error($conn));
    				}
    			header("Location: edit.php");
    			
    			
?>