<?php 
	session_start();

	require 'dbconnection.php';

	$name=$email=$phone=$password="";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$name=htmlspecialchars(stripcslashes(trim($_POST["name"])));

		$email=htmlspecialchars(stripcslashes(trim($_POST["email"])));

		$phone=htmlspecialchars(stripcslashes(trim($_POST["phone"])));

		$password=md5($_POST["password"]);

		$sql="SELECT * FROM subscribers WHERE email='".$email."'";

		$query=mysqli_query($conn,$sql);

		$rows=mysqli_num_rows($query);

		if($rows==0){

			$sql="INSERT INTO subscribers(name,email,phone,password) VALUES('$name','$email','$phone','$password')";

			if(mysqli_query($conn,$sql)){

				if(isset($_SESSION["error"])){

					unset($_SESSION["error"]);

					session_destroy();
				}

				header("location:index.php");
				
			}
		}
		else{

			$_SESSION["error"]="Duplicate Entry Found";

			header("location:register.php");
		}
	}
	
?>