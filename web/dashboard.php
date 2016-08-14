<?php
	include('connection.php');
	session_start();
	$user_check = $_SESSION['username'];

	$ses_sql = mysqli_query($db, "SELECT username FROM users WHERE username = '$user_check' ");

	$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

	$login_user = $row['username'];

	if(!isset($user_check)) {
		header("Location: index.php");
	}

	$name = mysqli_query($db, "SELECT fullname FROM users WHERE username = '$login_user' ");
	$row_2 = mysqli_fetch_array($name, MYSQLI_ASSOC);
	$my_name = $row_2['fullname'];

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome to Plant Sim</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body data-spy="scroll" data-target=".navbar-collapse">
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">Plant Sim</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#topRow">My Plants</a></li>
					<li><a href="#about">History</a></li>
					<li><a href="#footer">Plant Database</a></li>
				</ul>
				<form class="navbar-form navbar-right" method="get" action="logout.php">
					<?php
						echo "Welcome back, $my_name!"
					?>
					<button type="submit" class="btn btn-success">Logout</button>
				</form>
			</div>
		</div>
	</div>
	<div class="container contentContainer active" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<h1 class="marginTop">My Awesome App</h1>
				<p class="lead">This is why you should download this fantastic app.</p>
				<p>Some more information about the app.</p>
				<p class="bold marginTop">Interested? Join our mailing list!</p>
				<form class="marginTop">
					<div class="input-group">
						<span class="input-group-addon">@</span>
						<input type="email" class="form-control" placeholder="Your Email"/>
					</div>
					<input type="submit" class="btn btn-success btn-lg marginTop"/>
				</form>
			</div>
		</div>
	</div>
	<div class="container contentContainer" id="about">
		<div class="row center">
			<h1 class="center title">Why this App is Awesome</h1>
			<p class="lead center">Summary of the app's awesomeness</p>
		</div>
		<div class="row">
			<div class="col-md-4 marginTop marginBottom">
				<h2><span class="glyphicon glyphicon-music"></span>Header</h2>
				<p>A brief description of one of the best features of your app.</p>
				<button class="btn btn-success marginTop">Sign up!</button>
			</div>
			<div class="col-md-4 marginTop">
				<h2><span class="glyphicon glyphicon-off"></span>Header</h2>
				<p>A brief description of one of the best features of your app.</p>
				<button class="btn btn-success marginTop">Sign up!</button>
			</div>
			<div class="col-md-4 marginTop">
				<h2><span class="glyphicon glyphicon-pencil"></span>Header</h2>
				<p>A brief description of one of the best features of your app.</p>
				<button class="btn btn-success marginTop">Sign up!</button>
			</div>
		</div>
	</div>

	<div class="container contentContainer" id="footer">
		<div class="row">
			<h1 class="center title">Download The App!</h1>
			<p class="lead center">Really, why should I download this app!</p>
			<p class="center"><img src="./appstore.png" class="appstoreimage"/>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
		$(".contentContainer").css("min-height", $(window).height());
	</script>
	</body>
</html>