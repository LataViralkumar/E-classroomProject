<?php 
error_reporting(0);
session_start();
include "course_cat.php";
$Faculty_login_id=$_SESSION['faculty_login_id'];

if($_SESSION['faculty_login_id'])
{


include "config.php";
include "profile.php";
include "Faculty_C_counter.php";


$_SESSION['uri']=$_SERVER['REQUEST_URI'];
$_SESSION['f_id']= $Faculty_ID;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Faculty</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="test.css">
  <script src="semantic.min.js"></script>
  <link rel="stylesheet" href="semantic.min.css">
  <script src="uikit.min.js"></script>
  <link rel="stylesheet" href="uikit.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://kit.fontawesome.com/e2c3d82e56.js" crossorigin="anonymous"></script>
  
  <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link rel="stylesheet" href="w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>

.set-margin
{
  margin-top: -1rem;
}

.image--cover {

  height: 250px;
  border-radius: 0%;
  margin: 0px;

  object-fit: cover;
  object-position: center right;
 
}
.img_exam
{
margin:1px;
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
      <a class="navbar-brand" href="http://127.0.0.1/rebuld/faculty.php">E-classroom</a>
    

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <li>  <a class="" href="http://127.0.0.1/rebuld/questionadd.php">Timeline</a></li>
       <!--  <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><?php  ?> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen"><h5>Profile</h5></button>
  <button class="tablinks" onclick="openCity(event, 'Course')"><h5>Course</h5></button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')"><h5>Exam</h5></button>
  <button class="tablinks" onclick="openCity(event, 'test')"><h5>Update profile</h5></button>
  <button class="tablinks" onclick="openCity(event, 'Group-D')"><h5>Group-D</h5></button>
</div>

<div id="Profile" class="tabcontent">
    
<!-- Page Container -->
<div class="w3-content w3-margin-top content-margin" style="max-width:1400px;">

<!-- The Grid -->
<div class="w3-row-padding">

  <!-- Left Column -->
  <div class="w3-third">
  
    <div class="w3-white w3-text-grey w3-card-4 set-margin">
      <div class="w3-display-container">
        <img class="image--cover" src="<?php  echo "http://127.0.0.1/rebuld/upload/". $Faculty_Photo;  ?>" style="width:100% " alt="Avatar">
        <div class="w3-display-bottomleft w3-container w3-text-black">
          <h2 class="text-capitalize"><?php  echo $Faculty_Name; ?></h2>
        </div>
      </div>
      <div class="w3-container">
      <h1></h1>
        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal text-capitalize"></i>E-classrom Educatore</p> <?php foreach ($Faculty_Location  as $ul) { ?>
        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal text-capitalize"></i><?php  echo $ul['Country']." ,".$ul['State']." ,".$ul['city']; ?> </p>  <?php } ?>
        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php  echo $Faculty_Email; ?></p>
        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php  echo   $Faculty_Mobile; ?></p>
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
        <br>
      </div>
    </div><br>
     <?php } ?>
  <!-- End Left Column -->
  </div>

  <!-- Right Column -->
  <div class="w3-twothird  set-margin ">
  
    
    <?php  
     foreach($edd as $zz)
     {
    ?>
    <div class="w3-container w3-card w3-white">
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
      <div class="w3-container ">
        <h5 class="w3-opacity text-capitalize"><b><?php echo $zz['degree']."  ".$zz['university']; ?></b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo  $zz['year']; ?></h6>
        <p class="text-muted"><?php echo  $zz['about_degree']; ?></p>
        <hr>
      </div>
     
     <?php } ?>
     
     

      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>About Me:</h2>
      <div class="w3-container">
        <h5 class="w3-opacity"><b>  </b></h5>
        <h6 class="w3-text-teal"></h6>
        <p class="text-muted"><?php echo $Faculty_About; ?></p>
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
 <!--
<h1></h1>
                                           <form action="Faculty_update.php?u_id=<?php //echo  $Faculty_ID; ?>" method="post">
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
    -->                                    
                                       
 <form action="Faculty_update.php?u_id=<?php echo  $Faculty_ID; ?>" method="POST">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile_Number:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input name="mobile_No" type="text" placeholder="Mobile_Number...">
                                                     <button name="mobile" class="ui inverted blue button"><i class="fas fa-mobile"></i></button>
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                        </form>
<hr>

<form action="Faculty_update.php?u_id=<?php echo  $Faculty_ID; ?>" method="post">
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


<form action="Faculty_update.php?u_id=<?php echo  $Faculty_ID; ?>" method="POST">
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

<form action="Faculty_update.php?u_id=<?php echo  $Faculty_ID; ?>" method="POST">
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
                                                     <textarea name="about_degree" id="" cols="60" rows="3" placeholder="About Degree..."></textarea>
                                                    
                                                     </div>
                                                 </p>
                                                 <button name="education" class="ui inverted blue button"><i class="fas fa-university"></i></button>
                                            </div>
                                        </div>
                                        </form>
<hr>

<!-- <form action="" method="post">
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
<hr> -->


<form action="Faculty_update.php?u_id=<?php echo  $Faculty_ID; ?>" method="POST">
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
<form action="Faculty_update.php?u_id=<?php echo  $Faculty_ID; ?>" method="POST">
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
                                      
 <form action="faculty_photo_update.php?u_id=<?php echo  $Faculty_ID; ?>"  enctype="multipart/form-data"  method="POST">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Photo Change:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="file" name="file">
                                                     <button name="p_data" class="ui inverted blue button"><i class="fas fa-cloud-upload-alt"></i></button>
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                        </form>
<hr>

<?php
//  if(isset($_POST['p_data'])){
//   echo $_POST['p_data'];
//        $_u=$_GET['u_id'];
  
//   $maxsize = 5242880; // 5MB
 
//   $name = $_FILES['file']['name'];
//   print_r($_FILES);
//   $target_dir = "upload/";
//   $target_file = $target_dir . $_FILES["file"]["name"];

//   // Select file type
//   $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//   // Valid file extensions
//   $extensions_arr = array("jpeg","jpg","png","JPEG","gif");

//   // Check extension
//   if( in_array($videoFileType,$extensions_arr) ){

//      // Check file size
//      if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
//        echo "File too large. File must be less than 5MB.";
//      }else{
//        // Upload
//        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
        
//           $sql_photo="UPDATE user_table SET 	User_Photo='$name' WHERE User_id=$_u";
//            mysqli_query($conn,$sql_photo); 

//          echo mysqli_error($conn);
//          echo "<h3>Upload successfully.</h3>";
//        }
//      }

//   }else{
//     echo "Invalid file extension.";
//   }


// }
  ?>
                   

 <!--update profile end-->
</div>
</div>

<!-- Group-D start  -->

<div id="Group-D" class="tabcontent">

<div class="container">
  <div class="row">
    <div class="col-6">
       <H1></H1>
       <button class="btn btn-danger"> <a href="http://127.0.0.1/video call/indx.php" style="text-decoration: none;"  >START NOW </a> </button>
       
       <H1></H1>
    </div>
    <div class="col-6"> 
      <h3>Group Discussion Register:</h3>
      <form action="gd.php?F_id= <?php echo $Faculty_ID; ?>" method="POST">

        <div class="form-group mx-5">
         <label for="exampleInputEmail1"  class="form_text" >Username: </label>
         <input type="text" name="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group mx-5">
         <label for="exampleInputPassword1" class="form_text">Password:</label>
         <input type="password" name="Password" class="form-control" id="exampleInputPassword1" required>
        </div>
        
        <button type="submit"  class="btn btn-primary mx-5">Submit</button>
        <h1></h1>
      </form>

      <hr>
             


    
<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">#id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Faculty_ID</th>
      <th scope="col">onCreate</th>
    
    </tr>
    </thead>
    <?php  
       $sql_profile ="SELECT * FROM `gd` WHERE $Faculty_ID";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
 
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php  echo $d['id']; ?></th>
           <td><?php  echo $d['username']; ?> </a></td>
          <td><?php  echo $d['password']; ?></td>
          <td><?php  echo $d['faculty_id']; ?></td>
          <td><?php  echo $d['date_time']; ?></td>
    
          <th scope="col">
      
  
      <a href="del_gd.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>
       
      
    </div>
    


  </div>
</div>


</div>


<!-- Group-Dend -->

<div id="Course" class="tabcontent coursecss">
  <!-- video course-->

  
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
  <h1></h1>
  <div class="row">
    <div class="col-md-3">
        <label>Course_Name:</label>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text" name="Course_Name" placeholder="Enter Course Name.. " required>
    </div>
    </div>
    <h1></h1>
    <div class="row">
    <div class="col-md-3">
        <label>Course_Description:</label>
    </div>
        <div class="col-md-3">
        <div class="form-group shadow-textarea" required>
  
  <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write Course Description here..." name="Course_des" ></textarea>
</div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-3">
        <label>Playlist_ID:</label>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text" name="Playlist_ID" placeholder="Enter Playlist ID .." required>
    </div>
    </div>
    <h1></h1>
    <div class="row">
    <div class="col-md-3">
        <label>Course_Note_Link:</label>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text"  name="Course_Note" placeholder="Enter Note_Link.." required>
    </div>
    </div>

    <h1></h1>
    <div class="row">
    <div class="col-md-3">
    <label>Category:</label>
    </div>
        <div class="col-md-3">
         <select class="form-control z-depth-1" name="category" >
          <?php  
                 $ds=json_decode(file_get_contents('cat_course.json'),true);
                 $i=0;$j=0;
                 foreach($ds as $value)
                 {
                // echo $ds[$i++]['category_id'];
               ?>
               
              <option value="<?php  echo $ds[$j]['Category_Name']; ?>"><?php  echo $ds[$j++]['Category_Name']; ?></option>
           <?php  } ?>
         </select>
    </div>
    </div>


<h1></h1>
    <div class="row">
    <div class="col-md-3">
        <label>Playlist_photo:</label>
    </div>
        <div class="col-md-3">
         <input  type='file' name='file' />
    </div>
    </div>


   <h1></h1>
    <div class="row">
    <div class="col-md-3">
        <label></label>
    </div>
        <div class="col-md-3">
         <button class="btn btn-primary" name="insert" value="insert">Submit</button>
    </div>
    </div>
</form>
   <h1>Video Course:</h1>

<h1></h1>

   <form action="http://127.0.0.1/REBULD/course_delete.php" method="GET">
   <div class="row">
    <div class="col-md-8">
        
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text"  name="Course_titel" placeholder="Enter Course Name" required>
          <input type="checkbox" name="" id=""><span>Disable</span>
    </div>
    <div class="col-md-1">
    <button class="btn btn-danger" name="delete" value="delete">Delete</button>
    </div>
    </div>
    </form>
    

    

    <h1></h1>
 <!--php video course start-->
 <?php
 if(isset($_POST['insert'])){
  $Course_Titel=$_POST['Course_Name'];
  $Course_des=$_POST['Course_des'];
  $course_Faculty_ID=$Faculty_ID;
  $Course_Faculty_Name=$Faculty_Name;
  $course_category_name=$_POST['category'];
  $Course_Playlist_ID=$_POST['Playlist_ID'];
  $Course_Study_Note=$_POST['Course_Note'];
  
  
  $maxsize = 5242880; // 5MB
 
  $name = $_FILES['file']['name'];
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
        
           $sql_cosc = "INSERT INTO video_course(Course_ID, Course_Titel, Course_Description, Course_Faculty_ID, Course_Faculty_Name, Course_Study_Note, Course_Playlist_ID,course_category_name,Playlist_photo) VALUES ('','$Course_Titel','$Course_des','$course_Faculty_ID','$Course_Faculty_Name','$Course_Study_Note','$Course_Playlist_ID','$course_category_name','$name')";
           mysqli_query($conn,$sql_cosc); 

         echo mysqli_error($conn);
         echo "<h3>Upload successfully.</h3>";
       }
     }

  }else{
    echo "Invalid file extension.";
  }


}
  ?>
  <!--php video course end-->
  
  <div class="container"> 
  <div class="card-group card-wr card-deck ">  
  <?php 
   // echo " <div class='card-group card-deck'>";
       error_reporting(0);
       $sql_cos_disp= "SELECT * FROM `video_course` WHERE Course_Faculty_ID=$Faculty_ID ";
       $qq=mysqli_query($conn,$sql_cos_disp); 
       
       $result_disp=mysqli_num_rows($qq);
 
    if($result_disp!=0)
    {
         
      while($data_disp=mysqli_fetch_assoc($qq))
      {     
        ?>

     
     <a class="uk-link-heading"  href="http://127.0.0.1/REBULD/product-page.php?Course_Playlist_ID=<?php echo $data_disp['Course_Playlist_ID'];  ?>&Course_Titel= <?php echo $data_disp['Course_Titel'];  ?>&Course_Description=<?php echo $data_disp['Course_Description']; ?>&Course_Study_Note=<?php echo $data_disp['Course_Study_Note'];?>&User_id=<?php echo  $Faculty_ID; ?>&F_id=<?php echo  $Faculty_ID; ?>">
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
  <!--video course end-->
</div>

<div id="Tokyo" class="tabcontent">

<!--exam start  -->
<div class="ui card ">
<a href="http://127.0.0.1/rebuld/exam/exam_add.php?id=<?php echo  $Faculty_ID; ?>">
  <div class="content">
    <div class="center aligned header">Exam</div>
    <div class="center aligned description">
      <p>E-classroom Exam</p>
    </div>
  </div>
  <div class="extra content">
    <div class="center aligned author">
      <img  class="ui avatar image" src="http://127.0.0.1/rebuld/upload/exam.jpg">
    </div>
  </div></a>
</div>
<!-- exam end -->
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






</body>
</html>

<?php 
}
else
{
  echo '<script>
  window.location.href="http://127.0.0.1/rebuld/index.php";
  </script>';
}
?>