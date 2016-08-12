<?php
    session_start();

    //Connects to the database
    include("connection.php");

    if(isset($_POST["submit"])) {
        //if(empty($_POST["username"]) || empty($_POST["password"])) {
            //$error = "Both fields are required.";
        //}
        //else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        $password = md5($password);

        //Check username and password from database
        $sql = "SELECT user_id FROM users WHERE username='$username' AND pass='$password'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //Creates the session if there is a match in the database.
        if(mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $login_user;
            //Redirects to successful login page.
            header("Location: http://localhost/dbproj/dashboard.php");
        }
        else {
            echo "Incorrect username or password.";
        }
        //}
    }
?>