<?php
  include "profile.php"; 
  include "Faculty_C_counter.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./test.css">
   <style>
   

   </style>
</head>
<body ng-app="">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<section>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Profile</button>
  <button class="tablinks" onclick="openCity(event, 'Course')">Course</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
  <button class="tablinks" onclick="openCity(event, 'test')">test</button>
</div>

<div id="Profile" class="tabcontent">
  <!--<h3>London</h3>
  <p>London is the capital city of England.</p>-->


  <!-- profile case satrt-->
                                 




            


 <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                            <img height="100%" width="100%" src="<?php echo $Faculty_Photo; ?>" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h2>
                                       <?php echo $Faculty_Name; ?>
                                    </h2>
                                    <h6>
                                        E-Classroom Educator
                                    </h6>
                                    <p class="proile-rating">Faculty number Of Course: <span><?php echo  $Faculty_c_count; ?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                             <!--   <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo  $Faculty_Login_ID; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $Faculty_Name; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $Faculty_Email; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile_No:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo  $Faculty_Mobile; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                       <!--     <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>  -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</div>

<!-- profile case end  -->


 <!-- <div id="Course" class="tabcontent">course case start here-->

 <div id="Course" class="tabcontent">
  <!-- video course-->

  
  <form action="" method="POST" enctype="multipart/form-data">
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
        <label>Playlist_photo:</label>
    </div>
        <div class="col-md-3">
         <input type='file' name='file' />
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
   <div class="row">
    <div class="col-md-8">
        
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text"  name="Course_Note" placeholder="Enter Course Name" required>
         <input type="checkbox" name="" id=""><span> Disable</span>
    </div>
    <div class="col-md-1">
          <button class="btn btn-danger" name="insert" value="">Delete</button>
    </div>
    </div>
    
    <h1></h1>
 <!--php video course start-->
 <?php 
 if(isset($_POST['insert'])){
  $Course_Titel=$_POST['Course_Name'];
  $Course_des=$_POST['Course_des'];
  $course_Faculty_ID=$d['Faculty_ID'];
  $Course_Faculty_Name=$d['Faculty_Name'];
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
        
           $sql_cosc = "INSERT INTO video_course(Course_ID, Course_Titel, Course_Description, Course_Faculty_ID, Course_Faculty_Name, Course_Study_Note, Course_Playlist_ID,Playlist_photo) VALUES ('','$Course_Titel','$Course_des','$course_Faculty_ID','$Course_Faculty_Name','$Course_Study_Note','$Course_Playlist_ID','$name')";
           mysqli_query($conn,$sql_cosc); 

         
         echo "Upload successfully.";
       }
     }

  }else{
    echo "Invalid file extension.";
  }


}
  ?>
  <!--php video course end-->
  <div class="card-group card-deck">  
  <?php 
   // echo " <div class='card-group card-deck'>";
       error_reporting(0);
       $sql_cos_disp= "SELECT * FROM `video_course` WHERE Course_Faculty_ID=2";
       $qq=mysqli_query($conn,$sql_cos_disp); 
       
       $result_disp=mysqli_num_rows($qq);
 
    if($result_disp!=0)
    {
         
      while($data_disp=mysqli_fetch_assoc($qq))
      {     
          
        ?>
  <a href="http://127.0.0.1/Youtube-Video/product-page.php?Course_Playlist_ID=<?php echo $data_disp['Course_Playlist_ID'];  ?>&Course_Titel= <?php echo $data_disp['Course_Titel'];  ?>&Course_Description=<?php echo $data_disp['Course_Description']; ?>&Course_Study_Note=<?php echo $data_disp['Course_Study_Note'];  ?>">
  <div class="card">
    <img class="card-img-top img-b"  src="<?php  echo "http://127.0.0.1/Youtube-Video/upload/".$data_disp['Playlist_photo']; ?>" alt="#">
    <div class="card-body card-img-overlay">
      <h4 class="card-title text-capitalize" ><b><?php echo $data_disp['Course_Titel'];  ?></b></h4>
      <small class="text-muted font-italic">Created By:<?php echo $data_disp['Course_Faculty_Name']; ?></small>
     
     
    </div>
  </div>
</a>
        <?php
      //  echo "</div>";
      }
    }
?>
</div>
  <!--video course end-->
</div>
<!--  course insert code end-->


 <!-- course case end here-->
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="test" class="tabcontent">
  <h3>test</h3>
  <p>test is the capital of Japan.</p>
</div>

</div>
</section>

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
