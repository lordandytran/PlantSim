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
	<script src="jquery-3.1.0.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<!-- uses googles jquery -->
	<!-- Here is the stylesheet -->
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css'/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css"> 
	  <link rel="stylesheet" href="/resources/demos/style.css">
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	  <script>
	  $( function() {
	    $( "#accordion" ).accordion();
	  } );
	  </script>
</head>
	<body>
		<div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>
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
