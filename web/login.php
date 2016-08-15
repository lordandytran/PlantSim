<?php
	session_start();
	include("connection.php");
	
	$error = "";
	if(isset($_POST["submit"])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($db, $username);
		$password = mysqli_real_escape_string($db, $password);
		$password = md5($password);

		$sql="SELECT user_id FROM users WHERE username='$username' AND pass ='$password'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
        if(mysqli_num_rows($result) == 1) {
			$_SESSION['username'] = $username; // Initializing Session
			header("location: dashboard.php"); // Redirecting To Other Page
		}
		else {
			$error = "Incorrect username or password!";
		}
	}

?>