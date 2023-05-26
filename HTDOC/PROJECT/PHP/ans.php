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
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
     
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="questionadd.php?id=<?php echo $id; ?>">Timeline</a></li>
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





</html>
<?php   } 
else
{
  header("Location:http://127.0.0.1/PROJECT/PHP/homepage.php");
}

?>



