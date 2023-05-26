<?php 
error_reporting(0);
session_start();
if($_SESSION['email_ii'])
{
    session_destroy();
    echo '<script>
        window.location.href="http://127.0.0.1/PROJECT/PHP/homepage.php";
        </script>';
}

?>