

<?php
session_start();
error_reporting(0);


include "sign_up/config.php";
$u_id=$_GET['u_id'];
$temp_array=array();

if(isset($_POST['city_update']))
{
    $country=$_POST['contry'];
    $state=$_POST['state'];
    $city=$_POST['city'];
   
   
    $temp_array[]=array("Country"=>$country,"State"=>$state,"city"=>$city);

    $en=json_encode($temp_array);
   
    $sql_loc="UPDATE users SET User_Location='$en' WHERE id=$u_id";

    if(mysqli_query($conn,$sql_loc))
    {
      header("Location:http://127.0.0.1".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    
    }
   // mysqli_error($conn);
}
else if (isset($_POST['update_occupation']))
{
     $occ=$_POST['occupation'];
     $sql_occ="UPDATE users SET User_occupation='$occ' WHERE id=$u_id";

      if(mysqli_query($conn,$sql_occ))
      {
       header("Location:http://127.0.0.1".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
      }
}

else if(isset($_POST['skill']))
{
   $skill1=$_POST['skill_name_1'];
   $skill2=$_POST['skill_name_2'];
   $skill3=$_POST['skill_name_3'];
   $skill4=$_POST['skill_name_4'];
   $skill5=$_POST['skill_name_5'];

   $_skill_pr_1=$_POST['skill_pr_1'];
   $_skill_pr_2=$_POST['skill_pr_2'];
   $_skill_pr_3=$_POST['skill_pr_3'];
   $_skill_pr_4=$_POST['skill_pr_4'];
   $_skill_pr_5=$_POST['skill_pr_5'];

  $temp_array[]=array(array("skill_name"=>$skill1,"skill_pr"=>$_skill_pr_1),array("skill_name"=>$skill2,"skill_pr"=>$_skill_pr_2),array("skill_name"=>$skill3,"skill_pr"=>$_skill_pr_3),array("skill_name"=>$skill4,"skill_pr"=>$_skill_pr_4),array("skill_name"=>$skill5,"skill_pr"=>$_skill_pr_5));


  $skills=json_encode($temp_array);
 
  $sql_skill="UPDATE users SET User_Skill='$skills' WHERE id=$u_id";

  if(mysqli_query($conn,$sql_skill))
  {
    header("Location:http://127.0.0.1".$_SESSION['uri']);
   // echo "127.0.0.1".$_SESSION['uri'];
  
  }
 // mysqli_error($conn);

}

else if(isset($_POST['mobile']))
{
    $mobile=$_POST['mobile_No'];
    $sql_mobile="UPDATE users SET User_Mobile='$mobile' WHERE id=$u_id";

    if(mysqli_query($conn,$sql_mobile))
    {
      header("Location:http://127.0.0.1".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    
    }
   // mysqli_error($conn);
}


else if(isset($_POST['user_name']))
{
    $name=$_POST['name'];
    $sql_name="UPDATE users SET name='$name' WHERE id=$u_id";

    if(mysqli_query($conn,$sql_name))
    {
      header("Location:http://127.0.0.1".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    
    }
   // mysqli_error($conn);
}

else if(isset($_POST['education']))
{
    $uni=$_POST['uni'];
    $degree=$_POST['degree'];
    $year=$_POST['year'];
    $about_degree=$_POST['about_degree'];

    $temp_array[]=array("university"=>$uni,"degree"=>$degree,"year"=>$year,"about_degree"=>$about_degree);

    $education=json_encode($temp_array);
    $sql_edu="UPDATE users SET 	User_Education='$education' WHERE id=$u_id";

    if(mysqli_query($conn,$sql_edu))
    {
      header("Location:http://127.0.0.1".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    
    }
   // mysqli_error($conn);
}


else if(isset($_POST['about_me']))
{
    $about=$_POST['about'];
  
    $sql_about="UPDATE users SET 	User_About='$about' WHERE id=$u_id";

    if(mysqli_query($conn,$sql_about))
    {
      header("Location:http://127.0.0.1".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    
    }
   // mysqli_error($conn);
}



?>

