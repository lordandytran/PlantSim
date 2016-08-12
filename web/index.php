<?php
    include('login.php');
    if ((isset($_SESSION['username']) != '')) {
        header('Location: http://localhost/dbproj/dashboard.php');
    }

    //require_once 'connection.php';
    if(isset($_POST["reg_submit"])) {
        $regusername = $_POST["reg_username"];
        $regpassword = $_POST["reg_password"];
        $regfullname = $_POST["reg_name"];

        $regfullname = mysqli_real_escape_string($db, $regfullname);
        $regusername = mysqli_real_escape_string($db, $regusername);
        $regpassword = mysqli_real_escape_string($db, $regpassword);

        $regpassword = md5($regpassword);

        $reg_sql = "SELECT username FROM users WHERE username = '$regusername'";
        $reg_result = mysqli_query($db, $reg_sql);
        $row = mysqli_fetch_array($reg_result, MYSQLI_ASSOC);
        if(mysqli_num_rows($reg_result) == 1) {
            echo "This username already exists!";
        }
        else {
            $reg_query = mysqli_query($db, "INSERT INTO users (username, pass, fullname) VALUES ('$regusername', '$regpassword', '$regfullname')");
            if($reg_query) {
                echo "Registration Successful!";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Plant Simulator</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/splashscreen.css">

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
                <li class="active"><a href="#topRow">Home</a></li>
                <li><a data-target="#myModal" data-toggle="modal" href="#myModal">Register</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control" name= "username" required />
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" name= "password" required/>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Log In</button>
            </form>
        </div>
    </div>
</div>
<div class="container contentContainer active" id="topContainer">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" id="topRow">
            <h1 class="marginTop white">Plant Simulator</h1>
            <p class="lead">Plant Repository and Simulator</p>
            <p class="bold">Please Sign Up!</p>
            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                Sign up!
            </button>
            </div>
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
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
    $(".contentContainer").css("min-height", $(window).height());
</script>
</body>
</html>
</html>