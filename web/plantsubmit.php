<?php
    $sub_msg = "";
    if(isset($_POST["submit_plant"])) {
        $plantname = $_POST["sub_plantname"];
        $genus = $_POST["sub_genus"];
        $species = $_POST["sub_species"];

        $plantname = mysqli_real_escape_string($db, $plantname);
        $genus = mysqli_real_escape_string($db, $genus);
        $species = mysqli_real_escape_string($db, $species);


        $reg_query = mysqli_query($db, "INSERT INTO plants (plant_name, genus, species) VALUES ('$plantname', '$genus', '$species')");
        if($reg_query) {
            $sub_msg = "Plant successfully added!";
            header("location: dashboard.php#footer");
        }
    }
?>