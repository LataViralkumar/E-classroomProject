<?php

 error_reporting(0);
 session_start();
 if($_SESSION['email_ii'])
{
$user_email=$_SESSION['email_ii'];

include "sign_up/config.php";

$_SESSION['uri']=$_SERVER['REQUEST_URI'];

include "user_profile.php";
//include "show_skill.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./CSS/test.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <script src="https://kit.fontawesome.com/e2c3d82e56.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <style>
.set-margin
{
  margin-top: -1rem;
}

 * {font-family: "Roboto", sans-serif}
 .image--cover {
  width: 150px;
  height: 180px;
  border-radius: 0%;
  margin: 0px;

  object-fit: cover;
  object-position: center right;
}
 </style>
  
</head>
<body ng-app>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://127.0.0.1/PROJECT/PHP/User_Deshbord.php">E-classroom</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="questionadd.php?id=<?php echo $id; ?>">Problem Solve</a></li>
     <!--   <li><a href="#">About</a></li>
        <li><a href="#">Projects </a></li>
        <li><a href="#">Contact</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> <?php ?> Logout   </a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen"><h5>Profile</h5></button>
  <button class="tablinks" onclick="openCity(event, 'Course')"><h5>Course</h5></button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')"><h5>Exam</h5></button>
  <button class="tablinks" onclick="openCity(event, 'test')"><h5>Update Profile</h5></button>
  <button class="tablinks" onclick="openCity(event, 'Group-D')"><h5>Group-D</h5></button>
</div>

<div id="Profile" class="tabcontent">


<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding set-margin">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img class="image--cover " src="<?php  echo "http://127.0.0.1/project/PHP/upload/".$User_Photo;  ?>"  style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $User_Name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $User_occupation; ?></p> <?php foreach ($User_Location  as $ul) { ?>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php  echo $ul['Country']." ,".$ul['State']." ,".$ul['city']; ?> </p>  <?php } ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php  echo  $User_Email;  ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php  echo  $User_Mobile; ?></p>
          <hr>
 


          <?php  
       foreach($qq as $zz)
       {
      
?>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p class="text-capitalize"><?php echo $zz[0]['skill_name']; ?> </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $zz[0]['skill_pr']."%"; ?>"><?php echo $zz[0]['skill_pr']."%"; ?></div>
          </div>
          <p class="text-capitalize"><?php echo $zz[1]['skill_name']; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $zz[1]['skill_pr']."%"; ?>">
              <div class="w3-center w3-text-white"><?php echo $zz[1]['skill_pr']."%"; ?></div>
            </div>
          </div>
          <p class="text-capitalize"><?php echo $zz[2]['skill_name']; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $zz[2]['skill_pr']."%"; ?>"><?php echo $zz[2]['skill_pr']."%"; ?></div>
          </div>
          <p class="text-capitalize"><?php echo $zz[3]['skill_name']; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $zz[3]['skill_pr']."%"; ?>"><?php echo $zz[3]['skill_pr']."%"; ?></div>
          </div>

          <p class="text-capitalize"><?php echo $zz[4]['skill_name']; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $zz[4]['skill_pr']."%"; ?>"><?php echo $zz[4]['skill_pr']."%"; ?></div>
          </div>
        
          <br>
  <?php } ?>
    
         
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
    <?php  
       foreach($edd as $zz)
       {
      ?>
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity text-capitalize"><b><?php echo $zz['degree']."  ".$zz['university']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo  $zz['year']; ?></h6>
          <p><?php echo  $zz['about_degree']; ?></p>
          <hr>
        </div>
       
       <?php } ?>
  
       <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>About Me:</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>  </b></h5>
          <h6 class="w3-text-teal"></h6>
          <p><?php echo $about_me; ?></p>
          <hr>
        </div>
      
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
 </div>
 <div id="test" class="tabcontent">
<!--update profile-->

 <!--update profile-->
 <h1></h1>
                                           <form action="" method="post">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>User_Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="name" placeholder="UserName...">
                                                     <button name="user_name" class="ui inverted blue button"><i class="fas fa-user-edit"></i></button>
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                        </form>
<hr>
                                        
                                       
                                       
 <form action="User_profile_update.php?u_id=<?php echo $id ?>" method="POST">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile_Number:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input name="mobile_No" type="tel" pattern="^\d{10}$" placeholder="Mobile_Number...">
                                                     <button name="mobile" class="ui inverted blue button"><i class="fas fa-mobile"></i></button>
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                        </form>
<hr>

<form action="User_profile_update.php?u_id=<?php echo $id; ?>" method="post">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Location:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <select  name="contry"  class="ui button">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/countries.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['name']; ?>"><?php  echo $ds[$j++]['name']; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                                  <?php $_SERVER['REQUEST_URI']; ?>
                                                     
                                                     </div>
                                                 </p>

                                                 <p>
                                                     <div class="ui action input">
                                                     <select  name="state"class="ui button" >
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/city.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['state']; ?>"><?php  echo $ds[$j++]['state']; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                    
                                                     </div>
                                                 </p>

                                                 <p>
                                                     <div class="ui action input">
                                                     <select  name="city"  class="ui button" >
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/city.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['name']; ?>"><?php  echo $ds[$j++]['name']; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                   
                                                     </div>
                                                 </p>

                                                 <button name="city_update" class="ui inverted blue button"><i class="fas fa-city"></i></button>
                                            </div>
                                        </div>
                                        </form>
<hr>


<form action="User_profile_update.php?u_id=<?php echo $id; ?>" method="POST">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Occupation:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="occupation" placeholder="occupation...">
                                                     <button name="update_occupation" class="ui inverted blue button"><i class="fas fa-briefcase"></i></button>
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                        </form>
<hr>

<form action="User_profile_update.php?u_id=<?php echo $id; ?>" method="POST">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>University:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="uni" placeholder="university..." >
                                                     <input type="text"  name=degree placeholder="degree ...">
                                                     <select  name="year"  class="ui button ">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/year.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['year']; ?>"><?php  echo $ds[$j++]['year']; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                                  
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <textarea name="about_degree" id="" cols="60" rows="3"></textarea>
                                                    
                                                     </div>
                                                 </p>
                                                 <button name="education" class="ui inverted blue button"><i class="fas fa-university"></i></button>
                                            </div>
                                        </div>
                                        </form>
<hr>

<form action="" method="post">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>About_Degree:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <textarea name="" id="" cols="60" rows="3"  placeholder="Degree description.."></textarea>
                                                     <button class="ui inverted blue button"><i class="fas fa-graduation-cap"></i></button>
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                        </form>
<hr>


<form action="User_profile_update.php?u_id=<?php echo $id; ?>" method="POST">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>About_Me:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <textarea name="about" id="" cols="60" rows="3"  placeholder="about me..."></textarea>
                                                     <button name="about_me" class="ui inverted blue button"><i class="fas fa-user"></i></button>
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                        </form>
<hr>
<form action="User_profile_update.php?u_id=<?php echo $id; ?>" method="POST">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Skills:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_1" placeholder="Skill 1...">
                                                     <select  name="skill_pr_1"   class="ui button " >
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_2" placeholder="Skill 2...">
                                                     <select  name="skill_pr_2"   class="ui button " >
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                    
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_3" placeholder="Skill 3...">
                                                     <select   name="skill_pr_3"   class="ui button ">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                    
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_4" placeholder="Skill 4...">
                                                     <select   name="skill_pr_4"   class="ui button ">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                   
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_5" placeholder="Skill 5...">
                                                     <select   name="skill_pr_5"   class="ui button ">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                    
                                                     </div>
                                                 </p>
                                                 <button name="skill" class="ui inverted blue button"><i class="fas fa-theater-masks"></i></button>
                                            </div>
                                        </div>
                                        </form>
                                        <hr>
                                      
 <form id="user_photo" action="User_photo.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Photo Change:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="file" id="file" name="file">
                                                     <button type="submit" name="p_data" class="ui inverted blue button"><i class="fas fa-cloud-upload-alt"></i></button>
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                        </form>
<hr>
<!-- <script>

$("#user_photo").submit(function (e) { 
    e.preventDefault();
    
    const f = document.getElementsByName('file').val;
alert(f)
    // const d = $("#file").val();
    $.ajax({
        type: "POST",
        url: "User_photo.php",
        data: d,
        success: function (response) {
            
            
        }
    });
    
});

</script> -->
<?php
 if(isset($_POST['p_data'])){
  echo $_POST['p_data'];
       $_u=$id;
  
  $maxsize = 5242880; // 5MB
 
  $name = $_FILES['file']['name'];
  print_r($_FILES);
  $target_dir = "upload/";
  $target_file = $target_dir . $_FILES["file"]["name"];

  // Select file type
  $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpeg","jpg","png","JPEG","gif");

  // Check extension
  if( in_array($videoFileType,$extensions_arr) ){

     // Check file size
     if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
       echo "File too large. File must be less than 5MB.";
     }else{
       // Upload
       if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
        
          $sql_photo="UPDATE user_table SET 	User_Photo='$name' WHERE User_id=$_u";
           mysqli_query($conn,$sql_photo); 

         echo mysqli_error($conn);
         echo "<h3>Upload successfully.</h3>";
       }
     }

  }else{
    echo "Invalid file extension.";
  }


}
  ?>
                   

 <!--update profile end-->
