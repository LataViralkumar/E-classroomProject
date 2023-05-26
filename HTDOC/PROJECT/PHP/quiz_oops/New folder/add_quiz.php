<?php
include "config.php";

$qes=$_POST['qes'];
$o1=$_POST['op1'];
$o2=$_POST['op2'];
$o3=$_POST['op3'];
$o4=$_POST['op4'];
$ans=$_POST['ans'];
$cat=$_POST['cat'];



$sql = "INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES ('','$qes', '$o1', '$o2', '$o3', '$o4', '$ans', '$cat')";

if(mysqli_query($conn,$sql))
{
   
    echo '<script>alert("Inserted")
    window.location.href="http://127.0.0.1/quiz_oops/New%20folder/index.php"
    </script>'; 
}
else
{  
    echo '<script>alert("Not Inserted")
    window.location.href="http://127.0.0.1/quiz_oops/New%20folder/index.php"
    </script>';  
}



?>


