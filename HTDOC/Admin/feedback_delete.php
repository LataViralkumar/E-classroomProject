<?php 


include "config.php";

$del=$_GET['id'];


$del_cou="DELETE FROM feedback_table WHERE FeedBack_ID='$del'";
if(mysqli_query($conn,$del_cou) )
{
   
    header("Location:http://127.0.0.1/admin/Admin.php#feed_b");
    
}
/*else
{
  
  echo '<script>alert("Delete Solution")
  
 </script>'; 
}
*/

?>