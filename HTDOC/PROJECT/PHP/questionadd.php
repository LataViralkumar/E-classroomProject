<?php
session_start();
error_reporting(0);
include "sign_up/config.php";
if($_SESSION['email_ii'])
{
$user_email=$_SESSION['email_ii'];
include "user_profile.php";

?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    

<title>Timeline</title>
  </head> 
 
  <body>
 
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
     <!--  <ul class="nav navbar-nav">
        <li class="active"><a href="questionadd.php?id=<?php //echo $id; ?>">Timeline</a></li>
       <li><a href="#">About</a></li>
        <li><a href="#">Projects </a></li>
        <li><a href="#">Contact</a></li>
      </ul>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> <?php ?> Logout   </a></li>
      </ul>
    </div>
  </div>
</nav>




  <?php
    if (isset($_POST['q_send'])) {

$question = $_POST['question'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */

$sql = "INSERT INTO question (question, u_id,u_name,createdOn)
VALUES ('".$question."','".$_GET['id']."','".$User_Name."', NOW())";/* Set User id from session variable on place of 21*/

if (mysqli_query($conn,$sql)) {
   // echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

  ?>  

<div class="container py-5">

<h1 class="text-muted">Ask question</h1>
<form action="" method="POST" >
<div class="form-group">
<label for="question" class="text-muted">Question:</label>
<textarea class="form-control" name="question" id="question" cols="100" rows="3" aria-describedby="questionHelp"   placeholder="Enter question.."  required></textarea>
<!--<input type="text" name="question" class="form-control"    required> -->
<small id="questionHelp" class="form-text ">Don't add single word questions</small>
</div>    
<button type="submit" name="q_send"  class="btn btn-info w-25" id="addpollbtn" 
>POST</button>
</form>
</div>


<div class="container py-5">

<h1 class="text-muted">All Question:</h1>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 
$sql = "SELECT question.question ,question.id,question.createdOn,users.name,users.User_Photo FROM question inner JOIN users on users.id=question.u_id ORDER BY id DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  

    // output data of each row
    while($row = $result->fetch_assoc()) {
  $idd=$row['id'];
    ?>
 
 <!--   <div class="card">
      <div class="card-body">
        <h1 class="card-title"><?php //echo $row['question'];?> <a href="answer.php?id=<?php //echo $row['id']?>">Answer question</a></h1>
      </div>
    </div>  -->





    <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <a href="#">
                            <img class="media-object img-circle" src="<?php echo "http://127.0.0.1/PROJECT/PHP/upload/".$row['User_Photo'];?>" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                        </a>
                    </div>
                    <h4><a href="#" style="text-decoration:none;"><strong><?php  echo $row['name']; ?></strong></a></h4>
                    <span>
                        <div class="navbar-right">
                            
                        </div>
                    </span>
                    <hr>
                    <div class="post-content">
                        <p>Simple post content example.</p>
                        <p>  <span class="text-primary">Problem:</span>    <?php echo $row['question'];?> </p>
                        <h6 class="text-secondary text-muted"><?php echo $row['createdOn']; ?></h6>
                     <h1><a href="answer.php?id=<?php echo $_GET['id'];?>&q=<?php echo $row['question'];?>&q_id=<?php echo $idd;?>&name=<?php echo $row['name'];?> &q_photo=<?php echo $row['User_Photo'];?>&q_date=<?php echo $row['createdOn']; ?>" class="badge badge-pill badge-secondary"> View Solution</a></h1>
                    </div>
                    </br>
                    
                    <hr>
                    <div class="media">
                       
                        <div class="media-body">
                           
                        </div>
                    </div>
                </div>
            </div>
        

    <?php
    }
} else {
    echo "0 results";
}
$conn->close();


  ?>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php 
}
else{
  header("Location:http://127.0.0.1/PROJECT/PHP/homepage.php");
}