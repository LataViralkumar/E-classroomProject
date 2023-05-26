<?php

 include "config.php";

 //if(isset($_POST['insert'])){
  

  $maxsize = 5242880; // 5MB
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . $_FILES["file"]["name"];

  // Select file type
  $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpeg","jpg","png","JPEG","gif");

  // Check extension
  if( in_array($videoFileType,$extensions_arr) ){

     // Check file size
     if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
       echo "File too large. File must be less than 5MB.";
     }else{
       // Upload
       if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){  
        
           $sql_cosc = "INSERT INTO user_table(User_id,User_Name,User_Email,, Course_Faculty_Name, Course_Study_Note, Course_Playlist_ID,Playlist_photo) VALUES ('55','$Course_Titel','$Course_des','$course_Faculty_ID','$Course_Faculty_Name','$Course_Study_Note','$Course_Playlist_ID','$name')";
           mysqli_query($conn,$sql_cosc); 

        
         echo "Upload successfully.";
       }
     }

 /* }else{
    echo "Invalid file extension.";
  }*/


}
  ?>