<?php
//error_reporting(0);
session_start();

if($_SESSION['email_ii'])
{   
   
    header("Location:http://127.0.0.1/PROJECT/PHP/User_Deshbord.php");

   
}
else
{
    echo '<script>alert("Registration unsuccessful")
        window.location.href="http://127.0.0.1/PROJECT/PHP/homepage.php";
        </script>';
}

?>