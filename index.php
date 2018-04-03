<?php 
	session_start();

	if(isset($_SESSION["admin"])){

		header("location:admin_dashboard.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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
	      <li><a href="register.php" style="color: orange;"><span class="glyphicon glyphicon-user active"></span>Subscriber Sign Up</a></li>
	      <li><a href="admin_login.php" style="color: orange;"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
	    </ul>
	  </div>
	</nav>
	<div class="container">
		<h2 id="heading"><u>Subscribers Table</u></h2>    
	<?php 
		require 'dbconnection.php';

		$sql="SELECT * FROM subscribers";

		$query=mysqli_query($conn,$sql);

		$rows=mysqli_num_rows($query);

		if($rows!=0){
			echo '     
			  <table class="table table-hover table-striped table-bordered">
			    <thead>
			      <tr>
			        <th>Name</th>
			        <th>Email</th>
			        <th>Phone</th>
			      </tr>
			 	</thead>';
			while($row=mysqli_fetch_array($query)){
	?>
	    <tbody>
	      <tr>
	        <td><?php echo $row['name']; ?></td>
	        <td><?php echo $row['email']; ?></td>
	        <td><?php echo $row['phone']; ?></td>
	      </tr>
	    </tbody>
	<?php 
			}
		}
		else
		{
	?>
		<h2>No Data Found</h2>
	<?php		
		}
	?>
		</table>
	</div>

<!-- Bootstrap CDN-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>