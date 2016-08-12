<!-- Destroys the session for logout -->
<?php
    session_start();
    if(session_destroy())  {
        header("Location: http://localhost/dbproj/index.php");
    }
?>