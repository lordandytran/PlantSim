<!-- Defines the database connection -->
<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'dbproj445');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if ($db->connect_errno) {
        die("ERROR : -> ".$db->connect_error);
    }
?>