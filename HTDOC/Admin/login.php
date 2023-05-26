<?php include "config.php";
error_reporting(0); 
session_start();

$temp_array=array();

?>
<?php  $temm=$_POST['log_id'];
       $sql_profile = "SELECT * FROM `admin_table` WHERE Admin_Login_id='$temm'";
      
       $x=mysqli_query($conn,$sql_profile); 
 
       $result=mysqli_num_rows($x);
      // echo mysqli_error($conn);
   
       if($result!=0)
    {
       $i=0;  
          $d=mysqli_fetch_assoc($x);
      
             if($d['Admin_Login_id']==$_POST['log_id'] && $d['Admin_Password']==$_POST['pass'])
             {   
                $_SESSION['admin_login_id']=$d['Admin_Login_id'];
        
           // print_r($d);
                  header("Location:http://127.0.0.1/admin/connect.php");
             }
             else
             {  
               echo '<script>alert("Registration unsuccessful")
               window.location.href="http://127.0.0.1/admin/index.php";
               </script>'; 
             }

             echo mysqli_error($conn);
      
      }
      else
      {
        echo '<script>alert("Registration unsuccessful")
        window.location.href="http://127.0.0.1/admin/index.php";
        </script>'; 
      }
  
?>