<?php 

//error_reporting();
$conn=mysqli_connect("localhost","root");
//echo(($conn)?"add":"Not add");
$da=mysqli_select_db($conn,"quiz_oops");
//echo(($da)?"add":"Not add");
//$titel=mysqli_escape_string($conn,$_GET['Course_titel']);

//$delete=mysqli_escape_string($conn,$_GET['']);
$del=$_GET['id'];


$ff=$_GET['fid'];

$del_cou="DELETE FROM questions WHERE  id='$del'";
if(mysqli_query($conn,$del_cou) )
{
   // echo "data deleted";
   header("Location:http://127.0.0.1/rebuld/exam/exam_add.php?id=".$ff);

}
else
{
   // echo "not deleted"; qustion_delete.php
}


?>