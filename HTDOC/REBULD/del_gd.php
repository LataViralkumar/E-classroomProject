<?php 

include "config.php";
$id=$_GET['id'];

$del_cou="DELETE FROM gd WHERE id = '$id'";
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