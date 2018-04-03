<?php 
	session_start();

	require 'dbconnection.php';

	$email=$password="";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$email=$_POST["email"];

		$password=md5($_POST["password"]);

		$sql="SELECT * FROM admin WHERE email='".$email."' AND password='".$password."'";

		$query=mysqli_query($conn,$sql);

		$numrows=mysqli_num_rows($query);

		if($numrows===1){

			if(isset($_SESSION["error"])){

				unset($_SESSION["error"]);

				session_destroy();
			}

			$_SESSION["admin"]=$email;

			header("location:admin_dashboard.php");
		}
		else
		{
			$_SESSION["error"]="Invalid Email or Password";

			header("location:admin_login.php");
		}

	}
?>