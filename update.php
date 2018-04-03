<?php 
	session_start();

	if(!isset($_SESSION["admin"]) || isset($_SESSION["error"])){
		
		header("location:admin_login.php");
	}

	$id=$_GET['id'];

	require 'dbconnection.php';

	$name=$phone="";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$name=htmlspecialchars(stripcslashes(trim($_POST["name"])));

		$phone=htmlspecialchars(stripcslashes(trim($_POST["phone"])));

		$sql="UPDATE subscribers SET name='".$name."',phone='".$phone."' WHERE id='".$id."' ";

		$result=mysqli_query($conn,$sql);

		if($result){

			header("location:admin_dashboard.php");
			
		}
	}
	header("location:admin_dashboard.php");
?>