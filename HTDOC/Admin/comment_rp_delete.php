<?php 

include "config.php";

$id=$_GET['id'];
//$titel=mysqli_escape_string($conn,$_GET['cid']);
//$delete=mysqli_escape_string($conn,$_GET['']);

$del_cou="DELETE FROM replies WHERE id= '$id'";
if(mysqli_query($conn,$del_cou) )
{
    //echo "data deleted";
    header("Location:http://127.0.0.1/admin/Admin.php");
}
else
{
    echo "not deleted";
}

?>