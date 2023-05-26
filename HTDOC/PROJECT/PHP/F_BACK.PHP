
<?php

//error_reporting(0);
include "sign_up/config.php";

if(isset($_POST['feed']))

{  
    $feed_back=$_POST['feed_back'];

    $sql_cosc = "INSERT INTO feedback_table (FeedBack_ID,FeedBack,createdOn) values('','$feed_back',NOW()) ";
   if(mysqli_query($conn,$sql_cosc))
   {
       echo '<script>alert("Feedback Submit") </script>';
     // echo $_SESSION['uri'];

      header("Location:http://127.0.0.1/PROJECT/PHP/homepage.php");  
   } 
  /* else
   {
    echo mysqli_error($conn);
}*/ 
  
}


?>