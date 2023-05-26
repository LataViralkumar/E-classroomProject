<?php 

include "config.php";

$titel=mysqli_escape_string($conn,$_GET['Course_titel']);
$delete=mysqli_escape_string($conn,$_GET['']);



$del_cou="DELETE FROM video_course WHERE Course_Titel = '$titel'";
if(mysqli_query($conn,$del_cou) )
{
    echo "data deleted";
    header("Location:http://127.0.0.1/REBULD/faculty.php");
}
else
{
    echo "not deleted";
}


?>