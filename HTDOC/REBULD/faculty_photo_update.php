<?php

include "config.php";
session_start();
 if(isset($_POST['p_data'])){
  $id=$_GET['u_id'];
  $maxsize = 5242880; // 5MB
 
  $name = $_FILES['file']['name'];
//   print_r($_FILES);
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
        
          $sql_photo="UPDATE faculty_table SET Faculty_Photo='$name' WHERE Faculty_ID=$id";
           mysqli_query($conn,$sql_photo); 

        //  echo mysqli_error($conn);
        //  echo "<h3>Upload successfully.</h3>";
        echo '<script>alert("Upload successfully.")</script>';
        header("Location:http://127.0.0.1".$_SESSION['uri']);
       }
     }

  }else{
    echo '<script>alert("Invalid file extension.")</script>'; 
  }


}
  ?>