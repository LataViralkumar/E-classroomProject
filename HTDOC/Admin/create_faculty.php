<?php 

include "config.php";
session_start();

//print_r($_POST);
if(isset($_POST['insert']))
{  
    $name=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $login=$_POST['Login'];
    $pass=$_POST['password'];
  
    

    $sql_cosc = "INSERT INTO faculty_table (Faculty_Name,Faculty_Login_ID,Faculty_Email,Faculty_Mobile,Faculty_Password,createdOn) values('$name','$login','$email','$mobile','$pass',NOW()); ";
   if( mysqli_query($conn,$sql_cosc))
   {
       echo '<script>alert("Registration successful") </script>';
     // echo $_SESSION['uri'];

      header("Location:http://127.0.0.1".$_SESSION['uri']);
     
   } 
   else
   {
       echo '<script>alert("Registration unsuccessful") </script>';
      //  echo $_SESSION['uri'];
       header("Location:http://127.0.0.1".$_SESSION['uri']); 
     
   }
   
}

?>
