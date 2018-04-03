<?php 

	require 'dbconnection.php';

	//Details of the admin
	$name="Akshat";
	$email="akshatsrivastava2@gmail.com";
	$password=md5("Akshat123");

	$sql="SELECT * FROM admin WHERE email='".$email."' AND password='".$password."'";

	$query=mysqli_query($conn,$query);

	$rows=mysqli_num_rows($query);

	if($rows==0){

		$sql = "INSERT INTO admin(name, email, password) VALUES ('$name', '$email', '$password')";

		if (!mysqli_query($conn, $sql)){
			echo "Cannot Create New Admin";
		}
	}

	header("location:admin_login.php");
?>