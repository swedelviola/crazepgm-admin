<?php
require 'connection.php';
session_start();
// $admin = $_SESSION['admin'];
// $_SESSION['admin'] = $admin;
// if($admin == null)
// {
//   header("Location: Login&Registration.php");
// }
 //$_SESSION['default']=0;
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
          <b>Delete Event</b>
          </div>
          <div class="card-body">
            <h4 class="ui-title text-sec-headline-xs">Select event to be deleted:</h4><br>
            <?php
              $sql="SELECT ename,e_id from event where defaults=0 or defaults=2";
              $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
              $r=mysqli_num_rows($res);
                  if ($r > 0) {
            ?>
      <form  method="POST" action="editp1.php">
        <div class="form-check">
                    <?php
                    while($row = mysqli_fetch_assoc($res)) {
                      ?>
        <input type="radio" class="form-check-input" name="radio" value=<?php echo $row['e_id']; ?> >
        <label class="form-check-label" for="Event name" required><?php echo $row['ename']; ?></label><br><br>
                <?php }}?>
         <button type="submit" class="btn btn-primary" formaction="editp1.php">Delete Event</button>



            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <div class="row" id="contain-card">
      <div class="col-md-8">
        <div class="card " style="margin:20px 15px 20px 15px">
          <div class="card-header text-right" style="background:#ffa852;">
          <b>Hide Event</b>
          </div>
          <div class="card-body">
            <h4 class="ui-title text-sec-headline-xs">Select event to be deleted:</h4><br>
            <?php
              $sql="SELECT ename,e_id from event where defaults=1";
              $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
              $r=mysqli_num_rows($res);
                  if ($r > 0) {
            ?>
      <form  method="POST" action="editp1.php">
        <div class="form-check">
                    <?php
                    while($row = mysqli_fetch_assoc($res)) {
                      ?>
        <input type="radio" class="form-check-input" name="radio" value=<?php echo $row['e_id']; ?> >
        <label class="form-check-label" for="Event name" required><?php echo $row['ename']; ?></label><br><br>
                <?php }}?>
         <button type="submit" class="btn btn-primary" formaction="editp1.php">Hide Event</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <div class="row" id="contain-card">
      <div class="col-md-8">
        <div class="card " style="margin:20px 15px 20px 15px">
          <div class="card-header text-right" style="background:#ffa852;">
          <b>Update Event</b>
          </div>
          <div class="card-body">
            <h4 class="ui-title text-sec-headline-xs">Select event to add/delete questions:</h4><br>
            <?php
            $sql="SELECT ename,e_id from event where defaults=2";
            $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $r=mysqli_num_rows($res);
                  if ($r > 0) {
            ?>
            <form method="POST" action="edit1.php">
                  <div class="form-check">
                    <?php 
                    while($row = mysqli_fetch_assoc($res)) {
                      ?>
                  <input type="radio" class="form-check-input" name="radio" value=<?php echo $row['e_id']; ?> >
                  <label class="form-check-label" for="Event name" required><?php echo $row['ename']; ?></label><br><br>
                <?php }} ?>
                  <button type="submit" class="btn btn-primary" formaction="edit1.php">Update Event</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <div class="row" id="contain-card">
      <div class="col-md-8">
        <div class="card " style="margin:20px 15px 20px 15px">
          <div class="card-header text-right" style="background:#ffa852;">
          <b>Update event details-Upcoming Event:</b>
          </div>
          <div class="card-body">
            <h4 class="ui-title text-sec-headline-xs">Select event name:</h4><br>
            <?php
            $sql="SELECT ename,e_id from event where defaults=2";
            $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $r=mysqli_num_rows($res);
                  if ($r > 0) {
            ?>
            <form method="POST" action="edit2.php">
                  <div class="form-check">
                    <?php 
                    while($row = mysqli_fetch_assoc($res)) {
                      ?>
                  <input type="radio" class="form-check-input" name="radio" value=<?php echo $row['e_id']; ?> >
                  <label class="form-check-label" for="Event name" required><?php echo $row['ename']; ?></label><br><br>
                <?php }} ?>
                  <button type="submit" class="btn btn-primary" formaction="edit2.php">Update event details</button>



            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <div class="row" id="contain-card">
      <div class="col-md-8">
        <div class="card " style="margin:20px 15px 20px 15px">
          <div class="card-header text-right" style="background:#ffa852;">
          <b>Update event details-Ongoing Event:</b>
          </div>
          <div class="card-body">
            <h4 class="ui-title text-sec-headline-xs">Select event name:</h4><br>
            <?php
            $sql="SELECT ename,e_id from event where defaults=0";
            $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $r=mysqli_num_rows($res);
                  if ($r > 0) {
            ?>
            <form method="POST" action="edit5.php">
                  <div class="form-check">
                    <?php 
                    while($row = mysqli_fetch_assoc($res)) {
                      ?>
                  <input type="radio" class="form-check-input" name="radio" value=<?php echo $row['e_id']; ?> >
                  <label class="form-check-label" for="Event name" required><?php echo $row['ename']; ?></label><br><br>
                <?php }} ?>
                  <button type="submit" class="btn btn-primary" formaction="edit5.php">Update event details</button>



            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br>



</div>
</body>
</html>