</div>


</div>


<div id="Course" class="tabcontent">
<!-- video course start -->

 
<div class="container"> 
  <div class="card-group card-wr card-deck ">  
  <?php 
   // echo " <div class='card-group card-deck'>";
       error_reporting(0);
       $sql_cos_disp= "SELECT * FROM `video_course` ";
       $qq=mysqli_query($conn,$sql_cos_disp); 
       
       $result_disp=mysqli_num_rows($qq);
 
    if($result_disp!=0)
    {
         
      while($data_disp=mysqli_fetch_assoc($qq))
      {     
        ?>

     
     <a class="uk-link-heading"  href="http://127.0.0.1/PROJECT/PHP/product-page.php?Course_Playlist_ID=<?php echo $data_disp['Course_Playlist_ID'];  ?>&Course_Titel= <?php echo $data_disp['Course_Titel'];  ?>&Course_Description=<?php echo $data_disp['Course_Description']; ?>&Course_Study_Note=<?php echo $data_disp['Course_Study_Note'];?>&User_id=<?php echo  $d['id']; ?>">
     <div class="card">
     <img class="card-img-top img-b"  src="<?php  echo "http://127.0.0.1/REBULD/upload/".$data_disp['Playlist_photo']; ?>">
     <div class="card-body card-img-overlay">
      <h4 class="card-title" ><b><?php echo $data_disp['Course_Titel'];  ?></b></h4>
      <small class="text-muted font-italic">Created By:<?php echo $data_disp['Course_Faculty_Name']; ?></small>
    
    </div>
  </div>
</a>

        <?php
      
      }
    }
