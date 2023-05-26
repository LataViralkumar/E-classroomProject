
<?php 
error_reporting(0);
session_start();
include "config.php";

$Username=$_POST['Username'];
$Password=$_POST['Password'];
$F_id=$_GET['F_id'];



$sql_login = "INSERT INTO `gd`(`id`, `username`, `password`, `faculty_id`,`date_time`) VALUES ('','$Username','$Password','$F_id',NOW())";
if(mysqli_query($conn,$sql_login))
{
   
    echo mysqli_error($conn);

    
    echo'<script>alert("Registration successful")
     window.location.href="Location:http://127.0.0.1/rebuld/faculty.php";
    </script>';
    header("Location:http://127.0.0.1/REBULD/faculty.php");
}
else
{  
    echo mysqli_error($conn);
    echo '<script>alert("Registration unsuccessful")
     window.location.href="Location:http://127.0.0.1/rebuld/faculty.php";
    </script>'; 
    header("Location:http://127.0.0.1/REBULD/faculty.php");
}

?>