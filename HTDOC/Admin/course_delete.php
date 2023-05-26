<?php 

include "config.php";
$id=$_GET['id'];
$titel=mysqli_escape_string($conn,$_GET['cid']);
//$delete=mysqli_escape_string($conn,$_GET['']);

$del_cou="DELETE FROM video_course WHERE Course_Titel = '$titel'";
if(mysqli_query($conn,$del_cou) )
{
    //echo "data deleted";
    header("Location:http://127.0.0.1/admin/faculty_profile.php?id=".$id);
}
else
{
   // echo "not deleted";
}

?>