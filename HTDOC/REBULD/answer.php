<?php 
error_reporting(0);
session_start();
include "course_cat.php";
$Faculty_login_id=$_SESSION['faculty_login_id'];

if($_SESSION['faculty_login_id'])
{


include "config.php";
//include "profile.php";
//include "Faculty_C_counter.php";


$_SESSION['uri']=$_SERVER['REQUEST_URI'];
$_SESSION['f_id']= $Faculty_ID;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



<title>Timeline</title>
  </head> 
  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $question = $_POST['question'];
  $answer = $_POST['answer'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$_qid=$_GET['q_id'];
$id=44;
$sql = "INSERT INTO answer (question,answer, u_id,onCreate)
VALUES ('".$_qid."','".$answer."','".$id."',NOW() )";/* Set User id from session variable on place of 21*/

if ($conn->query($sql) === TRUE) {
 //   echo "New record created successfully";
} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
  ?>
  <body>
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


<div class="container py-5">

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_classroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$sql = "SELECT * FROM question where id='".$_GET['id']."'";
//$result = $conn->query($sql);

//if ($result->num_rows > 0) {
    // output data of each row
  //  $row = $result->fetch_assoc();
    ?>
     <h1 class="text-muted">Solution:</h1>   
    <div class="panel panel-default">
                <div class="panel-body">
                   
                    <span>
                        <div class="navbar-right">
                            
                        </div>
                    </span>
                    
                    </br>
                    <div class="post-content">
                    <div class="pull-left">
                        <a href="#">
                            <img class="media-object img-circle" src="<?php echo "http://127.0.0.1/PROJECT/PHP/upload/".$_GET['q_photo'];?>" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                             
                        </a>
                        <h4><a href="#" style="text-decoration:none;"><strong> <?php echo $_GET['name']; ?>  </strong></a></h4>
                    </div>
                    </br>
                    </br></br></br></br>
                    <p>  <span class="text-primary">Problem:</span>  <strong> <?php echo $_GET['q'];?></strong>  </p>
                    
                 
                  </div>
               </div>   
               </div>
                        <?php
        //$sql = "SELECT * FROM answer where question=99";
        $qid=$_GET['q_id'];
        $sql="SELECT answer.answer,answer.question,users.name,users.User_Photo,answer.onCreate FROM answer inner join question on question.id=answer.question inner join users on users.id=answer.u_id where question.id='$qid'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
?>         
            <div class="post-content">
          <!--  <div class="pull-left">
                        <a href="#">
                            <img class="media-object img-circle" src="<?php //echo "http://127.0.0.1/PROJECT/PHP/upload/".$row['User_Photo'];?>" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                        </a>
                    </div>
                    <h4><a href="#" style="text-decoration:none;"><strong> <?php// echo $row['name']; ?>  </strong></a></h4>
            <p> <span class="text-primary">Answer:</span><?php// echo $row['answer']; ?></p>
            <h6 class="text-secondary"><?php// echo $row['onCreate']; ?></h6>
          
        </div>-->
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
                       
                        <p>  <span class="text-primary">Answer:</span>    <?php echo $row['answer'];?> </p>
                        
                        <h6 class="text-secondary text-muted"><?php echo $_GET['q_date']; ?></h6>
                     
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
           
          echo "<hr/>";
        }
        }

        ?>
                      
                    </div>
                    </br>
                    <form method="POST">
          <input type="hidden" name="question" value="<?php echo $_GET['id'];?>">
            <div class="form-group">
    
    <textarea class="form-control" name="answer"  cols="100" rows="3"  placeholder="Enter Your answer.."   required></textarea>
  </div>
  <button type="submit" class="btn btn-primary w-25" id="addpollbtn">POST</button>
        </form>
                
                    <hr>
                    <div class="media">
                       
                        <div class="media-body">
                           
                        </div>
                    </div>
                </div>
            </div>








    <?php
    
//} else {
//    echo "0 results";
//}
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
  header("Location:http://127.0.0.1/rebuld/faculty.php");
}