<?php 


include "config.php";
//$titel=mysqli_escape_string($conn,$_GET['Course_titel']);
//$data=$_SERVER['REQUEST_URI'];
//$delete=mysqli_escape_string($conn,$_GET['']);
$del=$_GET['id'];


$del_cou="DELETE FROM answer WHERE  id='$del'";
if(mysqli_query($conn,$del_cou) )
{
   // echo $_SERVER['REQUEST_URI'];
    header("Location:http://127.0.0.1/admin/q_ans.php?id=".$del);
    
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