


<?php include "config.php" ?>

<?php  


error_reporting();

//echo(($conn)?"add":"Not add");

//echo(($da)?"add":"Not add");

       $temp=$_GET['id'];
       $sql_profile = "SELECT * FROM `faculty_table` WHERE Faculty_ID=$temp";
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

<?php  
$id=$_GET['id'];
        include "config.php";
       $sql_cos_list = "SELECT COUNT(Course_Faculty_ID) FROM `video_course` WHERE Course_Faculty_ID=$temp";
       $q=mysqli_query($conn,$sql_cos_list); 
       //echo $x;
       $result=mysqli_num_rows($q);
   
    if($result!=0)
    {
         
      while($da=mysqli_fetch_assoc($q))
      {     
        $Faculty_c_count=$da['COUNT(Course_Faculty_ID)'];
      }
    }
    else
    {
     echo "error";
    }
 ?>

<!DOCTYPE html>
<html>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script src="uikit.min.js"></script>
   <link rel="stylesheet" href="uikit.min.css">
   <link rel="stylesheet" href="product-page.css">


<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
<style>

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

<body class="w3-light-grey">

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


        <p class="w3-large"><b><i class="fa fa-asterisk w3 w3-spin fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
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
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate w3 w3-spin fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
      <div class="w3-container ">
        <h5 class="w3-opacity text-capitalize"><b><?php echo $zz['degree']."  ".$zz['university']; ?></b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo  $zz['year']; ?></h6>
        <p class="text-muted"><?php echo  $zz['about_degree']; ?></p>
        <hr>
      </div>
     
     <?php } ?>
     
     

      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate w3 w3-spin fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>About Me:</h2>
      <div class="w3-container">
        <h5 class="w3-opacity"><b>  </b></h5>
        <h6 class="w3-text-teal"></h6>
        <p class="text-muted"><?php echo $Faculty_About; ?></p>
        <hr>
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-refresh w3 w3-spin fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Progress</h2>
        <div class="w3-container">
        <h5 class="w3-opacity"><b>  </b></h5>
        <h6 class="w3-text-teal"></h6>
        <p class="text-muted"><?php echo "Course Added:". $Faculty_c_count;  ?></p>
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

</hr>


<?php  
        include "config.php";
       $sql_cos_list = "SELECT COUNT(Course_Faculty_ID) FROM `video_course` WHERE Course_Faculty_ID=$temp";
       $q=mysqli_query($conn,$sql_cos_list); 
       //echo $x;
       $result=mysqli_num_rows($q);
   
    if($result!=0)
    {
         
      while($da=mysqli_fetch_assoc($q))
      {     
        $Faculty_c_count=$da['COUNT(Course_Faculty_ID)'];
      }
    }
    else
    {
     echo "error";
    }
 ?>


  
  <h1>Added Course:</h1>
   <h1></h1>

  
  <!--php video course end-->
  
  <div class="container"> 
  <div class="card-group card-wr card-deck ">  
  <?php 
   // echo " <div class='card-group card-deck'>";
   
       $sql_cos_disp= "SELECT * FROM `video_course` WHERE Course_Faculty_ID=$temp";
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



<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Course_Titel</th>
      <th scope="col">Course_Description</th>
      <th scope="col">Course_Faculty_ID</th>
      <th scope="col">Course_Faculty_Name </th>
      <th scope="col">course_category_name</th>
      <th scope="col"> Delete</th>
    </tr>
    </thead>
    <?php  
       $sql_profile = "SELECT * FROM video_course WHERE 	Course_Faculty_ID='$temp'";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td>  <?php  echo $d['Course_Titel']; ?> </a></td>
          <td><?php  echo $d['Course_Description']; ?></td>
          <td><?php  echo $d['Course_Faculty_ID']; ?></td>
          <td><?php  echo $d['Course_Faculty_Name']; ?></td>
          <td><?php  echo $d['course_category_name']; ?></td>
          <th scope="col">
      
  
      <a href="course_delete.php?id=<?php echo $id;?>&cid=<?php echo $d['Course_Titel']; ?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>


  <!--video course end-->
<?php $daa=mysqli_select_db($conn,"quiz_oops"); ?>
  <h1>Exam Question:</h1>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Question</th>
      <th scope="col">Answer A</th>
      <th scope="col">Answer B</th>
      <th scope="col">Answer C</th>
      <th scope="col">Answer D</th>
      <th scope="col">Wright Answer</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php 
      $ddd=date('d-m-Y');  
       $sql_profile = "SELECT * FROM questions WHERE Faculty_ID='$temp' ";
       $x=mysqli_query($conn,$sql_profile); 
     
       $result=mysqli_num_rows($x);
       $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
        echo mysqli_error($conn);
   ?>
    
        <tbody>
        <tr>
          <th scope="row"><?php echo $i++."."; ?></th>
          <td><?php  echo $d['question']; ?></td>
          <td><?php  echo $d['ans1']; ?></td>
          <td><?php  echo $d['ans2']; ?></td>
          <td><?php  echo $d['ans3']; ?></td>
          <td><?php  echo $d['ans4']; ?></td>
          <td><?php  echo $d['ans']; ?></td>
         
          <th scope="col">
      
  
      <a href="qustion_delete.php?id=<?php echo $id;?>&fid=<?php echo $d['id']; ?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>




</body>
</html>
