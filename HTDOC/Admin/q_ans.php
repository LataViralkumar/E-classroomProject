


<?php
error_reporting(0);
       $temp=$_GET['id'];
       include "config.php";
    
       $sql_profile = "SELECT * FROM `answer` WHERE 	question='$temp'";
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
 </style>
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

  <h1>Replies:</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">User_id</th>
      <th scope="col">Answer</th>
      <th scope="col">createdOn</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $id=$_GET['id'];
       $sql_profile = "SELECT * FROM `answer` WHERE 	question='$id'";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td> <a href="user_profile.php?id=<?php echo $d['u_id'];?>">  <?php  echo $d['u_id']; ?> </a></td>
          <td> <?php echo $d['answer']; ?></td>
          <td><?php  echo $d['onCreate']; ?></td>
          <th scope="col">
      
  
      <a href="delete_ans.php?id=<?php echo $d['id'];?>"> 
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
