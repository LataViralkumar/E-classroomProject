
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/qna/style/background.css">
    <link rel="stylesheet" href="/static/qna/style/font.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<title>Ask question</title>
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

$sql = "INSERT INTO answer (question,answer, u_id)
VALUES ('".$question."','".$answer."', 21)";/* Set User id from session variable on place of 21*/

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
  ?>
  <body>
    

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
$sql = "SELECT * FROM question where id='".$_GET['id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    ?>
    <div class="card">
      <div class="card-header">
        <h1 class="card-title" style="color:red;">Question : <?php echo $row['question'];?></h1>
        <?php
        $sql = "SELECT * FROM answer where question='".$_GET['id']."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
           echo "Answer:" .$row['answer'];
          echo "<hr/>";
        }
        }

        ?>
        <form method="POST">
          <input type="hidden" name="question" value="<?php echo $_GET['id'];?>">
            <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter Answer here</label>
    <textarea class="form-control" name="answer" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary w-25" id="addpollbtn">Submit</button>
        </form>
      </div>
    </div>
    <?php
    
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