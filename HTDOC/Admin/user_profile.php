


<?php
error_reporting(0);
       $temp=$_GET['id'];
       include "config.php";
    
       $sql_profile = "SELECT * FROM `users` WHERE id='$temp'";
       $x=mysqli_query($conn,$sql_profile); 
       
       $result=mysqli_num_rows($x);
   
       if($result!=0)
    {
         
      while($d=mysqli_fetch_assoc($x))
      {     

        $name=$d['name'];
        $User_Email=$d['email'];
        $User_Mobile=$d['User_Mobile'];
        $User_occupation=$d['User_occupation'];
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


<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
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
 
</style></head>
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
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding set-margin">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img class="image--cover " src="<?php  echo "http://127.0.0.1/project/PHP/upload/".$User_Photo;  ?>"  style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $User_occupation; ?></p> <?php foreach ($User_Location  as $ul) { ?>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php  echo $ul['Country']." ,".$ul['State']." ,".$ul['city']; ?> </p>  <?php } ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php  echo $User_Email;  ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php  echo  $User_Mobile ?></p>
          <hr>
 


          <?php  
       foreach($qq as $zz)
       {
      
?>

          <p class="w3-large"><b><i class="fa fa-asterisk w3 w3-spin  fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
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
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate w3 w3-spin  fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity text-capitalize"><b><?php echo $zz['degree']."  ".$zz['university']; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo  $zz['year']; ?></h6>
          <p><?php echo  $zz['about_degree']; ?></p>
          <hr>
        </div>
       
       <?php } ?>
  
       <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate w3 w3-spin  fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>About Me:</h2>
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



</body>
</html>
