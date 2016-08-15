<?php
	include('login.php'); // Include Login Script

	include('register.php');

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: dashboard.php');
	}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome to our Plant Repository</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/splashscreen.css">


	</head>

	<body data-spy="scroll" data-target=".navbar-collapse">
		<!--Navigation Bar -->
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">Plant Repository</a>
				</div>

				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#topRow">Home</a></li>
						<li><a data-target="#myModal" data-toggle="modal" href="#myModal">Register</a></li>
					</ul>

					<!-- Login Field-->
					<form method="post" action="" class="navbar-form navbar-right">
						<span style="color: red; margin-right: 5px;"><?php echo $msg;?><?php echo $error;?></span>
						<div class="form-group">
							<input name="username" type="text" placeholder="Username" class="form-control" required />
						</div>
						<div class="form-group">
							<input name="password" type="password" placeholder="Password" class="form-control"/>
						</div>
						<input type="submit" name="submit" class="btn btn-success" value="Log In" />
					</form>
				</div>
			</div>
		</div>

		<!-- Top Container -->
		<div class="container contentContainer active" id="topContainer">

			<!-- Row (About) Section -->
			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="topRow">
					<h1 class="marginTop white">Plant Simulator</h1>
					<p class="lead">Plant Repository and Simulator</p>
					<p class="bold">Please Sign Up!</p>
					<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						Sign up!
					</button>
				</div>

				<!-- Registration Pop-up Page -->
				<div class="modal" id="myModal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">
									x
								</button>
								<h4 class="modal-title">Register</h4>
							</div>
							<div class="modal-body">
								<form class="left" method="post">
									<div class="form-group">
										<label for="name">Your Name:</label>
										<input type="text" name="reg_name" class="form-control " placeholder="Your Name" required/>
									</div>
									<div class="form-group">
										<label for="id">Username:</label>
										<input type="text" name="reg_username" class="form-control" placeholder="Username" required/>
									</div>
									<div class="form-group">
										<label for="password">Your Password:</label>
										<input type="password" name="reg_password" class="form-control" placeholder="Your Password" required/>
									</div>
									<input type="submit" name="reg_submit" class="btn btn-primary btn-lg" value="Register">
								</form>
							</div>
						</div>
					</div>
				</div> <!-- Registration page close -->
			</div> <!-- Row close -->
		</div> <!-- Top Container close -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script>
			$(".contentContainer").css("min-height", $(window).height());
		</script>
