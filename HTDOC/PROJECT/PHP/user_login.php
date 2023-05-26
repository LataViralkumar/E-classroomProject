<?php include "sign_up/config.php";
error_reporting(0); 
session_start();


?>
<?php  $temm=$_POST['Email_Id'];
       $sql_profile = "SELECT * FROM `users` WHERE email='$temm'";
      
       $x=mysqli_query($conn,$sql_profile); 
 
       $result=mysqli_num_rows($x);
      // echo mysqli_error($conn);
   
       if($result!=0)
    {
       $i=0;  
          $d=mysqli_fetch_assoc($x);
      
             if($d['email']==$_POST['Email_Id'] && $d['password']==$_POST['Password'])
             {   
                $_SESSION['email_ii']=$d['email'];
               
           // print_r($d);
                  header("Location:http://127.0.0.1/PROJECT/PHP/connect.php");
             }
             else
             {  
               echo '<script>alert("Registration unsuccessful")
               window.location.href="http://127.0.0.1/PROJECT/PHP/homepage.php";
               </script>'; 
             }

             echo mysqli_error($conn);
      
      }
      else
      {
        echo '<script>alert("Registration unsuccessful")
        window.location.href="http://127.0.0.1/PROJECT/PHP/homepage.php";
        </script>'; 
      }
  
?>