<?php
require 'connection.php';
session_start();

// $admin = $_SESSION['admin'];
// if($admin == null)
// {
//   header("Location: Login&Registration.php");
// }
// $_SESSION['admin']=$admin;
$nf=$_SESSION['nf'];
$e_id= $_SESSION['eid'];
$p_id= $_SESSION['pid'];
$stmt = $conn->prepare("INSERT into `testcase` (`e_id`,`p_id`,`input`,`output`) values('$e_id','$p_id',?,?)");
include 'calcout.php';

  $stmt1 = $conn->prepare("SELECT * from `testcase` where `e_id`=$e_id and $p_id=$p_id");
  $stmt1->execute();
  $result=$stmt1->get_result();
  $count=mysqli_num_rows($result);
  if($count>=1)
  {
    echo "<h5>Test case added successfully!!!</h5>";
    header("Location: edit.php");        
   } 
  else
  {
    echo "<h5>Test case NOT added!!!\nTry again!!</h5>";
    //header("Location: addcomp5.php");
  }
  ?>
