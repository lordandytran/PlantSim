<?php
	//Connect to MySQL
	$link = mysql_connect('vergil.u.washington.edu:252525', 'user', '445DataProj');
	if (!$link) {
    		die('Not connected : ' . mysql_error());
	}

	// Connect to database
	$db_selected = mysql_select_db('445ProjDB', $link);
	if (!$db_selected) {
    		die ('Can\'t connect to database : ' . mysql_error());
	}	
?>

<html>
<head>
	<title>Plant Simulator</title>
	<link rel="stylesheet" type="text/css" href="https://students.washington.edu/lordandy/css/style.css">
	
	<!-- Link to the javascript file -->
	<script type="text/javascript" src="webPage.js"></script>
	
	<!-- Adding the link to use jquery -->
	<script src="jquery-1.12.4.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<!-- uses googles jquery -->
	<!-- Here is the stylesheet -->
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css'/>
</head>
	<body>
		<!-- using this to add quick facts -->
		<div id="Plant-segments">
			<h3>Plant Animation</h3>
			<div class = 'fwrapper'>
			<!-- Animation from http://codepen.io/maxakohler/pen/ltFyG -->
				<div class='flower flower-0'><span></span></div>
				<div class='flower flower-1'><span></span></div>
				<div class='flower flower-2'><span></span></div>
				<div class='flower flower-3'><span></span></div>
				<div class='flower flower-4'><span></span></div>
				<div class='flower flower-5'><span></span></div>
				<div class='flower flower-6'><span></span></div>
			</div>
			<h3>Plant DB</h3>
			<div>
				<p>Put the information from the DB here!</p>
			</div>
			<h3>Copyright informaiton</h3>
			<div>
				<p>Copyright this!</p>
			</div>
		</div>
		
	</body>    
</html>

<?php
	//Close Connection
	mysql_close($link);
?>
