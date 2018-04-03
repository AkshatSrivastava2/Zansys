<?php 
  session_start();

  if(isset($_SESSION["error"])){
    echo "<script>alert('Enter Correct Email and Password');</script>";
  }

  if(isset($_SESSION["admin"])){
    
    header("location:admin_dashboard.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Register Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Bootstrap Files -->
  <link rel="stylesheet" href="./vendor/bootstrap.min.css">
  <script src="./vendor/jquery.min.js"></script>
  <script src="./vendor/bootstrap.min.js"></script>
  <!--External CSS -->
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <!-- Custom Font -->
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color: orange;">Zansys</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php" style="color: orange;"><span class="glyphicon glyphicon-user active"></span> Subscriber Sign Up</a></li>
      <li class="active"><a href="admin_login.php" style="color: orange;"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">
	  <h2 id="heading"><u>Admin Login Here!</u></h2>
	  <form action="login.php" method="POST">

	    <div class="form-group">
	      <label for="email" style="color: white;">Email:</label>
	      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter A Valid Email Address">
	    </div>

	    <div class="form-group">
	      <label for="password" style="color: white;">Password:</label>
	      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
	    </div>
	    
	    <button type="submit" class="btn btn-default">Submit</button>
	  </form>
	</div>
</div>
<!-- Bootstrap CDN-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
