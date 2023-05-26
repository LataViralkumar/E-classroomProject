<?php 

error_reporting(0);
session_start();
$dq=mysqli_select_db($conn,"quiz_oops");

$admin_login_id=$_SESSION['admin_login_id'];

if($_SESSION['admin_login_id'])
{




include "config.php";
include "profile.php";
include "Faculty_C_counter.php";
include "course_cat.php";

$_SESSION['uri']=$_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
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
      <a class="navbar-brand" href="#">E-classroom</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <!--  <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen"><h5>Users</h5></button>
  <button class="tablinks" onclick="openCity(event, 'Course')"><h5>category</h5></button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')"><h5>Exam</h5></button>
  <button class="tablinks" onclick="openCity(event, 'test')"><h5>Create Faculty</h5></button>
  <button class="tablinks" onclick="openCity(event, 'comment')"><h5>comment</h5></button>
  <button class="tablinks" onclick="openCity(event, 'problem')"><h5>Problem Solveing</h5></button>
  <button class="tablinks" onclick="openCity(event, 'feedback')"><h5>Feedback</h5></button>
  <button class="tablinks" onclick="openCity(event, 'admin')"><h5>Change Password</h5></button>

</div>

<div id="Profile" class="tabcontent">
<?php  
        include "config.php";
       $sql_cos_list = "SELECT COUNT(id) FROM `users`";
       $q=mysqli_query($conn,$sql_cos_list); 
       //echo $x;
       $result=mysqli_num_rows($q);
   
    if($result!=0)
    {
         
      while($da=mysqli_fetch_assoc($q))
      {     
        $user_count=$da['COUNT(id)'];
      }
    }
    else
    {
     echo "error";
    }
 ?>

    <!--MANGR USER-->
<h1>Total Users:<?php echo $user_count; ?></h1>
<h1></h1>
<h1>Today Register User:</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No:</th>
      <th scope="col">Email</th>
      <th scope="col">Reg_date</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $y=date("y");
       $m=date("m");
       $dw=date("d");
       $dpp=$y."%".$m."%".$dw."%";
       $sql_profile = "SELECT * FROM users WHERE createdOn LIKE '$dpp'";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td>  <a href="user_profile.php?id=<?php echo $d['id'];?>">  <?php  echo $d['name']; ?> </a></td>
          <td><?php  echo $d['email']; ?></td>
          <td><?php  echo $d['User_Mobile']; ?></td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="user_delete.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>


<!--today adde-->



<!--tooday add end-->


<!--- this month-->

<h1>This Month Register User:</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No:</th>
      <th scope="col">Email</th>
      <th scope="col">Reg_date</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $y=date("y");
       $m=date("m");
       $dw=date("d");
       $dpp=$y."%".$m."%";
       $sql_profile = "SELECT * FROM users WHERE createdOn LIKE '$dpp'";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td>  <a href="user_profile.php?id=<?php echo $d['id'];?>">  <?php  echo $d['name']; ?> </a></td>
          <td><?php  echo $d['email']; ?></td>
          <td><?php  echo $d['User_Mobile']; ?></td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="user_delete.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>

<!--- this month  end -->

<!--all users rige-->

<h1>All Ragister Users:</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile No:</th>
      <th scope="col">Email</th>
      <th scope="col">Reg_date</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $sql_profile = "SELECT * FROM users";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td>  <a href="user_profile.php?id=<?php echo $d['id'];?>">  <?php  echo $d['name']; ?> </a></td>
          <td><?php  echo $d['email']; ?></td>
          <td><?php  echo $d['User_Mobile']; ?></td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="user_delete.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>
<!--all user end-->


</div>






<div id="test" class="tabcontent">

<!--faculty create profile -->

<form action="create_faculty.php" method="POST" enctype="multipart/form-data">
  <h1></h1>
  <div class="row">
    <div class="col-md-3">
        <label>Name:</label>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text" name="username" placeholder="Enter  Name.. " required>
    </div>
    </div>
    <h1></h1>
    <div class="row">
    <div class="col-md-3">
        <label>Email:</label>
    </div>
        <div class="col-md-3">
       
  
        <input class="form-control z-depth-1" type="email"  name="email" placeholder="Enter Email..." required>

    </div>
    </div>
<h1></h1>
    <div class="row">
    <div class="col-md-3">
        <label>Login_ID:</label>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text" minlength="8"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!,@,#,$,&,$,.]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="Login" placeholder="Enter Login_ID .." required>
    </div>
    </div>
    <h1></h1>
    <div class="row">
    <div class="col-md-3">
        <label>Mobile_No:</label>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="tel" pattern="^\d{10}$"  name="mobile" placeholder="Enter Mobile No..." required>
    </div>
    </div>

    <h1></h1>
    <div class="row">
    <div class="col-md-3">
    <label>Password</label>
    </div>
        <div class="col-md-3">

        <input class="form-control z-depth-1" type="password" minlength="8"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!,@,#,$,&,$,.]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  name="pass" placeholder="Enter Password.." required>
    </div>
    </div>


<h1></h1>
    <div class="row">
    <div class="col-md-3">
        <label>Conform Password:</label>
    </div>
        <div class="col-md-3">
        <input class="form-control z-depth-1" type="password" minlength="8"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!,@,#,$,&,$,.]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" placeholder="Enter conform password.." required>
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

<hr>
<!--MANGR USER-->


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
   
      <th scope="col">Email</th>
      <th scope="col">Mobile No:</th>
      <th scope="col">Login_ID</th>
      <th scope="col">Password</th>
      <th scope="col">Reg_date</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $sql_profile = "SELECT * FROM  faculty_table";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td>  <a href="faculty_profile.php?id=<?php echo $d['Faculty_ID'];?>">  <?php  echo $d['Faculty_Name']; ?> </a></td>
          <td><?php  echo $d['Faculty_Email']; ?></td>
          <td><?php  echo $d['Faculty_Mobile']; ?></td>
          <td><?php  echo $d['Faculty_Login_ID']; ?></td>
          <td><?php  echo $d['Faculty_Password']; ?></td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
         
          
      <a href="faculty_delete.php?id=<?php echo $d['Faculty_ID'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>


</div>

    
<!--faculty create profile end  -->
</div>

<div id="Course" class="tabcontent coursecss">
  
  <!--course_category course end-->

  <h1>Course_Category:</h1>
 <form action="cat_add.php" method="post">
 <div class="row">
    <div class="col-md-0">
        <label>&nbsp &nbsp Add Category:</label>
        </br>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text"   name="catt" placeholder="Enter Category .." required>
          </br>
          <button class="btn btn-primary" name="adddd" value="insert">Submit</button>
    </div>
    </div>
    </br>
  </form>  
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Category_Name</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $sql_profile = "select  * from course_category";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td> <?php  echo $d['Category_Name']; ?></td>
          
          
          <th scope="col">
      
  
      <a href="delete_cat_course.php?id=<?php echo $d['Category_ID'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>



  <!--course_category course end-->




 <!--course_category course end-->

 <h1>Exam Category:</h1>
 <form action="cat_add.php" method="post">
 <div class="row">
    <div class="col-md-0">
        <label>&nbsp &nbsp Add Category:</label>
        </br>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text"   name="catt" placeholder="Enter Category .." required>
          </br>
          <button class="btn btn-primary" name="addd" value="insert">Submit</button>
    </div>
    </div>
    </br>
  </form>  
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Category_Name</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $sql_profile = "select  * from  quiz_oops.category";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td>  <?php  echo $d['cat_name']; ?></td>
          <th scope="col">
      
  
      <a    href="delete_cat_exam.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>



  <!--course_category course end-->




</div>



<div id="Tokyo" class="tabcontent">
   <!--exam start -->


   <!-- exam end-->
</div>

<div id="admin" class="tabcontent">


<!-- change pass-->



 <form action="change_pass.php" method="post">
 <div class="row">
    <div class="col-md-0">
        <label>&nbsp &nbsp Change Password:</label>
        </br>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text"   name="old" placeholder="Enter old password .." required>
          </br>
          <input class="form-control z-depth-1" type="text"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!,@,#,$,&,$,.]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  name="new" placeholder="Enter new Password .." required>
          </br>
          <button class="btn btn-primary" name="addd" value="insert">Submit</button>
    </div>
    </div>
    </br>
  </form>  


  <form action="change_pass.php" method="post">
 <div class="row">
    <div class="col-md-0">
        <label>&nbsp &nbsp Change Login_ID:</label>
        </br>
    </div>
        <div class="col-md-3">
          <input class="form-control z-depth-1" type="text"   name="old" placeholder="Enter old login_id .." required>
          </br>
          <input class="form-control z-depth-1" type="text"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!,@,#,$,&,$,.]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  name="new" placeholder="Enter new login_id .." required>
          </br>
          <button class="btn btn-primary" name="adddd" value="insert">Submit</button>
    </div>
    </div>
    </br>
  </form>  

<!--end pass -->
</div>



<div id="comment" class="tabcontent">
<!--cooment-->
<!--todat start-->
<h1>Today`s Comment:</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">User_id</th>
      <th scope="col">Comment</th>
      <th scope="col">comment_date</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $y=date("y");
       $m=date("m");
       $dw=date("d");
       $dpp=$y."%".$m."%";
       $sql_profile = "SELECT * FROM comments WHERE createdOn LIKE '$dpp'";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td> <a href="user_profile.php?id=<?php echo $d['userID'];?>">  <?php  echo $d['userID']; ?> </a></td>
          <td> <a href="cooment_replay.php?id=<?php echo $d['id'];?>"> <?php echo $d['comment']; ?> </a></td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="comment_delete.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>

<!--- today  end -->


<h1>This Month Comments:</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">User_id</th>
      <th scope="col">Comment</th>
      <th scope="col">comment_date</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $y=date("y");
       $m=date("m");
       $dw=date("d");
       $dpp=$y."%".$m."%";
       $sql_profile = "SELECT * FROM comments WHERE createdOn LIKE '$dpp'";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
           <td> <a href="user_profile.php?id=<?php echo $d['userID'];?>">  <?php  echo $d['userID']; ?> </a></td>
          <td> <a href="cooment_replay.php?id=<?php echo $d['id'];?>"> <?php echo $d['comment']; ?> </a></td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="comment_delete.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>

<!--- this month  end -->




<!--coomnet end-->
</div>

<!--problem solving-->

<div id="problem" class="tabcontent">
    
     <!--month start -->
   <h1>Today`s Problem:</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">User_id</th>
      <th scope="col">Problem</th>
      <th scope="col">PROB_DATE</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $y=date("y");
       $m=date("m");
       $dw=date("d");
       $dpp=$y."%".$m."%".$dw."%";
       $sql_profile = "SELECT * FROM question WHERE createdOn LIKE '$dpp'";
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
          <td> <a href="q_ans.php?id=<?php echo $d['id'];?>"> <?php echo $d['question']; ?> </a></td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="prob_d.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>

<!--- this month  end -->

   <!--month start -->
   <h1>This Month Problem:</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">User_id</th>
      <th scope="col">Problem</th>
      <th scope="col">PROB_DATE</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $y=date("y");
       $m=date("m");
       $dw=date("d");
       $dpp=$y."%".$m."%";
       $sql_profile = "SELECT * FROM question WHERE createdOn LIKE '$dpp'";
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
          <td> <a href="q_ans.php?id=<?php echo $d['id'];?>"> <?php echo $d['question']; ?> </a></td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="prob_d.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>

<!--- this month  end -->
 <!--month start -->
 <h1>All Problem:</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">User_id</th>
      <th scope="col">Problem</th>
      <th scope="col">PROB_DATE</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
     
       $sql_profile = "SELECT * FROM question";
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
          <td> <a href="q_ans.php?id=<?php echo $d['id'];?>"> <?php echo $d['question']; ?> </a></td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="prob_d.php?id=<?php echo $d['id'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>

<!--- this month  end -->




<!--coomnet end-->
</div>

   <!-- exam end-->
</div>
<!--problem solve end -->



<div id="feed_b">

<div id="feedback" class="tabcontent">
<h1>Today`s FeedBack:</h1>

<!--today feedback feedback-->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Feedback</th>
      <th scope="col">Feedback_DATE</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $y=date("y");
       $m=date("m");
       $dw=date("d");
       $dpp=$y."%".$m."%".$dw."%";
       $sql_profile = "SELECT * FROM feedback_table WHERE createdOn LIKE '$dpp'";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
          <td> <?php echo $d['FeedBack']; ?> </td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="feedback_delete.php?id=<?php echo $d['FeedBack_ID'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>

<!--Today,s Feedback start-->

<!--this month feedback-->
<h1>This Month FeedBack:</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Feedback</th>
      <th scope="col">Feedback_DATE</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $y=date("y");
       $m=date("m");
       $dw=date("d");
       $dpp=$y."%".$m."%";
       $sql_profile = "SELECT * FROM feedback_table WHERE createdOn LIKE '$dpp'";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
          <td> <?php echo $d['FeedBack']; ?> </td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="feedback_delete.php?id=<?php echo $d['FeedBack_ID'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>

<!-- this month feedback end-->


<!--this month feedback-->
<h1>All FeedBack:</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Feedback</th>
      <th scope="col">Feedback_DATE</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <?php  
       $y=date("y");
       $m=date("m");
       $dw=date("d");
       $dpp=$y."%".$m."%";
       $sql_profile = "SELECT * FROM feedback_table";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
   $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
          <td> <?php echo $d['FeedBack']; ?> </td>
          <td><?php  echo $d['createdOn']; ?></td>
          <th scope="col">
      
  
      <a href="feedback_delete.php?id=<?php echo $d['FeedBack_ID'];?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>

<!-- this month feedback end-->

</div>

</div>
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
  window.location.href="http://127.0.0.1/admin/index.php";
  </script>';
}
?>