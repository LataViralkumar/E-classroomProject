
<?php 
error_reporting(0);
session_start();
include "course_cat.php";
$Faculty_login_id=$_SESSION['faculty_login_id'];

if($_SESSION['faculty_login_id'])
{


include "config.php";
include "profile.php";
//include "Faculty_C_counter.php";


$_SESSION['uri']=$_SERVER['REQUEST_URI'];
$_SESSION['f_id']= $Faculty_ID;

?>
<?php
  include "cat.php";    
 // include "config.php";
  $fid=$_GET['id'];
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title> Exam Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    
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


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
 
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
     
          <a class="navbar-brand" href="http://127.0.0.1/rebuld/faculty.php">E-classroom</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
      <!--    <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul> -->
          <ul class="nav navbar-nav navbar-right">
        <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span><?php  ?> Logout</a></li>
      </ul>
        </div>
      </div>
    </nav>
   

    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-9 col-sm-offset-3 col-md-5 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="table-responsive">
            <table class="table table-striped">
				  <form method="post" action="add_quiz.php?id=<?php echo $_GET['id']; ?>">
					<div class="form-group">
					  <label for="text">Question</label>
            <textarea name="qes" id="" cols="30" rows="6" class="form-control" placeholder="Enter question..." required></textarea>
					 
					</div>

					<div class="form-group">
					  <label for="text">Option-A</label>
					  <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1" required>
					</div>
					<div class="form-group">
					  <label for="text">Option-B</label>
					  <input type="text" class="form-control" name="op2"  placeholder="Enter option-2" required>
					</div>
					
					<div class="form-group">
					  <label for="text">Option-C</label>
					  <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3" required>
					</div>
					
					<div class="form-group">
					  <label for="text">Option-D</label>
					  <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option-4" required>
					</div>
					<div class="form-group">
					  <label for="text">answer</label>
					
            <select class="form-control z-depth-1 form-control" name="ans" required>
               
               <option>Select Answer</option>
              <option value="0">Option:A</option>
              <option value="1">Option:B</option>
              <option value="2">Option:C</option>
              <option value="3">Option:D</option>

         </select>

					</div>
						<div class="form-group">
						   
			
              <select class="form-control z-depth-1 form-control" name="cat" required >
                <?php  
                 $ds=json_decode(file_get_contents('cat.json'),true);
         
                 foreach($ds as $value)
                 {
               
               ?>
              <option value="<?php  echo $value['id']; ?>"><?php  echo $value['cat_name']; ?></option>
           <?php  } ?>
         </select>
						</div>
					<button type="submit" class="btn btn-primary">Submit</button><br>
				  </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



    <!--MANGR USER-->

<h1>Today:</h1>
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
       $sql_profile = "SELECT * FROM questions WHERE Faculty_ID='$fid' and  createdOn='$ddd' ";
       $x=mysqli_query($conn,$sql_profile); 
     
       $result=mysqli_num_rows($x);
       $i=1;
      while($d=mysqli_fetch_assoc($x))
      {     
        echo mysqli_error($conn);
   ?>
    
        <tbody>
        <tr>
          <th scope="row"><?php echo $i++; ?></th>
          <td><?php  echo $d['question']; ?></td>
          <td><?php  echo $d['ans1']; ?></td>
          <td><?php  echo $d['ans2']; ?></td>
          <td><?php  echo $d['ans3']; ?></td>
          <td><?php  echo $d['ans4']; ?></td>
          <td><?php  echo $d['ans']; ?></td>
          <td><?php  echo $d['Delete']; ?></td>
          <th scope="col">
      
  
      <a href="qustion_delete.php?id=<?php echo $d['id'];?>&fid=<?php echo $fid; ?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>


</div>








    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
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
