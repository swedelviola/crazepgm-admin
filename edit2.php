<?php
require 'connection.php';
session_start();
// $admin = $_SESSION['admin'];
// if($admin == null)
// {
//   header("Location: Login&Registration.php");
// }
// $_SESSION['admin']=$admin;
$e_id=$_POST['radio'];
$_SESSION['eid']=$e_id;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
 
<script src="custom_script_1.js"></script>
<script src="custom_script_2.js"></script>
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/Dashboard.css">
  <title>Edit</title>
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
          <b>Change</b>
          </div>
          <div class="card-body">
            <h4 class="ui-title text-sec-headline-xs">Change event details:</h4><br>
            <form method="POST" action="editp4.php">

              <?php
              $sql="SELECT ename,start_date,end_date from event where e_id='$e_id'";
              $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
              $r=mysqli_num_rows($res);
                  if ($r > 0) {
                    while($row = mysqli_fetch_assoc($res)) {
              ?>
              <label> <?php echo $row['ename']; ?> </label>
            <?php }} ?>
                <div class="form-group row">
                  <label for="example-datetime-local-input" class="col-2 col-form-label">Start Date and Time</label>
                  <div class="col-10">
                    <input class="form-control" type="datetime-local" name="startdate" id="example-datetime-local-input" value=<?php echo $row['start_date']; ?> >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-datetime-local-input" class="col-2 col-form-label">End Date and Time</label>
                  <div class="col-10">
                    <input class="form-control" type="datetime-local" name="enddate" id="example-datetime-local-input" value=<?php echo $row['end_date']; ?> >
                  </div>
                </div>

              <button type="submit" class="btn btn-primary" formaction="editp4.php">Update</button>

            </form>
         </div>
        </div>
      </div>
    </div>
    <br><br>

</div>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>