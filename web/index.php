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
</head>
	<body>
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
	</body>    
</html>

<?php
	//Close Connection
	mysql_close($link);
?>