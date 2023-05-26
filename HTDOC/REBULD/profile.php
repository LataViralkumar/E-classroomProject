<?php include "config.php" ?>

<?php  
       $sql_profile = "SELECT * FROM `faculty_table` WHERE Faculty_Login_ID='$Faculty_login_id'";
       $x=mysqli_query($conn,$sql_profile); 
       //echo $x;
       $result=mysqli_num_rows($x);
   
       if($result!=0)
    {
         
      while($d=mysqli_fetch_assoc($x))
      {     

        $Faculty_Name=$d['Faculty_Name'];
        $Faculty_ID=$d['Faculty_ID'];
        $Faculty_Login_ID=$d['Faculty_Login_ID'];
        $Faculty_Mobile=$d['Faculty_Mobile'];
        $Faculty_Email=$d['Faculty_Email'];
        $Faculty_Password=$d['Faculty_Password'];
      //  $qq=$d['Faculty_Degree'];
        $qq=json_decode($d['Faculty_Degree'],true);
      //  $Faculty_Subject=$d['Faculty_Subject'];
        $Faculty_Experience=$d['Faculty_Experience'];
        $Faculty_Photo=$d['Faculty_Photo'];
        $Faculty_ID=$d['Faculty_ID'];
         $edd=json_decode($d['Faculty_Education'],true);
         
         $Faculty_About=$d['Faculty_About'];
         $Faculty_Location=json_decode($d['Faculty_Location'],true);
       
      }
    }

?>