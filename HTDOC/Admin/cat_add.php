<?php 

include "config.php";
session_start();

//print_r($_POST);
if(isset($_POST['addd']))
{  
    $cat=$_POST['catt'];

    $sql_cosc = "INSERT INTO quiz_oops.category(id,cat_name) values('','$cat'); ";
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

if(isset($_POST['adddd']))
{  
    $cat=$_POST['catt'];

    $sql_cosc = "INSERT INTO course_category(Category_ID,Category_Name) values('','$cat'); ";
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
