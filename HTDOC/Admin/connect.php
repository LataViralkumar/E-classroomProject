<?php
error_reporting(0);
session_start();

if($_SESSION['admin_login_id'])
{  
    header("Location:http://127.0.0.1/admin/Admin.php");
   
}
else
{
    echo '<script>alert("Registration unsuccessful")
        window.location.href="http://127.0.0.1/admin/index.php";
        </script>';
}

?>