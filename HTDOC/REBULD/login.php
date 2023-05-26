<?php include "config.php";
error_reporting(0); 
session_start();

//$temp_array=array();

?>
<?php  $temm=$_POST['log_id'];
       $sql_profile = "SELECT * FROM `faculty_table` WHERE Faculty_Login_ID='$temm'";
      
       $x=mysqli_query($conn,$sql_profile); 
 
       $result=mysqli_num_rows($x);
      // echo mysqli_error($conn);
   
       if($result!=0)
    {
       $i=0;  
          $d=mysqli_fetch_assoc($x);
      
             if($d['Faculty_Login_ID']==$_POST['log_id'] && $d['Faculty_Password']==$_POST['pass'])
             {   
                $_SESSION['faculty_login_id']=$d['Faculty_Login_ID'];
        
           // print_r($d);
                  header("Location:http://127.0.0.1/rebuld/connect.php");
             }
             else
             {  
               echo '<script>alert("Registration unsuccessful")
               window.location.href="http://127.0.0.1/rebuld/index.php";
               </script>'; 
             }

             echo mysqli_error($conn);
      
      }
      else
      {
        echo '<script>alert("Registration unsuccessful")
        window.location.href="http://127.0.0.1/rebuld/index.php";
        </script>'; 
      }
  
?>