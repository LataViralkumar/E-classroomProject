<?php 
     include "config.php";
      
       $sql_cos_disp= "SELECT * FROM `video_course` WHERE Course_Faculty_ID=2";
       $qq=mysqli_query($conn,$sql_cos_disp); 
       
       $result_disp=mysqli_num_rows($qq);
 
    if($result_disp!=0)
    {
         
      while($data_disp=mysqli_fetch_assoc($qq))
      {     
         $Course_Titel=$data_disp['Course_Titel'];
         $Course_Description=$data_disp['Course_Description'];
         $Course_Faculty_Name=$data_disp['Course_Faculty_Name'];
         $Course_Study_Note=$data_disp['Course_Study_Note'];
         $Course_Playlist_ID=$data_disp['Course_Playlist_ID'];
         $Playlist_photo=$data_disp['Playlist_photo'];
      } 

    } 