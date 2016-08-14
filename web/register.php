<?php
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