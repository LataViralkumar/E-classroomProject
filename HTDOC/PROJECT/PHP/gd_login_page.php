<?php include "sign_up/config.php";
error_reporting(0); 
session_start();


?>
<?php  $temm=$_POST['username'];
       $sql_profile = "SELECT * FROM `gd` WHERE username='$temm'";
      
       $x=mysqli_query($conn,$sql_profile); 
 
       $result=mysqli_num_rows($x);
      // echo mysqli_error($conn);
   
       if($result!=0)
    {
       $i=0;  
          $d=mysqli_fetch_assoc($x);
      
             if($d['username']==$_POST['username'] && $d['password']==$_POST['password'])
             {   
                $_SESSION['user']=$d['username'];
               
           // print_r($d);
                header("Location:http://127.0.0.1/video%20call/indx.php");
                echo '<script>alert("Login successful")
              
               </script>'; 
             }
             else
             {  
               echo '<script>alert("Username And Password Invalid...!");
               window.location.href="http://127.0.0.1/PROJECT/PHP/gd_login.php";
               </script>'; 
             }

             echo mysqli_error($conn);
      
      }
      else
      {
        echo '<script>alert("Username And Password Invalid..!")
        window.location.href="http://127.0.0.1/PROJECT/PHP/gd_login.php";
        </script>'; 
      }
  
?>