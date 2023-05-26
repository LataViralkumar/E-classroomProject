

<?php

include "config.php";

if(isset($_POST['comment_submit']))
{

    $Review_Course_titel=$_GET['Course_Titel'];
    $Review_Faculty_ID=$_GET['F_id'];
    $Review_User_ID=$_GET['User_id'];
    $Review_Video_ID=$_GET['Course_Playlist_ID'];
    $User_Review=$_POST['comment'];
   // $sql_loc="UPDATE faculty_table SET Faculty_Location='$en' WHERE Faculty_ID=$u_id";
    echo mysqli_error($conn);
    $sql = "INSERT INTO course_review (Review_ID, Review_Course_titel, Review_Faculty_ID, Review_User_ID, Review_Video_ID, User_Review) VALUES ('','$Review_Course_titel','$Review_Faculty_ID','$Review_User_ID','$Review_Video_ID','$User_Review' )";

    if(mysqli_query($conn,$sql))
    {
     // header("Location:http://127.0.01".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    echo "ok";
    }
   // mysqli_error($conn);
}

?>