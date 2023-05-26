
<?php 

include "config.php";

$User_Name=$_POST['User_Name'];
$User_Email=$_POST['User_Email'];
$User_Password=$_POST['Conform_Password'];
$User_Mobile=$_POST['User_Mobile'];



//$sql_login = "INSERT INTO `users`(`id`, `name`, `email`, `password`, `User_Mobile`,`User_occupation`,`User_Location`,`User_Education`,`User_Skill`,`User_About`, `User_Photo`,`createdOn`) VALUES ('','$User_Name','$User_Email','$User_Password','$User_Mobile','Update Profile','$city','$education','$skill','$about','DEFALUT.jpg',NOW())";

$sql_login = "INSERT INTO `users`(`id`, `name`, `email`, `password`, `User_Mobile`, `User_Photo`,`createdOn`) VALUES ('','$User_Name','$User_Email','$User_Password','$User_Mobile','DEFALUT.jpg',NOW())";
//$sql_login="INSERT INTO `user_table` (`User_id`, `User_Name`, `User_Email`, `User_Mobile`, `User_Password`, `User_Location`, `User_occupation`, `User_Education`, `User_About`, `User_Photo`) values('','$User_Name','$User_Email','$User_Password','$User_Mobile','','','','','')";
if(mysqli_query($conn,$sql_login))
{
   
    echo '<script>alert("Registration successful")
    window.location.href="http://127.0.0.1/PROJECT/PHP/homepage.php";
    </script>'; 

    // header("Location:http://127.0.0.1/PROJECT/PHP/homepage.php");
}
else
{  
    echo mysqli_error($conn);
    echo '<script>alert("Registration unsuccessful")
     window.location.href="http://127.0.0.1/PROJECT/PHP/homepage.php";
    </script>'; 
}

?>