<?php
	include('connection.php');
    include('plantsubmit.php');
	session_start();
	$user_check = $_SESSION['username'];

	$ses_sql = mysqli_query($db, "SELECT user_id, username, fullname FROM users WHERE username = '$user_check' ");

	$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

	$login_user = $row['username'];
	$my_name = $row['fullname'];
    $my_id = $row['user_id'];

	if(!isset($user_check)) {
		header("Location: index.php");
	}

    if(isset($_POST["add_plant"])) {
        foreach ($_POST['checkbox'] as $item) {
            $insert = mysqli_query($db, "INSERT INTO my_plants (my_id, my_plant_id) VALUES ('$my_id', '$item')");
        }
        header("Location: dashboard.php");
    }

	if(isset($_POST['deleteItem'])and is_numeric($_POST['deleteItem'])) {
		$delete = $_POST['deleteItem'];
		$del = mysqli_query($db, "DELETE FROM my_plants WHERE plant_id = '$delete' AND my_id = '$my_id' LIMIT 1");
		header("Location: dashboard.php");
	}

	if(isset($_POST["remove_plant"])) {
		foreach ($_POST['checkbox'] as $item) {
			$delete = mysqli_query($db, "DELETE FROM plants WHERE plant_id = '$item'");
			$delete_2 = mysqli_query($db, "DELETE FROM my_plants WHERE my_plant_id = '$item'");
		}
		header("Location: dashboard.php#footer");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Plant Repository</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body data-spy="scroll" data-target=".navbar-collapse">
		<!-- Navigation bar -->
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
						<li class="active"><a href="#topRow">My Plants</a></li>
						<li><a href="#footer">Plant Database</a></li>
					</ul>
					<form class="navbar-form navbar-right" method="get" action="logout.php">
						<span style="margin-right: 10px;"><?php echo "Welcome back, $my_name!" ?></span>
						<button type="submit" class="btn btn-success">Logout</button>
					</form>
				</div>
			</div>
		</div>

		<!-- My Plants Top Container -->
		<div class="container contentContainer active" id="topContainer">
			<div class = "row" id="topRow">
				<h1 id="topdisplay">My Plants</h1>
                <?php
				$contents = '';
                $my_query = mysqli_query($db, "SELECT plant_id, plant_name, genus, species, url 
                                                    FROM plants 
                                                    JOIN my_plants 
                                                    ON my_plants.my_plant_id = plants.plant_id 
                                                    WHERE my_plants.my_id = '$my_id'");
				$myplant = mysqli_query($db, "SELECT * FROM my_plants WHERE my_id = '$my_id'");
				if(mysqli_fetch_row($my_query) == 0) {
					include('addplants.php');
				}
				else {
					while ($row = mysqli_fetch_array($my_query)) {
						echo '<div class = "col-sm-6 col-md-4">';
                        echo '<div class = "thumbnail">';
						$plantid = $row['plant_id'];
						$flower = $row['genus'];
						$name = $row['plant_name'];
						$species = $row['species'];
						if(empty($row['url'])) {
							$contents = file_get_contents("https://en.wikipedia.org/wiki/" . $flower);
						}
						else {
							$contents = file_get_contents($row['url']);
						}
						preg_match('/<img[^>]+>/i', $contents, $result);

						echo "$result[0]";
						echo '
                    	</div>
                        <div class = "caption">
                             <h3>';
						echo "$name";

						echo '</h3><p>';

						echo $flower . " " . $species;
						echo '</p>
                             
                             <p>';
						echo '<form action="" method="post">';
						echo "<button type='button' style='margin-right: 10px;' class='btn btn-success btn' data-toggle='modal' data-target ='#".$flower."'>Description</button>";
						//echo '<input type="submit" class="btn btn-success btn" name="deleteItem" value="'.$plantid.'" />';
						echo '</form>';
						echo '</p>
                        </div>
                        </div>';

						preg_match("/".$flower."(.*?)<\/p>/", $contents, $matches);
						$text = $matches[0];
						$stripped = strip_tags($text);

						echo "<div class ='modal' id='$flower'>";
						echo '<div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">
                                        x
                                        </button>';
                        echo "<h4 class='modal-title'>".$name."</h4>";
						echo '</div>
                                <div class="modal-body">';

                        echo '<p>';
                        echo "$text";
                        echo '</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>';
					}
				}

                ?>
			</div>
        </div>

		<!-- Plant Database Bottom Content Container-->
        <script language="JavaScript">
            function toggle(source) {
                checkboxes = document.getElementsByName('checkbox[]');
                for(var i=0, n=checkboxes.length;i<n;i++) {
                    checkboxes[i].checked = source.checked;
                }
            }
        </script>
		<div class="container contentContainer" id="footer">
			<div class="row">
                <h1 class="center title">Plant Repository</h1>
                <div class="table-wrap">
                    <form id="sub-plant" method="post">
                    <table>
                        <thead>
                        <tr>
                            <th><input type="checkbox" onClick="toggle(this)" /><span style="margin-left: 5px;">Select / Deselect All</span></th>
                            <!--<th>Plant No.</th>-->
                            <th>Plant Name</th>
                            <th>Genus</th>
                            <th>Species</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql_query = mysqli_query($db, "SELECT * FROM plants");
                        while($row = mysqli_fetch_array($sql_query)){
                            echo "<tr>";
                            echo '<td>'."<input type='checkbox' name='checkbox[]' value='{$row['plant_id']}' />".'</td>';
                            //echo '<td>'.$row['plant_id'].'</td>';
                            echo '<td>'.$row['plant_name'].'</td>';
                            echo '<td>'.$row['genus'].'</td>';
                            echo '<td>'.$row['species'].'</td>';
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                    <input type="submit" name="add_plant" class="btn btn-success btn" value="Add to my plants">
					<input type="submit" name="remove_plant" class="btn btn-success btn" value="Remove from Plant Repository">
                    </form>
                </div>
                <div class="submit-wrapper">
                    <form id="sub-plant" method="post">
                        <div class = "submit-form">
                            <h3>Enter your own plant</h3>
                            <label>
                                <!--<span>Plant Name</span>-->
                                <input type="text" name="sub_plantname" class="form-control" placeholder="Plant Name" required/>
                            </label>
                            <label>
                                <!--<span>Genus</span>-->
                                <input type="text" name="sub_genus" class="form-control" placeholder="Genus" required/>
                            </label>

                            <label>
                                <!--<span>Species</span>-->
                                <input type="text" name="sub_species" class="form-control" placeholder="Species" required/>
                            </label>
                            <input type="submit" name="submit_plant" class="btn btn-success btn" value="Submit Plant">
                        </div>
                    </form>
                </div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script>
			$(".contentContainer").css("min-height", $(window).height());
		</script>

	</body>
</html>