?>

</div>
</div>

<!--vide course end-->
</div>

<!-- gd start here -->
<div id="Group-D" class="tabcontent">

<div class="card text-center">
  <div class="card-header">
 
  </div>
  <div class="card-body m-5 ">
    <h5 class="card-title text-danger">Group Discussion </h5>
    <p class="card-text"></p>
    <a href="gd_login.php" class="btn btn-danger mt-2">Join Now</a>
    <h1></h1>
  </div>
</div>
  
</div>



<!-- gd end here -->
<div id="Tokyo" class="tabcontent">
 <!-- exam start-->

 <?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>


 <div class="container">

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>E-Classrom Online Test</h3>
  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Quiz</button></center>       
   <div class="col-sm-4"></div>
   <div class="col-sm-4"><br>
   <div id="select" class="tab-pane fade">

    <form  method="post" action="quiz_oops/qus_show.php">
    <select class="form-control" id="" name="cat">
    <option>select category</option>
    <?php		  
    foreach($profile->cat as $category)
    {  ?>			  			
    <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
    <?php   }?>
    </select><br>
    <center><input type="submit" value="submit" class="btn btn-primary" /></center>
  </form>
 
  
  </div>
  </div>
<!--
</div>
</div>
-->



  <!--exam end -->
</div>

<div id="Group-D" class="tabcontent">



</div>


  

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
<?php   } 
else
{
  header("Location:http://127.0.0.1/PROJECT/PHP/homepage.php");
}

?>



