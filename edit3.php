<?php
require 'connection.php';
session_start();
// $admin = $_SESSION['admin'];
// if($admin == null)
// {
//   header("Location: Login&Registration.php");
// }
// $_SESSION['admin']=$admin;
$e_id=$_SESSION['eid'];
$p_id=$_SESSION['pid'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Dashboard.css">
  <title>Add Competition</title>
</head>
<body>

	<nav class="navbar navbar-dark navbar-expand-sm fixed-top" style="background:#232f34">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:#ffa852">Crazy Programming <br><h3 >Admin</h3> </a>
      <li>
        <a onClick="logout()" id="log" href="logout.php" class="navbar-brand pull-right" style="color:#F0F0F0"  >Logout</a>
    </li>
    </div>
  </nav>  


  <div class="sidenav">
    <br><br>
  <a href="Dashboard.php" >Leaderboard</a><br>
  <a href="event.php" >Events</a><br>
  <a href="addcomp.php" >Add Competition</a><br>
  <a href="changewei.php">Change weightage</a><br>
  <a href="checkwei.php">Current weightage</a><br>
  <a href="feedback.php">Feedback</a><br>
  <a href="edit.php" id="hell" active>Edit</a><br>
</div>
<br>

<br>
<div class="main">
    <div class="row" id="contain-card">
      <div class="col-md-8">
        <div class="card " style="margin:20px 15px 20px 15px">
          <div class="card-header text-right" style="background:#ffa852;">
          <b>Upcoming events</b>
          </div>
          <?php
          $sql="SELECT ename from event where e_id='$e_id'";
          $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
          $r=mysqli_num_rows($res);
                  if ($r > 0) {
          
          ?>
          <form method="POST" action="edit4.php">
          <div class="card-body">
            <?php 
            while($row = mysqli_fetch_assoc($res)) {
              
            ?>
            <h4 class="ui-title text-sec-headline-xs">Add questions for <?php echo $row['ename']; ?>  Competitions</h4>
            <br>
            <?php }} ?>

            <h7>Add questions below:</h7><br>
            <div class="form-group">
              <textarea id="text-arr" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5" name="pname" required>
               

              
            
            </textarea>
            </div>

            <h7>Add description for question</h7>
            <div class="form-group">
              <textarea id="text-arr" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5" name="description" required>
  
                
                
                
                

              </textarea>
            </div>

            <h7>Add constraints:</h7>
            <div class="form-group">
              <textarea id="text-arr" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5" name="constraints" required>
            
                
                

              </textarea>
            </div>

            <h7>Add sample input:</h7>
            <div class="form-group">
              <textarea id="text-arr" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5" name="sampleinput" required>
                
                
                
                
                

              </textarea>
            </div>

            <h7>Add sample output:</h7>
            <div class="form-group">
              <textarea id="text-arr" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5" name="sampleoutput" required>
                
                
                
                

              </textarea>
            </div>

            <h7>Add Sample Program that works :</h7>
            <div class="form-group">
              <textarea id="text-arr" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5" name="samplepgm" required>
			  
              </textarea>
            </div>
            <br>
            
            <lable>No.of testcases: </lable>
            <input type="number" name="nt">
            <br>
            <br>
            <button type="submit" class="btn btn-primary" formaction="edit4.php">Add test cases</button>
          </form>
          </div>
        </div>
      </div>
    </div>

</div>
</body>
</html>