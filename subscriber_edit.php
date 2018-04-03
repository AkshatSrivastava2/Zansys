<?php 
	session_start();

	$id=$_GET['id'];

	if(!isset($_SESSION["admin"]) || isset($_SESSION["error"])){
		
		header("location:admin_login.php");
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Edit Subscriber</title>
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
    	<li><a href="admin_dashboard.php" style="color: orange;"><span class="glyphicon glyphicon-user active"></span> Admin Dashboard</a></li>
		<li><a href="logout.php" style="color: orange;"><span class="glyphicon glyphicon-log-in"></span> Admin Logout</a></li>
    </ul>
  </div>
</nav>
	<?php 
		require 'dbconnection.php';

		$sql="SELECT * FROM subscribers WHERE id='".$id."'";

		$query=mysqli_query($conn,$sql);

		$rows=mysqli_num_rows($query);

		if($rows!=0){

			$row=mysqli_fetch_array($query);
	?>
<div class="container">
	<div class="row">
	  <h2 id="heading"><u>Subscribers Register Here!</u></h2>
	  <form action="update.php?id=<?php echo "$id"; ?>" method="POST">

	  	<div class="form-group">
	      <label for="name" style="color: white;">Name:</label>
	      <input type="text" class="form-control" id="name" placeholder="Enter Name" value="<?php echo $row['name'];?>" name="name" pattern="[a-zA-Z ]*$" title="Only Letters Are Allowed">
	    </div>

	    <div class="form-group">
	      <label for="email" style="color: white;">Email:</label>
	      <input type="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $row['email'];?>" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter A Valid Email Address" disabled>
	    </div>

	    <div class="form-group">
	      <label for="phone" style="color: white;">Contact Number:</label>
	      <input type="text" class="form-control" id="phone" placeholder="Enter email" value="<?php echo $row['phone'];?>" name="phone">
	    </div>
	    
	    <button type="submit" class="btn btn-default">Update</button>
	  </form>
	</div>
</div>
	<?php 
		}
		else
		{
	?>
	<h2> No Data Found </h2>
	<?php
	} ?>
<!-- Bootstrap CDN-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
