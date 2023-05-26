
<?php  
       include "sign_up/config.php";
    
       $sql_profile = "SELECT * FROM `users` WHERE email='$user_email'";
       $x=mysqli_query($conn,$sql_profile); 
       
       $result=mysqli_num_rows($x);
   
       if($result!=0)
    {
         
      while($d=mysqli_fetch_assoc($x))
      {     
        $id=$d['id'];
        $User_Name=$d['name'];
        $User_Email=$d['email'];
        $User_Mobile=$d['User_Mobile'];
       // $User_Photo=$d['']

       $qq=json_decode($d['User_Skill'],true);
          
       // $ed=json_encode($d['User_Education']);
      $edd=json_decode($d['User_Education'],true);
    
      $User_Location=json_decode($d['User_Location'],true);
    // print_r($User_Location);
       
      $User_occupation=$d['User_occupation'];

      $User_Mobile=$d['User_Mobile'];

      $User_Photo=$d['User_Photo'];

      $about_me=$d['User_About'];

      }
    }
    
?>