<?php 


include "config.php";
//$titel=mysqli_escape_string($conn,$_GET['Course_titel']);

//$delete=mysqli_escape_string($conn,$_GET['']);
$del=$_GET['id'];


$del_cou="DELETE FROM question WHERE  id='$del'";
if(mysqli_query($conn,$del_cou) )
{
   // echo "data deleted";
    header("Location:http://127.0.0.1/admin/Admin.php");
}
else
{
   // echo "not deleted"; //qustion_delete.php
  // echo mysqli_error($conn);
  echo '<script>alert("Delete Solution")
  window.location.href="http://127.0.0.1/admin/Admin.php";
 </script>'; 
}


?>