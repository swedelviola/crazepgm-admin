<?php
require 'connection.php';

session_start();
$e_id=$_SESSION['eid'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];

	date_default_timezone_set('Asia/Kolkata');
	$date1 = date("Y-m-d h:i:sa"); //current date time

                  	if($date1 < $startdate)
    					{
                  	$stmt="UPDATE event set start_date='$startdate' , end_date='$enddate' , defaults=2 where e_id='$e_id'";  //update database-upcoming event
                  	$result=mysqli_query($conn,$stmt) or die(mysqli_error($conn));
    				} else if($date1 > $enddate){
    					$stmt="UPDATE event set start_date='$startdate' , end_date='$enddate' , defaults=1 where e_id='$e_id'";  //update database-past event
                  	$result=mysqli_query($conn,$stmt) or die(mysqli_error($conn));
    				} else{
                  	$stmt="UPDATE event set start_date='$startdate' , end_date='$enddate' , defaults=0 where e_id='$e_id'";  //update database-ongoing event
                  	$result=mysqli_query($conn,$stmt) or die(mysqli_error($conn));
    				}
    			header("Location: edit.php");
    			
    			
?>