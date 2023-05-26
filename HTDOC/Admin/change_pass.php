<?php 
error_reporting(0);
include "config.php";

if(isset($_POST['addd']))
{
    $old=$_POST['old'];
    $new=$_POST['new'];
   
    $sql_loc="UPDATE admin_table SET Admin_Password='$new' WHERE Admin_Password='$old'";

    if(mysqli_query($conn,$sql_loc))
    {
      
      header("Location:http://127.0.0.1/admin/Admin.php");
    
    }
    mysqli_error($conn);
}

if(isset($_POST['adddd']))
{
    $old=$_POST['old'];
    $new=$_POST['new'];
   
    $sql_loc="UPDATE admin_table SET 	Admin_Login_id='$new' WHERE 	Admin_Login_id='$old'";

    if(mysqli_query($conn,$sql_loc))
    {
      
      header("Location:http://127.0.0.1/admin/Admin.php");
    
    }
    mysqli_error($conn);
}


?>