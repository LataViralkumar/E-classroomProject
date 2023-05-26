

<?php
session_start();
//error_reporting(0);

include "config.php";
$u_id=$_GET['u_id'];
$temp_array=array();

//echo "Location:http://127.0.01".$_SESSION['uri'];

if(isset($_POST['city_update']))
{
    $country=$_POST['contry'];
    $state=$_POST['state'];
    $city=$_POST['city'];
   
   
    $temp_array[]=array("Country"=>$country,"State"=>$state,"city"=>$city);

    $en=json_encode($temp_array);
   
    $sql_loc="UPDATE faculty_table SET Faculty_Location='$en' WHERE Faculty_ID=$u_id";

    if(mysqli_query($conn,$sql_loc))
    {
      header("Location:http://127.0.01".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    
    }
   // mysqli_error($conn);
}
else if (isset($_POST['update_occupation']))
{
     $occ=$_POST['occupation'];
     $sql_occ="UPDATE faculty_table SET User_occupation='$occ' WHERE Faculty_ID=$u_id";

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
 
  $sql_skill="UPDATE faculty_table SET Faculty_Degree='$skills' WHERE Faculty_ID=$u_id";

  if(mysqli_query($conn,$sql_skill))
  {
    header("Location:http://127.0.01".$_SESSION['uri']);
   // echo "127.0.0.1".$_SESSION['uri'];
  
  }
 // mysqli_error($conn);

}

else if(isset($_POST['mobile']))
{
    $mobile=$_POST['mobile_No'];
    $sql_mobile="UPDATE faculty_table SET Faculty_Mobile='$mobile' WHERE Faculty_ID=$u_id";

    if(mysqli_query($conn,$sql_mobile))
    {
      header("Location:http://127.0.01".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    
    }
   // mysqli_error($conn);
}


else if(isset($_POST['user_name']))
{
    $name=$_POST['name'];
    $sql_name="UPDATE faculty_table SET Faculty_Name='$name' WHERE Faculty_ID=$u_id";

    if(mysqli_query($conn,$sql_name))
    {
      header("Location:http://127.0.01".$_SESSION['uri']);
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
    $sql_edu="UPDATE faculty_table SET 	Faculty_Education='$education' WHERE Faculty_ID=$u_id";

    if(mysqli_query($conn,$sql_edu))
    {
      header("Location:http://127.0.01".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    
    }
   // mysqli_error($conn);
}


else if(isset($_POST['about_me']))
{
    $about=$_POST['about'];
  
    $sql_about="UPDATE faculty_table SET Faculty_About='$about' WHERE Faculty_ID=$u_id";

    if(mysqli_query($conn,$sql_about))
    {
      header("Location:http://127.0.01".$_SESSION['uri']);
     // echo "127.0.0.1".$_SESSION['uri'];
    
    }
   // mysqli_error($conn);
}

echo mysqli_error($conn);

?>

