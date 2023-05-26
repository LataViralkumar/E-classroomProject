


<?php

 include "config.php";
 include "profile.php"; 

 if(isset($_POST['insert'])){
  $Course_Titel=$_POST['Course_Name'];
  $Course_des=$_POST['Course_des'];
  $course_Faculty_ID=$d['Faculty_ID'];
  $Course_Faculty_Name=$d['Faculty_Name'];
  $Course_Playlist_ID=$_POST['Playlist_ID'];
  $Course_Study_Note=$_POST['Course_Note'];
  
  
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
        
           $sql_cosc = "INSERT INTO video_course(Course_ID, Course_Titel, Course_Description, Course_Faculty_ID, Course_Faculty_Name, Course_Study_Note, Course_Playlist_ID,Playlist_photo) VALUES ('55','$Course_Titel','$Course_des','$course_Faculty_ID','$Course_Faculty_Name','$Course_Study_Note','$Course_Playlist_ID','$name')";
           mysqli_query($conn,$sql_cosc); 

        
         echo "Upload successfully.";
       }
     }

  }else{
    echo "Invalid file extension.";
  }


}
  ?>