<?php  
        include "config.php";
       $sql_cos_list = "SELECT COUNT(Course_Faculty_ID) FROM `video_course` WHERE Course_Faculty_ID='$Faculty_login_id'";
       $q=mysqli_query($conn,$sql_cos_list); 
       //echo $x;
       $result=mysqli_num_rows($q);
   
    if($result!=0)
    {
         
      while($da=mysqli_fetch_assoc($q))
      {     
        $Faculty_c_count=$da['COUNT(Course_Faculty_ID)'];
      }
    }
    else
    {
     echo "error";
    }
 ?>