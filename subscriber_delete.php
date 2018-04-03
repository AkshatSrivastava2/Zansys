<?php 
	session_start();

	if(!isset($_SESSION["admin"]) || isset($_SESSION["error"]) ){
		
		header("location:admin_login.php");
	}

	require 'dbconnection.php';

	$id=$_GET['id'];

	$sql="DELETE FROM subscribers WHERE id='".$id."'";

	$query=mysqli_query($conn,$sql);

	header("location:admin_dashboard.php");
?>