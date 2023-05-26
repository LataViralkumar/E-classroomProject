<?php
error_reporting(0);
session_start();

if($_SESSION['faculty_login_id'])
{  
    header("Location:http://127.0.0.1/rebuld/faculty.php");
   // echo $GLOBALS['fd'];
   //echo $_POST['fd'];
}
else
{
    echo '<script>alert("Registration unsuccessful")
        window.location.href="http://127.0.0.1/rebuld/index.php";
        </script>';
}

?>